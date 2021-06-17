<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductInvoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Session;

class ProductController extends Controller
{
    public function viewProduct()
    {
        if (session('id_client') != ""){
            $listAllProduct = Product::all();
            return view('/sales/viewProduct', compact('listAllProduct'));
        }else{
            return redirect()->to('/selectClient/')->send();
        }
    }
    public function editShoppingCart(Request $request,$id)
    {
        $shoppingList = json_decode(session('shoppingList'));
        $shoppingList[$id]->stock = $request->productValue;
        session(['shoppingList' => json_encode($shoppingList)]);
        Alert::success('Se actualizo correctamente el registro');
        return redirect()->to('/shoppingCart/');
    }

    public function deleteShoppingCart($id)
    {
        $shoppingList = json_decode(session('shoppingList'));
        unset($shoppingList[$id]);
        session(['shoppingList' => json_encode($shoppingList)]);
        dd(session('shoppingList'));
        //Alert::error('Se elimino correctamente el registro');
        //return redirect()->to('/shoppingCart/');
    }

    public function addShoppingCart(Request $request,$id)
    {
        $helperObject = new ProductInvoice();
        if (session('shoppingList') == ""){
            $shoppingList = array();
            $helperObject->stock = $request->countProduct;
        }else{
            $shoppingList = json_decode(session('shoppingList'));
            $position = 0;
            if ($this->comparationArray($shoppingList,$id,$position)) {
                $shoppingList[$position]->stock += $request->countProduct;
                session(['shoppingList' => json_encode($shoppingList)]);
                Alert::success('Se agrego mas cantidad a la lista');
                return redirect()->to('/viewProduct/');
            } else {
                $helperObject->stock = $request->countProduct;
            }
        }
        $helperObject->id_product = $id;
        array_push($shoppingList, $helperObject);
        session(['shoppingList' => json_encode($shoppingList)]);
        Alert::success('Se agrego el producto a la lista');
        return redirect()->to('/viewProduct/');
    }

    private function comparationArray($permanentArray, $id, &$posicion){
        $i = 0;
        foreach ($permanentArray as $item) {
            $i++;
            if ($item->id_product == $id) {
                return true;
            }
        }
        return false;
    }

    public function shoppingCart()
    {
        $totalSale = 0;
        if (session('shoppingList') != null) {
            $shoopingCart = json_decode(session('shoppingList'));
            for ($i=0;$i < count($shoopingCart);$i++) {
                $detailsProductId = Product::find($shoopingCart[$i]->id_product);
                $shoopingCart[$i]->price = $detailsProductId->amount * $shoopingCart[$i]->stock;
                $shoopingCart[$i]->name = $detailsProductId->name;
                $shoopingCart[$i]->index = $i;
                $totalSale += $shoopingCart[$i]->price;
            }
        } else {
            $shoopingCart = "";
        }
        return view('/sales/shoppingCart',compact('shoopingCart','totalSale'));
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
