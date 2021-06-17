<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{


    public function viewProduct()
    {
        return view('/sales/viewProduct');
    }

    public function addShoppingCart($id)
    {
        return "POST";
    }

    public function shoppingCart()
    {
        return view('/sales/shoppingCart');
    }

    public function finishSale()
    {
        return "Soy un metodo POST";
    }




    public function create()
    {
        return view('/products/createProduct');
    }

    public function index()
    {
        $products = Product::latest()->get();

        return view('products.index', [
            'products' => $products
        ]);
    }


    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->amount = $request->amount;

        $product->save();

        return $this->index();
    }

    public function show($id)
    {
        return view('/products/show', ['product' => Product::findOrFail($id)]);
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(ProductRequest $request,Request $reques, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->amount = $request->amount;
        $product->save();

        return $this->index();
    }
}
