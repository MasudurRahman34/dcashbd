<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\model\paymentmethod;
use Illuminate\Http\Request;

class PaymentmethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $pm=new paymentmethod;
                $pm->name= $request->name;
                $pm->type= $request->type;
                $pm->address= $request->address;
                $pm->slug= str_slug($pm->name.$pm->type);
                $pm->Save();
        return redirect()->route('paymentMethod');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\paymentmethod  $paymentmethod
     * @return \Illuminate\Http\Response
     */
    public function show(paymentmethod $paymentmethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\paymentmethod  $paymentmethod
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)

    {
         $pm=paymentmethod::find($id);
                $pm->name= $request->name;
                $pm->type= $request->type;
                $pm->address= $request->address;
                $pm->slug= str_slug($pm->name.$pm->type);
                $pm->status= $request->status;
                $pm->Save();
        return redirect()->route('paymentMethod');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\paymentmethod  $paymentmethod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paymentmethod $paymentmethod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\paymentmethod  $paymentmethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(paymentmethod $paymentmethod)
    {
        //
    }
}
