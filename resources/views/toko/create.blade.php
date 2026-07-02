<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Halaman Create</h1>

    <form method="POST" action="{{ route('toko.store') }}">
        @csrf

        <label>Nama Barang</label>
        <input type="text" name="nama_barang" required value="{{ old('nama_barang') }}"><br><br>

        <label>Qty</label>
        <input type="number" name="qty" required value="{{ old('qty') }}"><br><br>

        <label>Kategori</label>
        <input type="text" name="kategori" required value="{{ old('kategori') }}"><br><br>

        <label>Keterangan</label>
        <textarea name="keterangan" required value="{{ old('kategori') }}"></textarea><br><br>


        <button type="submit">Simpan</button>

</body>

</html>