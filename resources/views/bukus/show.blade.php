<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Buku</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('bukus.create') }}">Tambah Buku</a>

    <ul>
        @foreach ($bukus as $buku)
            <li>
                {{ $buku->judul }} - {{ $buku->penulis }} - {{ $buku->{'tahun_terbit'} }} - {{ $buku->{'jenis_buku'} }} - Stok: {{ $buku->stok }}
                <a href="{{ route('bukus.edit', $buku) }}">Edit</a>
                <form action="{{ route('bukus.destroy', $buku) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>