<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
    public function saleHistory(){
        //return redirect('/')->alert('Title','Lorem Lorem Lorem', 'success');
        //Alert::alert('Title', 'Message', 'Type');
        return view('/sales/history');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
