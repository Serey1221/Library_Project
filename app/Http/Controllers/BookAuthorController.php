<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookauthor = DB::table('book_authors')->get();
        return view('bookauthors.index', ['data' => $bookauthor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookauthors.create');
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
        if (DB::table('book_authors')->insert($data,)) {
            return redirect('/bookauthors')->with('message', 'created');
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
        $bookauthor = DB::table('book_authors')->find($id);
        return view('bookauthors.show', compact("bookauthor"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookauthor = DB::table('book_authors')->find($id);
        return view('bookauthors.edit', compact('bookauthor'));
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
        if (DB::table('book_authors')->where('id', $id)->update($data)) {
            return redirect('library_bookauthor');
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
        if (DB::table('book_authors')->where('id', $id)->delete()) {
            return redirect('/bookauthors');
        }
    }
    public function delete($id)
    {

        $bookauthor = DB::table('book_authors')->find($id);
        return view('bookauthors.delete', compact('bookauthor'));
    }
}
