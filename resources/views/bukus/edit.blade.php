<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>

    <form action="{{ route('bukus.update', $buku) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="judul">Judul:</label>
        <input type="text" name="judul" value="{{ $buku->judul }}" required>

        <br>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" value="{{ $buku->stok }}" required>

        <br>

        <label for="penulis">Penulis:</label>
        <input type="text" name="penulis" value="{{ $buku->penulis }}" required>

        <br>

        <label for="tahun_terbit">tahun_terbit:</label>
        <input type="number" name="tahun_terbit" value="{{ $buku->{'tahun_terbit'}  }}" required>

        <br>

        <label for="jenis_buku">jenis_buku:</label>
        <input type="text" name="jenis_buku" value="{{ $buku->{'jenis_buku'}  }}" required>

        <br>

        <button type="submit">Update Buku</button>
    </form>

    <a href="{{ route('bukus.index') }}">Kembali ke Daftar Buku</a>
</body>
</html>