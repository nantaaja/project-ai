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

        /* Class untuk styling drop-down agar konsisten dengan input lainnya */
        .custom-select {
            width: 100%;
            height: 56px;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 0 20px;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
            background: white;
            appearance: none;
            cursor: pointer;
        }

        .custom-select:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
        }
    </style>
</head>

<body>

    <div class="min-h-screen flex flex-col lg:flex-row">

        <aside
            class="w-full lg:w-[280px] lg:min-h-screen sidebar-gradient border-b lg:border-b-0 lg:border-r border-indigo-100 flex flex-col justify-between">
            <div>
                <div class="px-8 pt-10 pb-8">
                    <div class="flex items-center gap-3 text-left">
                        <div
                            class="w-14 h-14 shrink-0 rounded-2xl primary-gradient flex items-center justify-center shadow-lg">
                            <i class="fa-solid fa-book-open text-white text-xl"></i>
                        </div>
                        <div>
                            <h1 class="text-2xl md:text-3xl font-bold text-slate-800">ReadSense AI</h1>
                            <p class="text-sm text-slate-500">Sistem Clustering</p>
                        </div>
                    </div>
                </div>

                <nav class="px-5 space-y-3 lg:space-y-3 grid grid-cols-2 gap-2 lg:block mb-6 lg:mb-0">
                    <a href="/productivity"
                        class="menu-item flex items-center gap-2 md:gap-4 px-4 py-3 md:px-5 md:py-4 rounded-2xl font-semibold text-sm md:text-base">
                        <i class="fa-solid fa-house"></i> Dashboard
                    </a>
                    <a href="/statistics"
                        class="menu-item flex items-center gap-2 md:gap-4 px-4 py-3 md:px-5 md:py-4 rounded-2xl text-slate-600 font-medium text-sm md:text-base">
                        <i class="fa-solid fa-chart-pie"></i> Statistics
                    </a>
                    <a href="/history"
                        class="menu-active flex items-center gap-2 md:gap-4 px-4 py-3 md:px-5 md:py-4 rounded-2xl text-white font-medium text-sm md:text-base">
                        <i class="fa-solid fa-chart-pie"></i> History
                    </a>
                    <a href="/about"
                        class="menu-item flex items-center gap-2 md:gap-4 px-4 py-3 md:px-5 md:py-4 rounded-2xl text-slate-600 font-medium text-sm md:text-base">
                        <i class="fa-solid fa-circle-info"></i> About
                    </a>
                </nav>

                <div class="hidden lg:block px-6 mt-12">
                    <img src="https://cdn-icons-png.flaticon.com/512/2436/2436874.png" class="w-full opacity-95" />
                </div>
            </div>

            <div class="hidden lg:block p-5">
                <div class="glass-card rounded-2xl p-4 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-700 text-sm">Kelompok UTS</h4>
                        <p class="text-xs text-slate-500">Decision Tree & Clustering</p>
                    </div>
                </div>
            </div>
        </aside>

        <main class="flex-1 p-5 md:p-8 w-full overflow-hidden">

            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-8 md:mb-10">
                <div>
                    <h1 class="text-4xl md:text-6xl font-bold text-slate-800">History</h1>
                    <p class="text-slate-500 mt-2 md:mt-3 text-base md:text-xl">Seluruh riwayat hasil prediksi produktivitas.</p>
                </div>

                <div class="flex items-center self-start md:self-auto">
                    <div
                        class="glass-card rounded-2xl px-5 py-3 md:px-6 md:py-4 flex items-center gap-4 w-full md:w-auto">
                        <div
                            class="w-12 h-12 md:w-14 md:h-14 rounded-xl md:rounded-2xl primary-gradient flex items-center justify-center text-white shrink-0">
                            <i class="fa-solid fa-database text-lg md:text-xl"></i>
                        </div>
                        <div>
                            <p class="text-slate-500 text-xs md:text-sm">Total Data</p>
                            <h2 class="text-2xl md:text-3xl font-bold text-slate-800">
                                {{ \App\Models\ProductivityLog::count() }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="glass-card rounded-3xl p-4 sm:p-6 xl:p-8">
                    <div
                        class="w-12 h-12 sm:w-16 sm:h-16 lg:w-12 lg:h-12 xl:w-20 xl:h-20 rounded-2xl md:rounded-3xl primary-gradient flex items-center justify-center text-white shadow-lg mb-4 sm:mb-6">
                        <i class="fa-solid fa-chart-line text-lg sm:text-2xl xl:text-3xl"></i>
                    </div>
                    <h2 class="text-sm sm:text-lg lg:text-sm xl:text-2xl font-bold text-slate-800 mb-1 sm:mb-2 truncate break-words">Produktif Individu</h2>
                    <h1 class="text-2xl sm:text-4xl lg:text-2xl xl:text-5xl font-bold text-indigo-600 mb-1">
                        {{ \App\Models\ProductivityLog::where('label_hasil', 'Produktif Individu')->count() }}
                    </h1>
                </div>

                <div class="glass-card rounded-3xl p-4 sm:p-6 xl:p-8">
                    <div
                        class="w-12 h-12 sm:w-16 sm:h-16 lg:w-12 lg:h-12 xl:w-20 xl:h-20 rounded-2xl md:rounded-3xl green-gradient flex items-center justify-center text-white shadow-lg mb-4 sm:mb-6">
                        <i class="fa-solid fa-users text-lg sm:text-2xl xl:text-3xl"></i>
                    </div>
                    <h2 class="text-sm sm:text-lg lg:text-sm xl:text-2xl font-bold text-slate-800 mb-1 sm:mb-2 truncate break-words">Produktif Kolaboratif</h2>
                    <h1 class="text-2xl sm:text-4xl lg:text-2xl xl:text-5xl font-bold text-green-600 mb-1">
                        {{ \App\Models\ProductivityLog::where('label_hasil', 'Produktif Kolaboratif')->count() }}
                    </h1>
                </div>

                <div class="glass-card rounded-3xl p-4 sm:p-6 xl:p-8">
                    <div
                        class="w-12 h-12 sm:w-16 sm:h-16 lg:w-12 lg:h-12 xl:w-20 xl:h-20 rounded-2xl md:rounded-3xl orange-gradient flex items-center justify-center text-white shadow-lg mb-4 sm:mb-6">
                        <i class="fa-solid fa-triangle-exclamation text-lg sm:text-2xl xl:text-3xl"></i>
                    </div>
                    <h2 class="text-sm sm:text-lg lg:text-sm xl:text-2xl font-bold text-slate-800 mb-1 sm:mb-2 truncate break-words">Kurang Produktif</h2>
                    <h1 class="text-2xl sm:text-4xl lg:text-2xl xl:text-5xl font-bold text-orange-500 mb-1">
                        {{ \App\Models\ProductivityLog::where('label_hasil', 'Kurang Produktif')->count() }}
                    </h1>
                </div>
            </div>

            <div class="glass-card rounded-3xl p-4 sm:p-6 md:p-8 mb-8">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-8">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-indigo-600">Riwayat Prediksi</h2>
                        <p class="text-slate-500 mt-1 md:mt-2 text-sm md:text-base">Daftar lengkap seluruh data produktivitas pengguna.</p>
                    </div>

                    <div class="w-full md:w-[320px] relative">
                        <select id="filterCluster" class="custom-select pr-12 text-slate-700 font-medium">
                            <option value="">Tampilkan Semua Cluster</option>
                            <option value="Produktif Individu">Produktif Individu</option>
                            <option value="Produktif Kolaboratif">Produktif Kolaboratif</option>
                            <option value="Kurang Produktif">Kurang Produktif</option>
                        </select>
                        <div class="absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm md:text-base whitespace-nowrap">
                        <thead>
                            <tr class="table-head text-slate-700">
                                <th class="p-4 md:p-5 text-center rounded-l-2xl">No</th>
                                <th class="p-4 md:p-5 text-center">Lama Waktu</th>
                                <th class="p-4 md:p-5 text-center">Buku</th>
                                <th class="p-4 md:p-5 text-center">Device</th>
                                <th class="p-4 md:p-5 text-center">Interaksi</th>
                                <th class="p-4 md:p-5 text-center">Fokus</th>
                                <th class="p-4 md:p-5 text-center">Label</th>
                                <th class="p-4 md:p-5 text-center rounded-r-2xl">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody id="historyTable">
                            @forelse(\App\Models\ProductivityLog::latest()->get() as $index => $item)
                                <tr class="border-b border-slate-100 hover:bg-slate-50 transition text-center">
                                    <td class="p-4 md:p-5">{{ $index + 1 }}</td>
                                    <td class="p-4 md:p-5">
                                        @switch($item->lama_waktu)
                                            @case(1)
                                        &lt; 15 Menit @break @case(2) 15 - 30 Menit @break
                                            @case(3) 31 - 45 Menit @break
                                            @case(4) 46 - 60 Menit @break
                                                @case(5)&gt; 60 Menit
                                                @break
                                            @endswitch
                                    </td>
                                    <td class="p-4 md:p-5">{{ $item->penggunaan_buku }}/5</td>
                                    <td class="p-4 md:p-5">{{ $item->intensitas_device }}/5</td>
                                    <td class="p-4 md:p-5">{{ $item->tingkat_interaksi }}/5</td>
                                    <td class="p-4 md:p-5">{{ $item->tingkat_fokus }}/5</td>
                                    <td class="p-4 md:p-5">
                                        <span
                                            class="px-4 py-2 rounded-full text-xs md:text-sm font-semibold {{ str_contains($item->label_hasil, 'Produktif Individu') || str_contains($item->label_hasil, 'Produktif Kolaboratif') ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                            {{ $item->label_hasil }}
                                        </span>
                                    </td>
                                    <td class="p-4 md:p-5 text-slate-500 text-xs md:text-sm">
                                        {{ $item->created_at->format('d M Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center p-10 text-slate-400">Tidak ada data riwayat.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>

    <script>
        const filterSelect = document.getElementById('filterCluster');

        filterSelect.addEventListener('change', function() {
            let filterValue = this.value.toLowerCase();
            let rows = document.querySelectorAll('#historyTable tr');

            rows.forEach(row => {
                let labelCell = row.querySelector('td:nth-child(7)');
                if (labelCell) {
                    let text = labelCell.innerText.toLowerCase();

                    if (filterValue === "" || text.includes(filterValue)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            });
        });
    </script>

</body>

</html>