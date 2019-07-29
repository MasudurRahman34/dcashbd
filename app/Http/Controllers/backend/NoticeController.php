<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\model\notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
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
        $ntc=new notice;
                $ntc->type= $request->type;
                $ntc->notice= $request->notice;
                $ntc->Save();
                return redirect()->route('notice');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notices=notice::find($id);
        return view('backend.admin.editNotice')->with('notices', $notices);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $ntc=notice::find($id);
        $ntc->type= $request->type;
                $ntc->notice= $request->notice;
                $ntc->Save();
                return redirect()->route('notice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ntc=notice::find($id);
        $ntc->delete();
        return redirect()->route('notice');
    }
}
