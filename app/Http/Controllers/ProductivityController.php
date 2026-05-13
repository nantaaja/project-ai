<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductivityLog;

class ProductivityController extends Controller
{
    public function index()
    {
        $history = ProductivityLog::latest()->take(5)->get();

        $totalPredictions = ProductivityLog::count();

        $allData = ProductivityLog::all();

        $dominantCluster = $allData
            ->groupBy('label_hasil')
            ->sortByDesc(fn($item) => count($item))
            ->keys()
            ->first();

        $avgFocus = round($allData->avg('tingkat_fokus'), 1);

        $latestResult = ProductivityLog::latest()->first();

        $insight = $this->generateInsight($allData);

        $tips = $this->generateTips($allData);

        return view('productivity.index', compact(
            'history',
            'totalPredictions',
            'dominantCluster',
            'avgFocus',
            'latestResult',
            'insight',
            'tips'
        ));
    }

    public function statistics()
    {
        $history = ProductivityLog::latest()->get();

        $dominantCluster = $history
            ->groupBy('label_hasil')
            ->sortByDesc(fn($item) => count($item))
            ->keys()
            ->first();

        $avgFocus = round($history->avg('tingkat_fokus'), 1);

        $avgBook = round($history->avg('penggunaan_buku'), 1);

        $avgDevice = round($history->avg('intensitas_device'), 1);

        $avgTime = round($history->avg('lama_waktu'));

        $durationLabel = match ($avgTime) {
            1 => '< 15 Menit',
            2 => '15 - 30 Menit',
            3 => '31 - 45 Menit',
            4 => '46 - 60 Menit',
            5 => '> 60 Menit',
            default => 'Tidak Ada Data'
        };

        $produktifIndividu = $history
            ->where('label_hasil', 'Produktif Individu')
            ->count();

        $produktifKolaboratif = $history
            ->where('label_hasil', 'Produktif Kolaboratif')
            ->count();

        $kurangProduktif = $history
            ->where('label_hasil', 'Kurang Produktif')
            ->count();

        $insight = $this->generateInsight($history);

        $tips = $this->generateTips($history);

        /*
        |--------------------------------------------------------------------------
        | LINE CHART REAL DATA
        |--------------------------------------------------------------------------
        */

        $trendData = ProductivityLog::selectRaw('DATE(created_at) as date')
            ->selectRaw('AVG(tingkat_fokus) as avg_focus')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        $trendLabels = $trendData
            ->pluck('date')
            ->map(function ($date) {
                return date('d M', strtotime($date));
            });

        $trendValues = $trendData
            ->pluck('avg_focus')
            ->map(function ($value) {
                return round($value, 1);
            });

        return view('productivity.statistics', compact(
            'history',
            'dominantCluster',
            'avgFocus',
            'avgBook',
            'avgDevice',
            'durationLabel',
            'produktifIndividu',
            'produktifKolaboratif',
            'kurangProduktif',
            'trendLabels',
            'trendValues',
            'insight',
            'tips'
        ));
    }

    public function calculate(Request $request)
    {
        $validated = $request->validate([
            'lama_waktu' => 'required|numeric',
            'penggunaan_buku' => 'required|numeric',
            'intensitas_device' => 'required|numeric',
            'tingkat_interaksi' => 'required|numeric',
            'tingkat_fokus' => 'required|numeric',
        ]);

        $label = $this->determineLabel($validated);

        ProductivityLog::create(
            array_merge($validated, [
                'label_hasil' => $label
            ])
        );

        return redirect()->back()->with(
            'success',
            "Hasil Prediksi: $label"
        );
    }

    private function determineLabel($data)
    {
        if ($data['tingkat_fokus'] >= 5) {

            return ($data['tingkat_interaksi'] >= 3)
                ? 'Produktif Kolaboratif'
                : 'Produktif Individu';
        }

        if ($data['tingkat_fokus'] == 4) {

            if ($data['lama_waktu'] >= 4) {

                return ($data['tingkat_interaksi'] >= 3)
                    ? 'Produktif Kolaboratif'
                    : 'Produktif Individu';
            }

            return 'Kurang Produktif';
        }

        return 'Kurang Produktif';
    }

    private function generateInsight($history)
    {
        if ($history->count() == 0) {
            return "Belum ada data yang dapat dianalisis.";
        }

        $avgFocus = $history->avg('tingkat_fokus');

        $avgDevice = $history->avg('intensitas_device');

        $avgBook = $history->avg('penggunaan_buku');

        $text = "";

        if ($avgFocus >= 4) {

            $text .= "Mayoritas pengguna memiliki tingkat fokus yang tinggi. ";
        } else {

            $text .= "Tingkat fokus pengguna masih perlu ditingkatkan. ";
        }

        if ($avgDevice >= 4) {

            $text .= "Penggunaan device tergolong tinggi dan dapat mempengaruhi konsentrasi belajar. ";
        } else {

            $text .= "Penggunaan device masih dalam batas yang cukup baik. ";
        }

        if ($avgBook >= 4) {

            $text .= "Aktivitas membaca dan penggunaan buku cukup baik.";
        } else {

            $text .= "Penggunaan buku masih dapat ditingkatkan untuk mendukung pembelajaran.";
        }

        return $text;
    }

    private function generateTips($history)
    {
        if ($history->count() == 0) {

            return "Mulai tambahkan data produktivitas untuk mendapatkan insight.";
        }

        $avgFocus = $history->avg('tingkat_fokus');

        $avgDevice = $history->avg('intensitas_device');

        if ($avgFocus < 4) {

            return "Cobalah meningkatkan fokus belajar dan mengurangi distraksi selama sesi pembelajaran.";
        }

        if ($avgDevice >= 4) {

            return "Kurangi penggunaan device berlebihan agar fokus belajar tetap optimal.";
        }

        return "Pertahankan pola belajar saat ini karena produktivitas sudah cukup baik.";
    }
}
