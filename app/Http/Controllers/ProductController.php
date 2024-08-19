<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products =  product::all();
        return view('product/index', ['products' => $products]);
    }


    public function create()
    {
        $categories =  category::all();

        return view('product/create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        //
        // dd(request()->all());
        product::create(
            [
                'name' => request()->name,
                'description' => request()->description,
                'price' => request()->price,
                'cat_id' => request()->cat_id,
            ]
        );
        return to_route('product.index');
    }


    public function show(product $product)
    {
        //
    }


    public function edit( $productId)
    {
        //
        $product = product::findOrFail($productId);
        return view('product/edit' , ['product'=>$product]);
    }


    public function update(Request $request, product $product)
    {
        //
    }


    public function destroy(product $product)
    {
        //
    }
}
