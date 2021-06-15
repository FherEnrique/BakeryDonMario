<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewProduct()
    {
        return "Tomar ID de la URL y tomar ID del producto del formulario UWU";
    }

    public function addShoppingCart($id)
    {
        return "POST";
    }

    public function shoopingCart()
    {
        return "Aqui modificamos el pedido";
    }

    public function finishSale()
    {
        return "Soy un metodo POST";
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
