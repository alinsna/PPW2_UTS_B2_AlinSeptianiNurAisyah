<?php

namespace App\Http\Controllers;

use App\Models\Product; 
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil semua produk dari database
        $products = Product::all();

        // Mengirim data $products ke view
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        // Menampilkan form untuk membuat produk baru
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validasi dan simpan produk baru ke database
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
        ]);

        // Menyimpan produk
        Product::create($validated);

        return redirect()->route('products.index');
    }

    public function show($id)
    {
        // Menampilkan satu produk berdasarkan ID
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }
}
