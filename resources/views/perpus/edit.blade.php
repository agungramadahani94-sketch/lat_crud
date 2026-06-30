<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Halaman Edit</h1>

    <form method="POST" action="{{ route('perpus.update', ['perpu' => $perpu->id]) }}">
        @csrf
        @method('PUT')

        <label>Nama</label>
        <input type="text" name="nama" required value="{{ old('nama', $perpu->nama) }}"><br><br>

        <label>Jurusan</label>
        <input type="text" name="jurusan" required value="{{ old('jurusan', $perpu->jurusan) }}"><br><br>

        <label>Judul Buku</label>
        <input type="text" name="judul_buku" required value="{{ old('judul_buku', $perpu->judul_buku) }}"><br><br>

        <label>QTY</label>
        <input type="text" name="qty" required value="{{ old('qty', $perpu->qty) }}"><br><br>

        <button type="submit">Update</button>
    </form>


</body>
</html>