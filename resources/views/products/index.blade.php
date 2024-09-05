<h1>Daftar Produk</h1>
@foreach ($products as $product)
    <div>
        <h2>{{ $product->name }}</h2>
        <p>Harga: {{ $product->price }}</p>
    </div>
@endforeach
