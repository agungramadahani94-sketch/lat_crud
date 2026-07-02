<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Halaman Edit</h1>

    <form method="POST" action="{{ route('keseharian.update', $keseharian->id) }}">
        @csrf
        @method('PUT')

        <label>Nama</label>
        <input type="text" name="nama" value="{{ old('nama', $keseharian->nama) }}" required><br><br>

        <label>Tanggal</label>
        <input type="date" name="tanggal" value="{{ old('tanggal', $keseharian->tanggal) }}" required><br><br>

        <label>Jam</label>
        <input type="time" name="jam" value="{{ old('jam', $keseharian->jam) }}" required><br><br>

        <label>Kegiatan</label>
        <input type="text" name="kegiatan" value="{{ old('kegiatan', $keseharian->kegiatan) }}" required><br><br>

        <label>Tempat</label>
        <input type="text" name="tempat" value="{{ old('tempat', $keseharian->tempat) }}" required><br><br>

        <label>Status</label>
        <select name="status">
            <option value="1" {{ old('status', $keseharian->status) == 1 ? 'selected' : '' }}>Sudah</option>
            <option value="2" {{ old('status', $keseharian->status) == 2 ? 'selected' : '' }}>Nanti</option>
            <option value="3" {{ old('status', $keseharian->status) == 3 ? 'selected' : '' }}>Belum</option>
        </select>

        <br><br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>