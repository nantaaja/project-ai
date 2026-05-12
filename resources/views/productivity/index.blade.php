<!DOCTYPE html>
<html>
<head>
    <title>Test Backend Productivity</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding: 40px; background-color: #f4f7f6; color: #333; }
        .container { max-width: 600px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin: auto; }
        h2 { border-bottom: 2px solid #eee; padding-bottom: 10px; margin-top: 0; }
        .form-group { margin-bottom: 20px; }
        label { display: block; font-weight: bold; margin-bottom: 8px; }
        
        /* Style untuk input angka */
        .input-number { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; font-size: 16px; }
        
        /* Style untuk radio group */
        .radio-group { display: flex; gap: 15px; background: #f9f9f9; padding: 10px; border-radius: 5px; border: 1px solid #eee; }
        .radio-item { display: flex; align-items: center; gap: 5px; cursor: pointer; }
        
        button { background-color: #2ecc71; color: white; border: none; padding: 12px 20px; border-radius: 5px; cursor: pointer; width: 100%; font-size: 16px; font-weight: bold; margin-top: 10px; }
        button:hover { background-color: #27ae60; }
        .alert { padding: 15px; background-color: #d4edda; color: #155724; border-radius: 5px; margin-bottom: 20px; border: 1px solid #c3e6cb; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { text-align: left; padding: 12px; border-bottom: 1px solid #ddd; }
        th { background-color: #f2f2f2; }
        .badge { padding: 5px 10px; border-radius: 4px; font-size: 12px; font-weight: bold; background: #e8f4fd; color: #2980b9; }
    </style>
</head>
<body>

<div class="container">
    <h2>Input Data Produktivitas</h2>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('productivity.calculate') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="lama_waktu">Lama Waktu (Jam)</label>
            <input type="number" name="lama_waktu" id="lama_waktu" class="input-number" placeholder="Contoh: 4" required>
        </div>

        <div class="form-group">
            <label>Penggunaan Buku (1-5)</label>
            <div class="radio-group">
                @foreach(range(1, 5) as $i)
                    <label class="radio-item"><input type="radio" name="penggunaan_buku" value="{{ $i }}" required> {{ $i }}</label>
                @endforeach
            </div>
        </div>

        <div class="form-group">
            <label>Intensitas Device (1-5)</label>
            <div class="radio-group">
                @foreach(range(1, 5) as $i)
                    <label class="radio-item"><input type="radio" name="intensitas_device" value="{{ $i }}" required> {{ $i }}</label>
                @endforeach
            </div>
        </div>

        <div class="form-group">
            <label>Tingkat Interaksi (1-5)</label>
            <div class="radio-group">
                @foreach(range(1, 5) as $i)
                    <label class="radio-item"><input type="radio" name="tingkat_interaksi" value="{{ $i }}" required> {{ $i }}</label>
                @endforeach
            </div>
        </div>

        <div class="form-group">
            <label>Tingkat Fokus (1-5)</label>
            <div class="radio-group">
                @foreach(range(1, 5) as $i)
                    <label class="radio-item"><input type="radio" name="tingkat_fokus" value="{{ $i }}" required> {{ $i }}</label>
                @endforeach
            </div>
        </div>

        <button type="submit">Simpan & Hitung</button>
    </form>

    <div style="margin-top: 40px;">
        <h3>Histori Terbaru</h3>
        <table>
            <thead>
                <tr>
                    <th>Waktu (Jam)</th>
                    <th>Fokus</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>
                @forelse($history as $item)
                <tr>
                    <td>{{ $item->lama_waktu }} Jam</td>
                    <td>Skala {{ $item->tingkat_fokus }}</td>
                    <td><span class="badge">{{ $item->label_hasil }}</span></td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" style="text-align: center;">Belum ada data di database.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

</body>
</html>