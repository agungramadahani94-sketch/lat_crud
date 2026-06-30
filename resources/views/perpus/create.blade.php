<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Halaman Create</h1>

    <form method="POST" action="{{ route('perpus.store') }}">
        @csrf

        <label>Nama</label>
        <input type="text" name="nama" required value="{{ old('nama') }}"><br><br>

        <label>Jurusan</label>
        <input type="text" name="jurusan" required value="{{ old('jurusan') }}"><br><br>

        <label>Judul Buku</label>
        <input type="text" name="judul_buku" required value="{{ old('judul_buku') }}"><br><br>

        <label>QTY</label>
        <input type="number" name="qty" required value="{{ old('qty') }}"><br><br>

        <button type="submit">Simpan</button>
    </form>


</body>
</html>