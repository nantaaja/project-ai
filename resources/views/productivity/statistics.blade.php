<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Statistics Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

        .pink-gradient {
            background: linear-gradient(135deg, #ec4899, #d946ef);
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

        .progress-bar {
            height: 14px;
            border-radius: 999px;
            overflow: hidden;
            background: #edf2ff;
        }

        .progress-fill {
            height: 100%;
            border-radius: 999px;
        }
    </style>
</head>

<body>

    <div class="min-h-screen flex flex-col lg:flex-row">

        <aside
            class="w-full lg:w-[280px] lg:min-h-screen sidebar-gradient border-b lg:border-b-0 lg:border-r border-indigo-100 flex flex-col justify-between">

            <div>

                <div class="px-8 pt-10 pb-8">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-14 h-14 shrink-0 rounded-2xl primary-gradient flex items-center justify-center shadow-lg">
                            <i class="fa-solid fa-book-open text-white text-xl"></i>
                        </div>

                        <div>
                            <h1 class="text-2xl md:text-3xl font-bold text-slate-800">
                                ReadSense AI
                            </h1>

                            <p class="text-sm text-slate-500">
                                Sistem Clustering Pembelajaran
                            </p>
                        </div>
                    </div>
                </div>

                <nav class="px-5 space-y-3 lg:space-y-3 grid grid-cols-2 gap-2 lg:block mb-6 lg:mb-0">

                    <a href="/productivity"
                        class="menu-item flex items-center gap-2 md:gap-4 px-4 py-3 md:px-5 md:py-4 rounded-2xl font-semibold text-sm md:text-base">
                        <i class="fa-solid fa-house text-lg"></i>
                        Dashboard
                    </a>

                    <a href="/statistics"
                        class="menu-active flex items-center gap-2 md:gap-4 px-4 py-3 md:px-5 md:py-4 rounded-2xl text-white font-medium text-sm md:text-base">
                        <i class="fa-solid fa-chart-pie"></i>
                        Statistics
                    </a>

                    <a href="/history"
                        class="menu-item flex items-center gap-2 md:gap-4 px-4 py-3 md:px-5 md:py-4 rounded-2xl text-slate-600 font-medium text-sm md:text-base">
                        <i class="fa-solid fa-chart-pie"></i>
                        History
                    </a>

                    <a href="/about"
                        class="menu-item flex items-center gap-2 md:gap-4 px-4 py-3 md:px-5 md:py-4 rounded-2xl text-slate-600 font-medium text-sm md:text-base">
                        <i class="fa-solid fa-circle-info"></i>
                        About
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

        <main class="flex-1 p-5 md:p-8 w-full overflow-hidden">

            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8 md:mb-10">

                <div>

                    <h1 class="text-4xl md:text-6xl font-bold text-slate-800">
                        Statistics
                    </h1>

                    <p class="text-slate-500 mt-2 md:mt-3 text-base md:text-xl">
                        Visualisasi dan analisis produktivitas pengguna berdasarkan data clustering.
                    </p>

                </div>

                <div class="flex items-center gap-8 self-start md:self-auto">

                    <div
                        class="flex items-center gap-3 text-slate-600 bg-white md:bg-transparent px-4 py-2 md:p-0 rounded-xl border md:border-0 border-slate-200">
                        <i class="fa-regular fa-calendar text-lg"></i>

                        <span class="font-medium text-sm md:text-base">
                            {{ now()->translatedFormat('d F Y') }}
                        </span>
                    </div>

                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">

                <div class="glass-card rounded-3xl p-6">

                    <div class="flex gap-4 md:gap-5">

                        <div
                            class="w-16 h-16 md:w-20 md:h-20 shrink-0 rounded-2xl md:rounded-3xl primary-gradient flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-database text-2xl md:text-3xl"></i>
                        </div>

                        <div>
                            <p class="text-slate-500 text-sm md:text-base font-medium">
                                Total Data
                            </p>

                            <h2 class="text-3xl md:text-5xl font-bold text-slate-800 mt-1">
                                {{ $history->count() }}
                            </h2>

                            <p class="text-slate-400 mt-1 md:mt-2 text-xs md:text-sm">
                                Seluruh data tersimpan
                            </p>
                        </div>

                    </div>

                </div>

                <div class="glass-card rounded-3xl p-6">

                    <div class="flex gap-4 md:gap-5">

                        <div
                            class="w-16 h-16 md:w-20 md:h-20 shrink-0 rounded-2xl md:rounded-3xl green-gradient flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-star text-2xl md:text-3xl"></i>
                        </div>

                        <div>
                            <p class="text-slate-500 text-sm md:text-base font-medium">
                                Dominan Cluster
                            </p>

                            <h2 class="text-xl md:text-3xl font-bold text-slate-800 mt-2 leading-tight">
                                {{ $dominantCluster }}
                            </h2>

                            <p class="text-green-600 mt-1 md:mt-2 font-medium text-xs md:text-sm">
                                Cluster paling aktif
                            </p>
                        </div>

                    </div>

                </div>

                <div class="glass-card rounded-3xl p-6">

                    <div class="flex gap-4 md:gap-5">

                        <div
                            class="w-16 h-16 md:w-20 md:h-20 shrink-0 rounded-2xl md:rounded-3xl purple-gradient flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-brain text-2xl md:text-3xl"></i>
                        </div>

                        <div>
                            <p class="text-slate-500 text-sm md:text-base font-medium">
                                Rata-rata Fokus
                            </p>

                            <h2 class="text-3xl md:text-5xl font-bold text-slate-800 mt-1">
                                {{ $avgFocus }}/5
                            </h2>

                            <p class="text-purple-600 mt-1 md:mt-2 font-medium text-xs md:text-sm">
                                Dari skala 5
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">

                <div class="glass-card rounded-3xl p-5 md:p-7">

                    <div class="mb-4 md:mb-6">

                        <h2 class="text-2xl md:text-3xl font-bold text-slate-800">
                            Distribusi Produktivitas
                        </h2>

                        <p class="text-slate-500 mt-1 md:mt-2 text-sm md:text-base">
                            Persentase hasil clustering pengguna.
                        </p>

                    </div>

                    <div class="h-[250px] md:h-[350px] flex items-center justify-center relative w-full">
                        <canvas id="pieChart"></canvas>
                    </div>

                </div>

                <div class="glass-card rounded-3xl p-5 md:p-7">

                    <div class="mb-4 md:mb-6">

                        <h2 class="text-2xl md:text-3xl font-bold text-slate-800">
                            Trend Produktivitas
                        </h2>

                        <p class="text-slate-500 mt-1 md:mt-2 text-sm md:text-base">
                            Perubahan produktivitas pengguna.
                        </p>

                    </div>

                    <div class="h-[250px] md:h-[350px] relative w-full">
                        <canvas id="lineChart"></canvas>
                    </div>

                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">

                <div class="glass-card rounded-3xl p-5 md:p-7">

                    <div class="mb-4 md:mb-6">

                        <h2 class="text-2xl md:text-3xl font-bold text-slate-800">
                            Tingkat Fokus
                        </h2>

                        <p class="text-slate-500 mt-1 md:mt-2 text-sm md:text-base">
                            Distribusi tingkat fokus pengguna.
                        </p>

                    </div>

                    <div class="h-[250px] md:h-[350px] relative w-full">
                        <canvas id="barChart"></canvas>
                    </div>

                </div>

                <div class="glass-card rounded-3xl p-5 md:p-7">

                    <div class="mb-6 md:mb-8">

                        <h2 class="text-2xl md:text-3xl font-bold text-slate-800">
                            Device Analytics
                        </h2>

                        <p class="text-slate-500 mt-1 md:mt-2 text-sm md:text-base">
                            Analisis parameter produktivitas.
                        </p>

                    </div>

                    <div class="space-y-6 md:space-y-8">

                        <div>

                            <div class="flex justify-between mb-2 md:mb-3">

                                <span class="font-semibold text-slate-700 text-sm md:text-base">
                                    Fokus Belajar
                                </span>

                                <span class="font-bold text-indigo-600 text-sm md:text-base">
                                    {{ ($avgFocus / 5) * 100 }}%
                                </span>

                            </div>

                            <div class="progress-bar">
                                <div class="progress-fill primary-gradient" style="width: {{ ($avgFocus / 5) * 100 }}%">
                                </div>
                            </div>

                        </div>

                        <div>

                            <div class="flex justify-between mb-2 md:mb-3">

                                <span class="font-semibold text-slate-700 text-sm md:text-base">
                                    Penggunaan Buku
                                </span>

                                <span class="font-bold text-green-600 text-sm md:text-base">
                                    {{ ($avgBook / 5) * 100 }}%
                                </span>

                            </div>

                            <div class="progress-bar">
                                <div class="progress-fill green-gradient" style="width: {{ ($avgBook / 5) * 100 }}%">
                                </div>
                            </div>

                        </div>

                        <div>

                            <div class="flex justify-between mb-2 md:mb-3">

                                <span class="font-semibold text-slate-700 text-sm md:text-base">
                                    Intensitas Device
                                </span>

                                <span class="font-bold text-purple-600 text-sm md:text-base">
                                    {{ ($avgDevice / 5) * 100 }}%
                                </span>

                            </div>

                            <div class="progress-bar">
                                <div class="progress-fill purple-gradient"
                                    style="width: {{ ($avgDevice / 5) * 100 }}%">
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-5 md:p-8">

                <div class="flex flex-col md:flex-row items-start gap-4 md:gap-6">

                    <div
                        class="w-16 h-16 md:w-24 md:h-24 shrink-0 rounded-2xl md:rounded-3xl purple-gradient flex items-center justify-center text-white shadow-lg">
                        <i class="fa-solid fa-lightbulb text-2xl md:text-4xl"></i>
                    </div>

                    <div>

                        <h2 class="text-2xl md:text-4xl font-bold text-slate-800 mb-2 md:mb-4">
                            Insight & Recommendation
                        </h2>

                        <p class="text-slate-600 text-sm md:text-lg leading-relaxed md:leading-9">
                            {{ $insight }}
                        </p>

                        <div
                            class="mt-4 md:mt-6 bg-purple-50 border border-purple-100 rounded-xl md:rounded-2xl p-4 md:p-5">

                            <h4 class="font-bold text-purple-700 text-lg md:text-xl mb-1 md:mb-2">
                                Tips
                            </h4>

                            <p class="text-slate-600 text-sm md:text-base leading-relaxed md:leading-8">
                                {{ $tips }}
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </main>

    </div>

    <script>
        new Chart(document.getElementById('pieChart'), {

            type: 'doughnut',

            data: {

                labels: [
                    'Produktif Individu',
                    'Produktif Kolaboratif',
                    'Kurang Produktif'
                ],

                datasets: [{

                    data: [
                        {{ $produktifIndividu }},
                        {{ $produktifKolaboratif }},
                        {{ $kurangProduktif }}
                    ],

                    backgroundColor: [
                        '#4f46e5',
                        '#22c55e',
                        '#f59e0b'
                    ],

                    borderWidth: 0

                }]
            },

            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%'
            }

        });

        new Chart(document.getElementById('lineChart'), {

            type: 'line',

            data: {

                labels: {!! json_encode($trendLabels) !!},

                datasets: [{

                    label: 'Rata-rata Fokus',

                    data: {!! json_encode($trendValues) !!},

                    borderColor: '#4f46e5',

                    backgroundColor: 'rgba(79,70,229,0.1)',

                    tension: 0.4,

                    fill: true,

                    pointBackgroundColor: '#4f46e5',

                    pointRadius: 5

                }]
            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                scales: {

                    y: {

                        min: 0,

                        max: 5,

                        ticks: {
                            stepSize: 1
                        }

                    }

                }

            }

        });

        new Chart(document.getElementById('barChart'), {

            type: 'bar',

            data: {

                labels: [
                    'Fokus 1',
                    'Fokus 2',
                    'Fokus 3',
                    'Fokus 4',
                    'Fokus 5'
                ],

                datasets: [{

                    label: 'Jumlah User',

                    data: [
                        {{ $history->where('tingkat_fokus', 1)->count() }},
                        {{ $history->where('tingkat_fokus', 2)->count() }},
                        {{ $history->where('tingkat_fokus', 3)->count() }},
                        {{ $history->where('tingkat_fokus', 4)->count() }},
                        {{ $history->where('tingkat_fokus', 5)->count() }}
                    ],

                    backgroundColor: [
                        '#c7d2fe',
                        '#a5b4fc',
                        '#818cf8',
                        '#6366f1',
                        '#4f46e5'
                    ],

                    borderRadius: 12

                }]
            },

            options: {
                responsive: true,
                maintainAspectRatio: false
            }

        });
    </script>

</body>

</html>
