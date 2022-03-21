<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $return = DB::table('returns')->get();
        return view('returns.index', ['data' => $return]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('returns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'stu_id' => 'required',
            'librarian_id' => 'required',
            'book_id' => 'required',
            'return_date' => 'required',
            'remark' => 'required',
        ]);

        $data = $request->except(['_token']);
        if (DB::table('returns')->insert($data,)) {
            return redirect('/returns')->with('message', 'created');
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
        $return = DB::table('returns')->find($id);
        return view('returns.show', compact('return'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $return = DB::table('returns')->find($id);
        return view('returns.edit', compact('return'));
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
        if (DB::table('returns')->where('id', $id)->update($data)) {
            return redirect('library_return');
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
        if (DB::table('returns')->where('id', $id)->delete()) {
            return redirect('/returns');
        }
    }
    public function delete()
    {

        $return = DB::table('returns')->find($id);
        return view('returns.delete', compact('return'));
    }
}
