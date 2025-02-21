<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>

    <form action="{{ route('bukus.store') }}" method="POST">
        @csrf

        <label for="judul">Judul:</label>
        <input type="text" name="judul" required>

        <br>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" required>

        <br>

        <label for="penulis">Penulis:</label>
        <input type="text" name="penulis" required>

        <br>

        <label for="tahun_terbit">tahun_terbit:</label>
        <input type="number" name="tahun_terbit" required>

        <br>

        <label for="jenis_buku">jenis_buku:</label>
        <input type="text" name="jenis_buku" required>

        <br>

        <button type="submit">Tambah Buku</button>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </form>

    <a href="{{ route('bukus.index') }}">Kembali ke Daftar Buku</a>
</body>
</html>