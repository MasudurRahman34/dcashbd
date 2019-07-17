<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\currency;
use App\model\paymentmethod;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.admin.index');
    }
    public function currency()
    {
        $currencies=currency::orderBy('id', 'desc')->get();
        return view('backend.admin.currency')->with('currencies',$currencies);
    }
    
     public function paymentMethod()
    {
        $paymentmethods=paymentmethod::orderBy('id', 'desc')->get();
        return view('backend.admin.paymentMethod')->with('paymentmethods', $paymentmethods);
    }
    public function trnRequest()
    {
        return view('backend.admin.trnRequest');
    }
    public function userlist()
    {
        return view('backend.admin.userlist');
    }
    public function adminlist()
    {
        return view('backend.admin.adminlist');
    }
    public function adminProfile()
    {
        return view('backend.admin.adminProfile');
    }
    public function notice()
    {
        return view('backend.admin.notice');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
