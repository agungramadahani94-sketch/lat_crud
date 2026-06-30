<h2>Edit Produk</h2>

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}"><br><br>
    <input type="number" name="qty" value="{{ $product->qty }}"><br><br>
    <input type="number" step="0.01" name="price" value="{{ $product->price }}"><br><br>
    <textarea name="description">{{ $product->description }}</textarea><br><br>

    <button type="submit">Update</button>
</form>