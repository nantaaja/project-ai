<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductivityLog;

class ProductivityController extends Controller
{
    public function index()
    {
        // Ambil 5 data terbaru untuk histori
        $history = ProductivityLog::latest()->take(5)->get();
        return view('productivity.index', compact('history'));
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

        // Hitung label berdasarkan logic decision tree
        $label = $this->determineLabel($validated);

        // Simpan ke database
        ProductivityLog::create(array_merge($validated, ['label_hasil' => $label]));

        return redirect()->back()->with('success', "Hasil: $label");
    }

    private function determineLabel($data)
    {
        // Logika berdasarkan pola dataset (Decision Tree)
        if ($data['tingkat_fokus'] >= 5) {
            // Fokus maksimal, tinggal tentukan Individu atau Kolaboratif
            return ($data['tingkat_interaksi'] >= 3) ? 'Produktif Kolaboratif' : 'Produktif Individu';
        } 
        
        if ($data['tingkat_fokus'] == 4) {
            // Fokus sedang, dicek lama waktunya (berdasarkan ID 14 & 10)
            if ($data['lama_waktu'] >= 4) {
                return ($data['tingkat_interaksi'] >= 3) ? 'Produktif Kolaboratif' : 'Produktif Individu';
            }
            return 'Kurang Produktif';
        }

        // Fokus di bawah 4 otomatis Kurang Produktif
        return 'Kurang Produktif';
    }
}