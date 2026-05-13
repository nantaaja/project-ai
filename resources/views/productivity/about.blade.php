<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>About - ReadSense AI</title>

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

        .purple-gradient {
            background: linear-gradient(135deg, #a855f7, #7c3aed);
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
                        class="menu-item flex items-center gap-4 px-5 py-4 rounded-2xl text-slate-600 font-medium">
                        <i class="fa-solid fa-chart-pie"></i>
                        History
                    </a>

                    <a href="/about"
                        class="menu-active flex items-center gap-4 px-5 py-4 rounded-2xl text-slate-600 font-medium">
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

            <div class="mb-10">

                <h1 class="text-6xl font-bold text-slate-800">
                    Tentang Project
                </h1>

                <p class="text-slate-500 mt-3 text-xl">
                    Informasi mengenai sistem analisis produktivitas ReadSense AI.
                </p>

            </div>

            <div class="grid grid-cols-2 gap-6 mb-8">

                <div class="glass-card rounded-3xl p-8">

                    <div class="flex items-center gap-5 mb-6">

                        <div
                            class="w-20 h-20 rounded-3xl primary-gradient flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-brain text-3xl"></i>
                        </div>

                        <div>

                            <h2 class="text-3xl font-bold text-slate-800">
                                Tentang Sistem
                            </h2>

                            <p class="text-slate-500 mt-2">
                                Productivity Analytics Dashboard
                            </p>

                        </div>

                    </div>

                    <p class="text-slate-600 leading-9 text-lg">

                        ReadSense AI merupakan sistem analisis produktivitas mahasiswa
                        berbasis metode Decision Tree dan Clustering yang digunakan
                        untuk menganalisis pola pembelajaran pengguna berdasarkan
                        beberapa parameter seperti lama waktu belajar, penggunaan buku,
                        intensitas device, tingkat interaksi, dan tingkat fokus.

                        <br><br>

                        Sistem ini dirancang untuk membantu pengguna memahami pola
                        produktivitas belajar melalui visualisasi data, insight,
                        statistik, dan hasil klasifikasi secara otomatis.

                    </p>

                </div>

                <div class="glass-card rounded-3xl p-8">

                    <div class="flex items-center gap-5 mb-6">

                        <div
                            class="w-20 h-20 rounded-3xl purple-gradient flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-diagram-project text-3xl"></i>
                        </div>

                        <div>

                            <h2 class="text-3xl font-bold text-slate-800">
                                Metode Yang Digunakan
                            </h2>

                            <p class="text-slate-500 mt-2">
                                Decision Tree & Clustering
                            </p>

                        </div>

                    </div>

                    <div class="space-y-5">

                        <div class="bg-indigo-50 border border-indigo-100 rounded-2xl p-5">

                            <h3 class="font-bold text-indigo-700 text-xl mb-2">
                                Decision Tree
                            </h3>

                            <p class="text-slate-600 leading-8">
                                Digunakan untuk menentukan label produktivitas
                                berdasarkan aturan klasifikasi dari parameter input pengguna.
                            </p>

                        </div>

                        <div class="bg-purple-50 border border-purple-100 rounded-2xl p-5">

                            <h3 class="font-bold text-purple-700 text-xl mb-2">
                                Clustering
                            </h3>

                            <p class="text-slate-600 leading-8">
                                Digunakan untuk mengelompokkan pola perilaku belajar
                                berdasarkan tingkat produktivitas pengguna.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <div class="grid grid-cols-3 gap-6 mb-8">

                <div class="glass-card rounded-3xl p-8">

                    <div
                        class="w-20 h-20 rounded-3xl green-gradient flex items-center justify-center text-white shadow-lg mb-6">
                        <i class="fa-solid fa-code text-3xl"></i>
                    </div>

                    <h2 class="text-2xl font-bold text-slate-800 mb-4">
                        Teknologi
                    </h2>

                    <ul class="space-y-3 text-slate-600 text-lg">

                        <li>• Laravel</li>
                        <li>• Tailwind CSS</li>
                        <li>• Chart.js</li>
                        <li>• MySQL</li>
                        <li>• Decision Tree</li>

                    </ul>

                </div>

                <div class="glass-card rounded-3xl p-8">

                    <div
                        class="w-20 h-20 rounded-3xl orange-gradient flex items-center justify-center text-white shadow-lg mb-6">
                        <i class="fa-solid fa-bullseye text-3xl"></i>
                    </div>

                    <h2 class="text-2xl font-bold text-slate-800 mb-4">
                        Tujuan Sistem
                    </h2>

                    <p class="text-slate-600 leading-8 text-lg">

                        Membantu pengguna memahami pola belajar dan produktivitas
                        melalui sistem analisis otomatis berbasis data dan visualisasi statistik.

                    </p>

                </div>

                <div class="glass-card rounded-3xl p-8">

                    <div
                        class="w-20 h-20 rounded-3xl primary-gradient flex items-center justify-center text-white shadow-lg mb-6">
                        <i class="fa-solid fa-users text-3xl"></i>
                    </div>

                    <h2 class="text-2xl font-bold text-slate-800 mb-4">
                        Pengembang
                    </h2>

                    <p class="text-slate-600 leading-8 text-lg">

                        Project ini dikembangkan sebagai bagian dari tugas
                        pembelajaran Data Mining dan Sistem Pendukung Keputusan.

                    </p>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-8">

                <div class="flex items-start gap-6">

                    <div
                        class="w-24 h-24 rounded-3xl primary-gradient flex items-center justify-center text-white shadow-lg">
                        <i class="fa-solid fa-lightbulb text-4xl"></i>
                    </div>

                    <div>

                        <h2 class="text-4xl font-bold text-slate-800 mb-4">
                            Insight Project
                        </h2>

                        <p class="text-slate-600 text-lg leading-9">

                            ReadSense AI tidak hanya berfungsi sebagai sistem klasifikasi,
                            tetapi juga sebagai media visualisasi produktivitas pengguna.
                            Dengan kombinasi Decision Tree, analytics dashboard,
                            dan visualisasi statistik, sistem ini mampu memberikan
                            gambaran pola pembelajaran pengguna secara lebih interaktif
                            dan mudah dipahami.

                        </p>

                    </div>

                </div>

            </div>

        </main>

    </div>

</body>

</html>
