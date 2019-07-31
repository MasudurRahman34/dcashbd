<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\model\transaction;
use Illuminate\Http\Request;
use App\Mail\sendMail;
use Mail;
use Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $trns=new transaction;
                $trns->userId= Auth::user()->id;
                $trns->userName= Auth::user()->name;
                $trns->type= $request->type;
                $trns->sendMethod= $request->sendMethod;
                $trns->recieveMethod= $request->recieveMethod;
                $trns->sendAmount= $request->sendAmount;
                $trns->recieveAmount= $request->recieveAmount;
                $trns->trnasID= $request->trnasID;
                $trns->sendAccount= $request->sendAccount;
                $trns->recieveAccount= $request->recieveAccount;
                $trns->Save();
                $data=[
                    'name'=>Auth::user()->name,
                    'email'=>Auth::user()->email,
                    'type'=>$request->type,
                    'sendMethod'=>$request->sendMethod,
                    'recieveMethod'=>$request->recieveMethod,
                    'sendAmount'=>$request->sendAmount,
                    'recieveAmount'=>$request->recieveAmount,
                    'trnasID'=>$request->trnasID,
                    'sendAccount'=>$request->sendAccount,
                    'recieveAccount'=>$request->recieveAccount
                ];
                
                Mail::to(Auth::user()->email)->send(new sendMail($data, $request->type));
                return redirect()->route('transaction');
                /*return redirect()->route('currency');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaction $transaction)
    {
        //
    }
}
