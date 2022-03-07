<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author = DB::table('authors')->get();
        return view('authors.index',['data' => $author]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("authors.create");
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
        if (DB::table('authors')->insert($data,)){
            return redirect('/authors')->with('message','created');
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

        $author = DB::table('authors')->find($id);
        return view('authors.show',compact("author"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $author = DB::table('authors')->find($id);
        return view('authors.edit',compact('author'));
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

        $data = $request->except(['_token','_method']);
        if(DB::table('authors')->where('id',$id)->update($data)){
            return redirect('library');
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
        // if (DB::table("stock")->where("id",$id)->delete()){
        //     return redirect()->route("carstores.index");
        //     //return redirect("/authors");
        // }

        if (DB::table('authors')->where('id',$id)->delete()){
            return redirect('/authors');
        }
    }
    public function delete()
    {

        $author = DB::table('authors')->find($id);
        return view('authors.delete',compact('author'));
    }
}
