<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\ProductInvoice;
use Illuminate\Http\Request;

class ProductInvoiceController extends Controller
{
    public function saleHistory(){
        $listInvoicesNameClient = DB::table('invoices')
            ->join('clients','clients.id','=','invoices.id_client')
            ->select('invoices.id','clients.name')
            ->get();
        for ($i=0; $i < count($listInvoicesNameClient); $i++) {
            $listDetailsInvoices = DB::table('product_invoices')
                ->join('products','products.id','=','product_invoices.id_product')
                ->select('products.name','product_invoices.stock')
                ->where('product_invoices.id_invoice','=',$listInvoicesNameClient[$i]->id)
                ->get();
                $listInvoicesNameClient[$i]->listDetailsInvoices = $listDetailsInvoices;
            }
        return view('/sales/history', compact('listInvoicesNameClient'));
    }
}
