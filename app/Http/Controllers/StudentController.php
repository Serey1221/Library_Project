<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = DB::table('students')->get();
        return view('students.index', ['data' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->file('photo')->getClientOriginalName();

        $request->file('photo')->storeAs('public/images', $name);

        if (DB::table('students')->insert([
            'stu_name' => $request->input('stu_name'),
            'gender' => $request->input('gender'),
            "dob" => $request->input('dob'),
            "pob" => $request->input('pob'),
            "address" => $request->input('address'),
            "phone" => $request->input('phone'),
            "email" => $request->input('email'),
            'photo' => $name
        ])) {
            return redirect('/students')->with('message', 'created');
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

        $student = DB::table('students')->find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = DB::table('students')->find($id);
        return view('students.edit', compact('student'));
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
        $data = $request->except('_token', '_method');
        if (DB::table('students')->where('id', $id)->update($data)) {
            return redirect('library_student');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (DB::table('students')->where('id', $id)->delete()) {
            return redirect('/students');
        }
    }
    public function delete($id)
    {

        $student = DB::table('students')->find($id);
        return view('students.delete', compact('student'));
    }
}
