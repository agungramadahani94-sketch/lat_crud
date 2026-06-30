<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Absensi</title>

    <!-- WAJIB: Bootstrap biar table-striped jalan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <h1 class="mb-3">Data Absensi</h1>

        <a href="{{ route('absensi.create') }}" class="btn btn-success mb-3">
            + Tambah
        </a>

        <div class="card shadow">
            <div class="card-body">

                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Kelas</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($absensi as $item)
                            <tr>
                                <td>{{ $no = $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->status }}</td>

                                <td>
                                    <a href="{{ route('absensi.edit', $item->id) }}" class="btn btn-warning btn-sm"></a>
                                        Edit
                                    </a>

                                    <form action="{{ route('absensi.destroy', $item->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin hapus data ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Data kosong</td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>

            </div>
        </div>
    </div>

</body>

</html>