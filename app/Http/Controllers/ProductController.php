<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
        return view ('products.create');

    }

    public function create(){
        return view ('products.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'qty' => 'required|numeric',
            'price' => 'required|numeric|between:0,999999.99', // Adjust the range as needed
            'description' => 'nullable',
        ]);

        $newProduct = Product::create($data);

        // Update the redirect route to match your defined route name
        return redirect()->route('product.create');
    }
}
