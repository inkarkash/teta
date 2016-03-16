<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PaymentController extends Controller
{
    //
    public function create(Request $request){
        Payments::create($request->all());
        //echo $request;
        return 'privet'; //redirect('/payments');
    }
}
