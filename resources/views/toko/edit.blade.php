<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <h1>Halaman Edit</h1>


    <form method="POST" action="{{ route('toko.update', $toko->id) }}">
        @csrf
        @method('PUT')

        <label>Nama Barang</label>
        <input type="text" name="nama_barang" required value="{{ old('nama_barang', $toko->nama_barang) }}">
        <br><br>

        <label>Qty</label>
        <input type="number" name="qty" required value="{{ old('qty', $toko->qty) }}">
        <br><br>

        <label>Kategori</label>
        <input type="text" name="kategori" required value="{{ old('kategori', $toko->kategori) }}">
        <br><br>

        <label>Keterangan</label>
        <textarea name="keterangan" required>{{ old('keterangan', $toko->keterangan) }}</textarea>
        <br><br>

        <button type="submit">Update</button>
    </form>
   

</body>

</html>