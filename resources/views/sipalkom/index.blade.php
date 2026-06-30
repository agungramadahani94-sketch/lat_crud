<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perpus</title>

    <!-- WAJIB: Bootstrap biar table-striped jalan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">
    <h1 class="mb-3">Data Peminjaman</h1>

    <a href="{{ route('sipalkom.create') }}" class="btn btn-success mb-3">
        + Tambah 
    </a>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Nama Barang</th>
                        <th>Kondisi</th>
                        <th>Qty</th>
                        <th>Tgl Peminjaman</th>
                        <th>Tgl Kembali</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($sipalkom as $item)
                        <tr>
                            <td>{{ $no = $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->kondisi }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ $item->tgl_peminjaman }}</td>
                            <td>{{ $item->tgl_kembali }}</td>
                           
                            <td>
                                <a href="{{ route('sipalkom.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('sipalkom.destroy', $item->id) }}" method="POST" class="d-inline">
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