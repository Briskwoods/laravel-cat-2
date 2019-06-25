<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;
use DB;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $sum = DB::table('fees')->sum('amount_paid');
        return view('100192.fees')->with('sum', $sum);
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
        $this->validate($request,[
            'student_number' => 'required',
            'amount'=>'required'
        ]);

        $fee = new Fees;
        $fee->student_last_name = $request->input('student_last_name');
        $fee->name_of_payer = $request->input('name_of_payer');
        $fee->student_number = $request->input('student_number');
        $fee->amount_paid = $request->input('amount');
        try{
        $fee->save();
        }
        catch(QueryException $ex)
        {
            return redirect('/fees')->with('error','Registration Failed.');
        }
        finally{
            return redirect('/fees')->with('success','Student Fees Updated.');
        }
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
