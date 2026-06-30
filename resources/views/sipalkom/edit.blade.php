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

    <form method="POST" action="{{ route('sipalkom.update', ['sipalkom' => $sipalkom->id]) }}">
        @csrf
        @method('PUT')

        <label>Nama</label>
        <input type="text" name="nama" required><br><br>

        <label>Jurusan</label>
        <input type="text" name="jurusan" required value="{{ old('jurusan', $sipalkom->jurusan) }}"><br><br>

        <label>Alat</label>
        <input type="text" name="nama_barang" required value="{{ old('nama_barang',$sipalkom->nama_barang) }}"><br><br>

        <label>Kondisi</label>
        <input type="text" name="kondisi" required value="{{ old('kondisi', $sipalkom->kondisi) }}"><br><br>

        <label>QTY</label>
        <input type="number" name="qty" required value="{{ old('qty',$sipalkom->qty) }}"><br><br>


        <label>Tgl_peminjaman</label>
        <input type="date" name="tgl_peminjaman" required value="{{ old('tgl_peminjaman',$sipalkom->tgl_peminjaman) }}"><br><br>

        <label>Tgl_kembali</label>
        <input type="date" name="tgl_kembali" required value="{{ old('tgl_kembali',$sipalkom->tgl_kembali) }}"><br><br>

        <button type="submit">Simpan</button>
    </form>


</body>

</html>