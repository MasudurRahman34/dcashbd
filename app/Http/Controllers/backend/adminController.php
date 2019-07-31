<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\currency;
use App\model\paymentmethod;
use App\model\transaction;
use App\model\notice;
use App\User;
use App\Mail\statusNotification;
use Mail;

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

        $transactions=transaction::with('user')->get();

        return view('backend.admin.trnRequest')->with('transactions', $transactions);
    }
    public function trnsStatus( Request $request , $id)
    {
        $trns=transaction::find($id);
        $trns->status=$request->status;
        $userData=User::find($trns->userId);
        $userEmail=$userData->email;
        $trns->save();

        if($request->status==1){
            $status='Transaction Success';
            $trns->status='Transaction Success';
        }elseif($request->status==2) {
            $status='Transacion Refused';
            $trns->status='Transaction Refused';
        }
        Mail::to($userEmail)->send(new statusNotification($trns, $status));
        return redirect()->route('trnRequest');
    }
    public function userlist()
    {
        $users=User::orderBy('id', 'desc')->get();
        return view('backend.admin.userlist')->with('users', $users);
    }
    public function adminlist()
    {
        return view('backend.admin.adminlist');
    }
    public function adminProfile()
    {
        return view('backend.admin.adminProfile');
    }
    public function userProfile($id)
    {
       $user = User::where('id', $id)->first();
        return view('backend.admin.userProfile', compact('user'));
    }
    public function notice()
    {
        $notices=notice::orderBy('id', 'desc')->get();
        return view('backend.admin.notice')->with('notices', $notices);
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
