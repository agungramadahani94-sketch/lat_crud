<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Absensi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <h1 class="mb-3">Detail Absensi</h1>

        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td>{{ $absensi->nama }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{ $absensi->gender }}</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>{{ $absensi->kelas }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $absensi->status }}</td>
                    </tr>
                </table>

                <a href="{{ route('absensi.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>

</body>

</html>