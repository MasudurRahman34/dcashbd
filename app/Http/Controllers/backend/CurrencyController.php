<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\model\currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
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
                $cur=new currency;
                $cur->name= $request->name;
                $cur->type= $request->type;
                $cur->rate= $request->rate;
                $cur->minValue= $request->minValue;
                $cur->address= $request->address;
                $cur->slug= str_slug($cur->name.$cur->type);
                $cur->Save();
                return redirect()->route('currency');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(currency $currency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(currency $currency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, currency $currency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(currency $currency)
    {
        //
    }
}
