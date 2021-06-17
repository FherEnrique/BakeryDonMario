<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use App\Models\ProductInvoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use App\Http\Requests\ProductRequest;

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
        $helperArray = array();
        $shoppingList = json_decode(session('shoppingList'));
        unset($shoppingList[$id]);
        foreach ($shoppingList as $item) {
            array_push($helperArray,$item);
        }
        Alert::success('Se elimino correctamente el registro');
        session(['shoppingList' => json_encode($helperArray)]);
        //dd(session('shoppingList'));
        return redirect()->to('/shoppingCart/');
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
        if (session('shoppingList') != "" and session('id_client') != "") {
            $objectInvoice = new Invoice();
            $objectInvoice->id_client = session('id_client');
            $objectInvoice->save();
            $shoppingList = json_decode(session('shoppingList'));
            foreach ($shoppingList as $item) {
                $objectProductInvoice = new ProductInvoice();
                $objectProductInvoice->id_invoice = $objectInvoice->id;
                $objectProductInvoice->id_product = $item->id_product;
                $objectProductInvoice->stock = $item->stock;
                $objectProductInvoice->save();
            }
            Session::flush();
            //dd($objectInvoice);
            //return session('id_client');
            Alert::success('La compra se realizo con exito');
            return redirect()->to('/selectClient/');
        } else {
            return redirect()->to('/viewProduct/');
        }
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
