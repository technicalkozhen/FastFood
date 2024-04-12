<?php

namespace App\Http\Controllers;

use App\Models\food_invoice;
use App\Models\invoice;
use App\Models\product;
use App\Models\table_product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class publicController extends Controller
{
    public function index(){
        $product=product::all();
        $t_pro=table_product::all();
        $total_price=0;
        foreach($t_pro as $data){
            $total_price=$total_price+$data->totalprice;
        }
        return view('public.index',compact('product','t_pro','total_price'));
    }
    public function addProductToTable($id){
        $product=product::findorfail($id);

        table_product::create(['name'=>$product->name,
                                    'price'=>$product->price,
                                    'quantity'=>$product->quantity,
                                    'totalprice'=>($product->price)*($product->quantity),
                                    'product_id'=>$id,
                                        ]);
        return redirect()->back();
    }
    public function deleteProductToTable($id){
        table_product::findorfail($id)->delete();
        return redirect()->back();
    }
    public function increaceNumberQuantity($id){
        $t_pro=table_product::findorfail($id);
        $t_pro->update(['quantity'=>($t_pro->quantity+1)]);
        $t_pro->update(['totalprice'=>($t_pro->quantity * $t_pro->price)]);
        return redirect()->back();
    }
    public function decreaceNumberQuantity($id){
        $t_pro=table_product::findorfail($id);
        $t_pro->update(['quantity'=>($t_pro->quantity-1)]);
        $t_pro->update(['totalprice'=>($t_pro->quantity * $t_pro->price)]);
        return redirect()->back();
    }
    public function invoice(){
        $t_p=table_product::all();
        $total_price=0;
        foreach($t_p as $data){
            $total_price=$total_price+$data->totalprice;
        }

        $tt=invoice::create([ 'total_price'=>$total_price,
                            'user_id'=>Auth::id(),
        ]);

        
        foreach($t_p as $dd){
            food_invoice::create(['invoice_id'=>$tt->id,
                                    'product_id'=>$dd->product_id,
                                    'price'=>$dd->price,
                                    'quantity'=>$dd->quantity,
            ]);

        }



        
        table_product::query()->delete();
        return redirect()->back();
    }
    public function invoice_today(){
        $data=invoice::whereDay('created_at',today())->with('user')->latest()->get();
        $t_price=0;
        $n_invoice=0;
        foreach($data as $val){
            $t_price=$t_price+$val->total_price;
            $n_invoice=$n_invoice+1;
        }
        return view('public.invoice.invoice_today',compact('data','t_price','n_invoice'));
    }
    public function showProductInvoice($id){
        $product=food_invoice::where('invoice_id',$id)->with('products')->latest()->paginate(10);
        return view('public.invoice.showProductInvoice',compact('product'));
    }
    public function showInvoices(){
        $invoice=invoice::with('user')->with('food_invoice')->latest()->paginate(10);
        $t_price=0;
        $n_invoice=0;
        foreach($invoice as $val){
            $t_price=$t_price+$val->total_price;
            $n_invoice=$n_invoice+1;
        }
        return view('public.invoice.index',compact('invoice','t_price','n_invoice'));
    }
    public function deleteInvoice($id){
        invoice::findOrFail($id)->delete();
        return redirect()->back();
        
    }
}

