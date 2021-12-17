<?php

namespace App\Http\Controllers;

use App\Models\GendreAuthor;
use Illuminate\Http\Request;

class GendreAuthorController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GendreAuthor::all();
        return view('admin.crud.gendre-authors.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.gendre-authors.create');
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
            'name' => 'required',
        ]);
        $data = new GendreAuthor();
        $data->name=$request->name;
        $data->save();

        return redirect()->route('gendre.author.index');
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
        $gendre=GendreAuthor::find($id);
        return view('admin.crud.gendre-authors.edit', compact('gendre'));
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
        $data=GendreAuthor::find($id);
        $data->name=$request->name;
        $data->save();
        return redirect()->route('gendre.author.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data=GendreAuthor::find($id);
        $data->delete();
        return redirect()->route('gendre.book.index');
    }
}
