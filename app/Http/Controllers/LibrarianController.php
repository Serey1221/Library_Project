<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibrarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $librarian = DB::table('librarians')->get();
        return view('librarians.index', ['data' => $librarian]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('librarians.create');
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

        if (DB::table('librarians')->insert([
            'name' => $request->input('name'),
            'gender' => $request->input('gender'),
            "dob" => $request->input('dob'),
            "pob" => $request->input('pob'),
            "address" => $request->input('address'),
            "phone" => $request->input('phone'),
            "email" => $request->input('email'),
            'user_name' => $request->input('user_name'),
            "user_password" => $request->input('user_password'),
            'photo' => $name
        ])) {
            return redirect('/librarians')->with('message', 'created');
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
        $librarian = DB::table('librarians')->find($id);
        return view('librarians.show', compact('librarian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $librarian = DB::table('librarians')->find($id);
        return view('librarians.edit', compact('librarian'));
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
        if (DB::table('librarians')->where('id', $id)->update($data)) {
            return redirect('library_librarian');
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
        if (DB::table('librarians')->where('id', $id)->delete()) {
            return redirect('/librarians');
        }
    }
    public function delete($id)
    {

        $librarian = DB::table('librarians')->find($id);
        return view('librarians.delete', compact('librarian'));
    }
}
