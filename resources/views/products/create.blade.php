<h2>Tambah Produk</h2>

<form method="POST" action="{{ route('products.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Nama Produk"><br><br>
    <input type="number" name="qty" placeholder="Qty"><br><br>
    <input type="number" step="0.01" name="price" placeholder="Harga"><br><br>
    <textarea name="description" placeholder="Deskripsi"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>