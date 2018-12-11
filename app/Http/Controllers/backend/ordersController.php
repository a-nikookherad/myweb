<?php

namespace App\Http\Controllers\backend;

use App\models\orders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ordersController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(['auth','usersMiddleware']);
//    }
    //

    public function list()
    {
        $orders=orders::all();
        return view('backend.items.orders.list',compact('orders'));
    }

    public function delete($id)
    {
        $order=orders::find($id);
        if($order instanceof  orders){
            $order->delete();
            return redirect()->route('back.orders.list')->with('msg','سفارش مورد نظر حذف شد');
        }
    }
}
