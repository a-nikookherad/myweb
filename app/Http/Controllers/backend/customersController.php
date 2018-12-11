<?php

namespace App\Http\Controllers\backend;

use App\models\customers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class customersController extends Controller
{

    public function list()
    {
        $customers=User::where('role','customers')->get();
        return view('backend.items.customers.list',compact('customers'));
    }

    public function delete($id)
    {
        $customer=customers::find($id);
        if($customer instanceof customers){
            $customer->delete();
            return redirect()->route('back.customers.list')->with('msg','مشتری مورد نظر با موفقیت حذف شد');
        }

    }
}
