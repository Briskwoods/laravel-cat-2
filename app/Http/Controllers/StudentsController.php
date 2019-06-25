<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use App\Fees;
use App\Students;
use DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //function(){
            
        //}
       
        //$students = Fees::all()->with('students', $students);
        return view('100192.students');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('100192.create');
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
            'email' => 'required',
            'student_number'=>'required'
        ]);

        //Create Student
        $students = new Students;
        $students->first_name = $request->input('fname');
        $students->last_name = $request->input('lname');
        $students->email = $request->input('email');
        $students->student_number = $request->input('student_number');

        try{
            $students->save();
            }
            catch(QueryException $ex)
            {
                return redirect('/students/create')->with('error','Registration Failed.');
            }
            finally{
                return redirect('/students/create')->with('success','Student Successfully Registered.');
            } }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $stud = Fees::find($id);
        
        return view('100192.students')->with('students',$stud);
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

    public function search(){
        $search = Input::get( 'search' );
            $user = Fees::where('student_number','=',''.$search.'')->get();
            if(count($user) > 0)
                return view('100192.students')->withDetails($user)->withQuery ( $search );
            else return view ('100192.students')->withMessage('No Details found.');
    }
}
