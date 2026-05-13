<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ReadSense AI Dashboard</title>

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
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.04);
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

        .soft-purple {
            background: #faf5ff;
        }

        .custom-input {
            width: 100%;
            height: 52px;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 0 16px;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
            background: white;
        }

        .custom-input:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
        }

        .menu-active {
            background: linear-gradient(135deg, #3b82f6, #4f46e5);
            color: white;
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.25);
        }

        .menu-item {
            transition: 0.2s;
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

                <div class="px-8 pt-10 pb-8 a">
                    <div class="items-center gap-3">
                        <div class="wrapper-customs">
                            <div
                                class="w-14 h-14 rounded-2xl primary-gradient flex items-center justify-center shadow-lg">
                                <i class="fa-solid fa-book-open text-white text-xl"></i>
                            </div>
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
                        class="menu-active flex items-center gap-4 px-5 py-4 rounded-2xl font-semibold">
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

            <div class="flex items-center justify-between mb-8">

                <div>
                    <h1 class="text-5xl font-bold text-slate-800">
                        Dashboard
                    </h1>

                    <p class="text-slate-500 mt-2 text-lg">
                        Selamat datang! Gunakan form di bawah untuk melakukan prediksi clustering.
                    </p>
                </div>

                <div class="flex items-center gap-8">

                    <div class="flex items-center gap-3 text-slate-600">
                        <i class="fa-regular fa-calendar text-lg"></i>
                        <span class="font-medium">
                            {{ now()->translatedFormat('d F Y') }}
                        </span>
                    </div>


                </div>

            </div>

            <div class="grid grid-cols-3 gap-6 mb-8">

                <div class="glass-card rounded-3xl p-6">

                    <div class="flex items-center gap-5 h-full">

                        <div
                            class="w-20 h-20 rounded-3xl primary-gradient flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-chart-simple text-3xl"></i>
                        </div>

                        <div>
                            <p class="text-slate-500 font-medium">
                                Total Prediksi
                            </p>

                            <h2 class="text-5xl font-bold text-slate-800 mt-1">
                                {{ $totalPredictions }}
                            </h2>

                            <p class="text-slate-400 mt-2">
                                Data keseluruhan
                            </p>
                        </div>

                    </div>

                </div>

                <div class="glass-card rounded-3xl p-6">

                    <div class="flex items-center gap-5 h-full">

                        <div
                            class="w-20 h-20 rounded-3xl green-gradient flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-chart-pie text-3xl"></i>
                        </div>

                        <div>
                            <p class="text-slate-500 font-medium">
                                Cluster Dominan
                            </p>

                            <h2 class="text-3xl font-bold text-slate-800 mt-1 leading-tight">
                                {{ $dominantCluster ?? 'Belum Ada Data' }}
                            </h2>

                            <p class="text-green-600 mt-2 font-medium">
                                Hasil paling sering muncul
                            </p>
                        </div>

                    </div>

                </div>

                <div class="glass-card rounded-3xl p-6">

                    <div class="flex items-center gap-5 h-full">

                        <div
                            class="w-20 h-20 rounded-3xl orange-gradient flex items-center justify-center text-white shadow-lg">
                            <i class="fa-solid fa-brain text-3xl"></i>
                        </div>

                        <div>
                            <p class="text-slate-500 font-medium">
                                Rata-rata Fokus
                            </p>

                            <h2 class="text-5xl font-bold text-slate-800 mt-1">
                                {{ $avgFocus }}/5
                            </h2>

                            <p class="text-orange-500 mt-2 font-medium">
                                Tingkat fokus pengguna
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <div class="grid grid-cols-2 gap-6 mb-8">

                <div class="glass-card rounded-3xl p-7">

                    <div class="flex items-center justify-between mb-8">

                        <div>
                            <h2 class="text-3xl font-bold text-indigo-600">
                                Form Input
                            </h2>

                            <p class="text-slate-500 mt-2">
                                Masukkan data berikut untuk mendapatkan hasil clustering.
                            </p>
                        </div>

                        <div
                            class="w-14 h-14 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-600">
                            <i class="fa-regular fa-pen-to-square text-xl"></i>
                        </div>

                    </div>

                    @if (session('success'))
                        <div class="mb-6 bg-green-50 border border-green-200 rounded-2xl p-5">
                            <h4 class="font-bold text-green-700">
                                Kalkulasi Berhasil!
                            </h4>

                            <p class="text-green-600 mt-1">
                                {{ session('success') }}
                            </p>
                        </div>
                    @endif

                    <form action="{{ route('productivity.calculate') }}" method="POST" class="space-y-5">
                        @csrf

                        <div class="grid grid-cols-[220px_1fr_100px] gap-4 items-center">

                            <div class="flex items-center gap-3 text-slate-700 font-medium">
                                <div
                                    class="w-11 h-11 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600">
                                    <i class="fa-regular fa-clock"></i>
                                </div>

                                Lama Waktu
                            </div>

                            <select name="lama_waktu" class="custom-input" required>
                                <option value="" disabled selected>Pilih lama waktu</option>
                                <option value="1">1 (< 15 menit)</option>
                                <option value="2">2 (15 - 30 menit)</option>
                                <option value="3">3 (31 - 45 menit)</option>
                                <option value="4">4 (46 - 60 menit)</option>
                                <option value="5">5 (> 60 menit)</option>
                            </select>

                            <div class="text-slate-500 text-sm">
                                jam/hari
                            </div>

                        </div>

                        <div class="grid grid-cols-[220px_1fr_100px] gap-4 items-center">

                            <div class="flex items-center gap-3 text-slate-700 font-medium">
                                <div
                                    class="w-11 h-11 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600">
                                    <i class="fa-solid fa-book-open"></i>
                                </div>

                                Penggunaan Buku
                            </div>

                            <select name="penggunaan_buku" class="custom-input" required>
                                <option value="" disabled selected>Pilih penggunaan buku</option>
                                <option value="1">Tidak menggunakan buku</option>
                                <option value="2">1 buku singkat</option>
                                <option value="3">1 buku fokus</option>
                                <option value="4">2 buku</option>
                                <option value="5">> 2 buku aktif</option>
                            </select>

                            <div class="text-slate-500 text-sm">
                                jam/hari
                            </div>

                        </div>

                        <div class="grid grid-cols-[220px_1fr_100px] gap-4 items-center">

                            <div class="flex items-center gap-3 text-slate-700 font-medium">
                                <div
                                    class="w-11 h-11 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600">
                                    <i class="fa-solid fa-mobile-screen"></i>
                                </div>

                                Intensitas Device
                            </div>

                            <select name="intensitas_device" class="custom-input" required>
                                <option value="" disabled selected>Pilih intensitas device</option>
                                <option value="1">Tidak menggunakan device</option>
                                <option value="2">Jarang menggunakan</option>
                                <option value="3">Cukup sering</option>
                                <option value="4">Sering</option>
                                <option value="5">Sangat sering</option>
                            </select>

                            <div class="text-slate-500 text-sm">
                                jam/hari
                            </div>

                        </div>

                        <div class="grid grid-cols-[220px_1fr] gap-4 items-center">

                            <div class="flex items-center gap-3 text-slate-700 font-medium">
                                <div
                                    class="w-11 h-11 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600">
                                    <i class="fa-solid fa-users"></i>
                                </div>

                                Tingkat Interaksi
                            </div>

                            <select name="tingkat_interaksi" class="custom-input" required>
                                <option value="" disabled selected>Pilih tingkat interaksi</option>
                                <option value="1">1 - Sepenuhnya sendiri</option>
                                <option value="2">2 - Kadang interaksi</option>
                                <option value="3">3 - Diskusi ringan</option>
                                <option value="4">4 - Diskusi aktif</option>
                                <option value="5">5 - Sangat aktif</option>
                            </select>

                        </div>

                        <div class="grid grid-cols-[220px_1fr] gap-4 items-center">

                            <div class="flex items-center gap-3 text-slate-700 font-medium">
                                <div
                                    class="w-11 h-11 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600">
                                    <i class="fa-solid fa-eye"></i>
                                </div>

                                Tingkat Fokus
                            </div>

                            <select name="tingkat_fokus" class="custom-input" required>
                                <option value="" disabled selected>Pilih tingkat fokus</option>
                                <option value="1">1 - Sangat tidak fokus</option>
                                <option value="2">2 - Kurang fokus</option>
                                <option value="3">3 - Cukup fokus</option>
                                <option value="4">4 - Fokus</option>
                                <option value="5">5 - Sangat fokus</option>
                            </select>

                        </div>

                        <div class="pt-3">

                            <button type="submit"
                                class="w-full h-16 rounded-2xl primary-gradient text-white text-lg font-semibold shadow-lg hover:scale-[1.01] transition">
                                <i class="fa-solid fa-magnifying-glass mr-3"></i>
                                Analisis Sekarang
                            </button>

                        </div>

                    </form>

                </div>

                <div class="glass-card rounded-3xl p-7">

                    <div class="flex items-center justify-between mb-8">

                        <div>
                            <h2 class="text-3xl font-bold text-purple-600">
                                Hasil Prediksi
                            </h2>

                            <p class="text-slate-500 mt-2">
                                Hasil clustering berdasarkan data terbaru.
                            </p>
                        </div>

                        <div
                            class="w-14 h-14 rounded-2xl bg-purple-50 flex items-center justify-center text-purple-600">
                            <i class="fa-solid fa-chart-column"></i>
                        </div>

                    </div>

                    <div class="soft-purple rounded-3xl border border-purple-100 p-8 mb-8">

                        <div class="flex items-center gap-8">

                            <div
                                class="w-36 h-36 rounded-full border-4 border-purple-500 flex items-center justify-center text-purple-600">
                                <i class="fa-solid fa-star text-5xl"></i>
                            </div>

                            <div>

                                <p class="text-slate-500 font-medium">
                                    Label Clustering
                                </p>

                                <h1 class="text-5xl font-bold text-purple-600 mt-2">
                                    {{ $latestResult->label_hasil ?? 'Belum Ada Data' }}
                                </h1>

                                <div
                                    class="inline-flex mt-5 px-5 py-2 rounded-full bg-purple-200 text-purple-700 text-sm font-semibold">
                                    Decision Tree
                                </div>

                            </div>

                        </div>

                    </div>

                    <div>

                        <h3 class="text-2xl font-bold text-slate-800 mb-3">
                            Insight
                        </h3>

                        <p class="text-slate-600 leading-8 text-lg">
                            {{ $insight }}
                        </p>

                    </div>

                    <div class="mt-8 soft-purple border border-purple-100 rounded-2xl p-5 flex items-start gap-5">

                        <div class="text-purple-600 text-3xl mt-1">
                            <i class="fa-regular fa-lightbulb"></i>
                        </div>

                        <div>
                            <h4 class="font-bold text-purple-700 text-xl">
                                Tips:
                            </h4>

                            <p class="text-slate-600 mt-2 leading-7">
                                {{ $tips }}
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <div class="glass-card rounded-3xl p-7">

                <div class="flex items-center justify-between mb-8">

                    <div>
                        <h2 class="text-3xl font-bold text-indigo-600">
                            Riwayat Prediksi
                        </h2>

                        <p class="text-slate-500 mt-2">
                            Daftar data yang pernah dianalisis.
                        </p>
                    </div>

                    <a href="/history"
                        class="px-6 h-14 rounded-2xl border border-slate-200 bg-white font-medium text-slate-700 hover:bg-slate-50 transition flex items-center">
                        <i class="fa-solid fa-list mr-2"></i>
                        Lihat Semua
                    </a>

                </div>

                <div class="overflow-x-auto">

                    <table class="w-full">

                        <thead>

                            <tr class="table-head text-slate-700">

                                <th class="p-5 text-left rounded-l-2xl">No</th>
                                <th class="p-5 text-left">Waktu</th>
                                <th class="p-5 text-left">Buku</th>
                                <th class="p-5 text-left">Device</th>
                                <th class="p-5 text-left">Interaksi</th>
                                <th class="p-5 text-left">Fokus</th>
                                <th class="p-5 text-left">Label</th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($history as $index => $item)
                                <tr class="border-b border-slate-100 hover:bg-slate-50 transition">

                                    <td class="p-5">
                                        {{ $index + 1 }}
                                    </td>

                                    <td class="p-5">
                                        {{ $item->lama_waktu }}
                                    </td>

                                    <td class="p-5">
                                        {{ $item->penggunaan_buku }}
                                    </td>

                                    <td class="p-5">
                                        {{ $item->intensitas_device }}
                                    </td>

                                    <td class="p-5">
                                        {{ $item->tingkat_interaksi }}
                                    </td>

                                    <td class="p-5">
                                        {{ $item->tingkat_fokus }}
                                    </td>

                                    <td class="p-5">

                                        <span
                                            class="px-4 py-2 rounded-full text-sm font-semibold bg-green-100 text-green-700">
                                            {{ $item->label_hasil }}
                                        </span>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="7" class="text-center p-10 text-slate-400">
                                        Tidak ada data riwayat.
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

    </div>

</body>

</html>
