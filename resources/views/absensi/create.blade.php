<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Create</title>
</head>

<body>

    <h1>Halaman Create</h1>


    <form method="POST" action="{{ route('absensi.store') }}">
        @csrf

        <label>Nama</label>
        <input type="text" name="nama" value="{{ old('nama') }}" required><br><br>

        <label>Gender</label><br>
        <input type="radio" name="gender" value="laki-laki" {{ old('gender') == 'laki-laki' ? 'checked' : '' }}> Laki-laki
        <input type="radio" name="gender" value="perempuan" {{ old('gender') == 'perempuan' ? 'checked' : '' }}> Perempuan
        <br><br>

        <label>Kelas</label>
        <input type="text" name="kelas" value="{{ old('kelas') }}" required><br><br>

        <label>Status</label><br>
        <input type="radio" name="status" value="absen" {{ old('status') == 'absen' ? 'checked' : '' }}> Absen
        <input type="radio" name="status" value="alpa" {{ old('status') == 'alpa' ? 'checked' : '' }}> Alpa
        <input type="radio" name="status" value="sakit" {{ old('status') == 'sakit' ? 'checked' : '' }}> Sakit
        <br><br>

        <button type="submit">Simpan</button>
    
    </form>

</body>

</html>