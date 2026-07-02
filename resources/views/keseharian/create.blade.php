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

    <form method="POST" action="{{ route('keseharian.store') }}">
        @csrf

        <label>Nama</label>
        <input type="text" name="nama" value="{{ old('nama') }}" required><br><br>

        <label>Tanggal</label>
        <input type="date" name="tanggal" value="{{ old('tanggal') }}" required><br><br>

        <label>Jam</label>
        <input type="time" name="jam" value="{{ old('jam') }}" required><br><br>

        <label>Kegiatan</label>
        <input type="text" name="kegiatan" value="{{ old('kegiatan') }}" required><br><br>

        <label>Tempat</label>
        <input type="text" name="tempat" value="{{ old('tempat') }}" required><br><br>

        <label>Status</label>
        <select name="status">
             <option value="1">Sudah</option>
             <option value="2">Nanti</option>
             <option value="3">Belum</option>
        </select>



        <button type="submit">Simpan</button>
</body>

</html>