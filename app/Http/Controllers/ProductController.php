<?php

namespace App\Http\Controllers;

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
        //
    }

    public function index()
    {
        return view('/products/createProduct');
    }


    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->amount = $request->amount;

        $product->save();

        return view('products.createProduct');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }
}
