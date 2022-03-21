<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooktypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booktype = DB::table('book_types')->get();
        return view('booktypes.index', ['data' => $booktype]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booktypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        if (DB::table('book_types')->insert($data,)) {
            return redirect('/booktypes')->with('message', 'created');
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
        $booktype = DB::table('book_types')->find($id);
        return view('booktypes.show', compact("booktype"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booktype = DB::table('book_types')->find($id);
        return view('booktypes.edit', compact('booktype'));
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
        $data = $request->except('_token', '_methor');
        if (DB::table('book_types')->where('id', $id)->update($data)) {
            return redirect('library_booktype');
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
        if (DB::table('book_types')->where('id', $id)->delete()) {
            return redirect('/booktypes');
        }
    }
    public function delete()
    {

        $booktype = DB::table('book_types')->find($id);
        return view('booktypes.delete', compact('booktype'));
    }
}
