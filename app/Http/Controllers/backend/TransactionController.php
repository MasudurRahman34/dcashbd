<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\model\transaction;
use Illuminate\Http\Request;
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
                $trns->type= $request->type;
                $trns->sendMethod= $request->sendMethod;
                $trns->recieveMethod= $request->recieveMethod;
                $trns->amount= $request->amount;
                $trns->givenAmount= $request->givenAmount;
                $trns->trnasID= $request->trnasID;
                $trns->email= $request->email;
                $trns->number= $request->number;
                $trns->Save();
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
