<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>History - ReadSense AI</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

    <style>
        @font-face {
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f7ff;
        }

        .glass-card {
            background: white;
            border: 1px solid #ececff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        }

        .sidebar-gradient {
            background: linear-gradient(180deg, #eef4ff 0%, #f7f9ff 100%);
        }

        .primary-gradient {
            background: linear-gradient(135deg, #3b82f6, #4f46e5);
        }

        .green-gradient {
            background: linear-gradient(135deg, #4ade80, #22c55e);
        }

        .purple-gradient {
            background: linear-gradient(135deg, #a855f7, #7c3aed);
        }

        .orange-gradient {
            background: linear-gradient(135deg, #fb923c, #f59e0b);
        }

        .menu-active {
            background: linear-gradient(135deg, #3b82f6, #4f46e5);
            color: white;
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.25);
        }

        .menu-item {
            transition: .2s;
        }

        .menu-item:hover {
            background: #edf2ff;
        }

        .table-head {
            background: #f8f9ff;
        }
    </style>

</head>

<body>

    <div class="min-h-screen flex">

        <aside class="w-[280px] sidebar-gradient border-r border-indigo-100 flex flex-col justify-between">

            <div>

                <div class="px-8 pt-10 pb-8">
                    <div class="items-center gap-3">
                        <div class="w-14 h-14 rounded-2xl primary-gradient flex items-center justify-center shadow-lg">
                            <i class="fa-solid fa-book-open text-white text-xl"></i>
                        </div>

                        <div>
                            <h1 class="text-3xl font-bold text-slate-800">
                                ReadSense AI
                            </h1>

                            <p class="text-sm text-slate-500">
                                Sistem Clustering Pembelajaran
                            </p>
                        </div>
                    </div>
                </div>

                <nav class="px-5 space-y-3">

                    <a href="/productivity"
                        class="menu-item flex items-center gap-4 px-5 py-4 rounded-2xl font-semibold">
                        <i class="fa-solid fa-house text-lg"></i>
                        Dashboard
                    </a>

                    <a href="/statistics"
                        class="menu-item flex items-center gap-4 px-5 py-4 rounded-2xl text-slate-600 font-medium">
                        <i class="fa-solid fa-chart-pie"></i>
                        Statistics
                    </a>

                    <a href="/history"
                        class="menu-active flex items-center gap-4 px-5 py-4 rounded-2xl text-slate-600 font-medium">
                        <i class="fa-solid fa-chart-pie"></i>
                        History
                    </a>

                    <a href="/about"
                        class="menu-item flex items-center gap-4 px-5 py-4 rounded-2xl text-slate-600 font-medium">
                        <i class="fa-solid fa-circle-info"></i>
                        About
                    </a>

                </nav>

                <div class="px-6 mt-12">
                    <img src="https://cdn-icons-png.flaticon.com/512/2436/2436874.png" class="w-full opacity-95" />
                </div>

            </div>

            <div class="p-5">
                <div class="glass-card rounded-2xl p-4 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600">
                        <i class="fa-solid fa-users"></i>
                    </div>

                    <div>
                        <h4 class="font-semibold text-slate-700">
                            Kelompok UTS
                        </h4>

                        <p class="text-sm text-slate-500">
                            Decision Tree & Clustering
                        </p>
                    </div>
                </div>
            </div>

        </aside>

        <main class="flex-1 p-8">

            <div class="flex items-center justify-between mb-10">

                <div>

                    <h1 class="text-6xl font-bold text-slate-800">
                        History
                    </h1>

                    <p class="text-slate-500 mt-3 text-xl">
                        Seluruh riwayat hasil prediksi dan analisis produktivitas pengguna.
                    </p>

                </div>

                <div class="flex items-center gap-4">

                    <div class="glass-card rounded-2xl px-6 py-4 flex items-center gap-4">

                        <div class="w-14 h-14 rounded-2xl primary-gradient flex items-center justify-center text-white">
                            <i class="fa-solid fa-database text-xl"></i>
                        </div>

                        <div>

                            <p class="text-slate-500 text-sm">
                                Total Data
                            </p>

                            <h2 class="text-3xl font-bold text-slate-800">
                                {{ \App\Models\ProductivityLog::count() }}
                            </h2>

                        </div>

                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-8 mb-8">

                <div class="flex items-center justify-between mb-8">

                    <div>

                        <h2 class="text-3xl font-bold text-indigo-600">
                            Riwayat Prediksi
                        </h2>

                        <p class="text-slate-500 mt-2">
                            Daftar lengkap seluruh data produktivitas pengguna.
                        </p>

                    </div>

                    <div class="flex items-center gap-4">

                        <div class="relative">

                            <input type="text" id="searchInput" placeholder="Cari label..."
                                class="w-[300px] h-14 rounded-2xl border border-slate-200 px-5 pl-14 outline-none focus:border-indigo-500">

                            <i class="fa-solid fa-magnifying-glass absolute left-5 top-5 text-slate-400"></i>

                        </div>

                    </div>

                </div>

                <div class="overflow-x-auto">

                    <table class="w-full">

                        <thead>

                            <tr class="table-head text-slate-700">

                                <th class="p-5 text-left rounded-l-2xl">No</th>
                                <th class="p-5 text-left">Lama Waktu</th>
                                <th class="p-5 text-left">Penggunaan Buku</th>
                                <th class="p-5 text-left">Intensitas Device</th>
                                <th class="p-5 text-left">Interaksi</th>
                                <th class="p-5 text-left">Fokus</th>
                                <th class="p-5 text-left">Label</th>
                                <th class="p-5 text-left rounded-r-2xl">Tanggal</th>

                            </tr>

                        </thead>

                        <tbody id="historyTable">

                            @forelse(\App\Models\ProductivityLog::latest()->get() as $index => $item)
                                <tr class="border-b border-slate-100 hover:bg-slate-50 transition">

                                    <td class="p-5">
                                        {{ $index + 1 }}
                                    </td>

                                    <td class="p-5">

                                        @switch($item->lama_waktu)
                                            @case(1)
                                        < 15 Menit @break @case(2) 15 - 30 Menit @break
                                            @case(3) 31 - 45 Menit @break
                                            @case(4) 46 - 60 Menit @break
                                                @case(5)> 60 Menit
                                                @break
                                            @endswitch

                                    </td>

                                    <td class="p-5">
                                        {{ $item->penggunaan_buku }}/5
                                    </td>

                                    <td class="p-5">
                                        {{ $item->intensitas_device }}/5
                                    </td>

                                    <td class="p-5">
                                        {{ $item->tingkat_interaksi }}/5
                                    </td>

                                    <td class="p-5">
                                        {{ $item->tingkat_fokus }}/5
                                    </td>

                                    <td class="p-5">

                                        <span
                                            class="
                                    px-4 py-2 rounded-full text-sm font-semibold
                                    {{ str_contains($item->label_hasil, 'Produktif') ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}
                                ">
                                            {{ $item->label_hasil }}
                                        </span>

                                    </td>

                                    <td class="p-5 text-slate-500">
                                        {{ $item->created_at->format('d M Y') }}
                                    </td>

                                </tr>

                                @empty

                                    <tr>

                                        <td colspan="8" class="text-center p-10 text-slate-400">
                                            Tidak ada data riwayat.
                                        </td>

                                    </tr>
                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

                <div class="grid grid-cols-3 gap-6">

                    <div class="glass-card rounded-3xl p-8">

                        <div
                            class="w-20 h-20 rounded-3xl primary-gradient flex items-center justify-center text-white shadow-lg mb-6">
                            <i class="fa-solid fa-chart-line text-3xl"></i>
                        </div>

                        <h2 class="text-2xl font-bold text-slate-800 mb-4">
                            Produktif Individu
                        </h2>

                        <h1 class="text-5xl font-bold text-indigo-600 mb-4">
                            {{ \App\Models\ProductivityLog::where('label_hasil', 'Produktif Individu')->count() }}
                        </h1>

                        <p class="text-slate-500 leading-8">
                            Total pengguna dengan kategori produktif individu.
                        </p>

                    </div>

                    <div class="glass-card rounded-3xl p-8">

                        <div
                            class="w-20 h-20 rounded-3xl green-gradient flex items-center justify-center text-white shadow-lg mb-6">
                            <i class="fa-solid fa-users text-3xl"></i>
                        </div>

                        <h2 class="text-2xl font-bold text-slate-800 mb-4">
                            Produktif Kolaboratif
                        </h2>

                        <h1 class="text-5xl font-bold text-green-600 mb-4">
                            {{ \App\Models\ProductivityLog::where('label_hasil', 'Produktif Kolaboratif')->count() }}
                        </h1>

                        <p class="text-slate-500 leading-8">
                            Total pengguna dengan kategori produktif kolaboratif.
                        </p>

                    </div>

                    <div class="glass-card rounded-3xl p-8">

                        <div
                            class="w-20 h-20 rounded-3xl orange-gradient flex items-center justify-center text-white shadow-lg mb-6">
                            <i class="fa-solid fa-triangle-exclamation text-3xl"></i>
                        </div>

                        <h2 class="text-2xl font-bold text-slate-800 mb-4">
                            Kurang Produktif
                        </h2>

                        <h1 class="text-5xl font-bold text-orange-500 mb-4">
                            {{ \App\Models\ProductivityLog::where('label_hasil', 'Kurang Produktif')->count() }}
                        </h1>

                        <p class="text-slate-500 leading-8">
                            Total pengguna dengan kategori kurang produktif.
                        </p>

                    </div>

                </div>

            </main>

        </div>

        <script>
            const searchInput = document.getElementById('searchInput');

            searchInput.addEventListener('keyup', function() {

                let filter = searchInput.value.toLowerCase();

                let rows = document.querySelectorAll('#historyTable tr');

                rows.forEach(row => {

                    let text = row.innerText.toLowerCase();

                    row.style.display = text.includes(filter) ?
                        '' :
                        'none';

                });

            });
        </script>

    </body>

    </html>
