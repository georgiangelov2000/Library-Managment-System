<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use App\Models\Gender;
use App\Models\GendreAuthor;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = Author::all();
        return view('admin.crud.authors.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['genders'] = Gender::all();
        $data['genres'] = GendreAuthor::all();
        return view('admin.crud.authors.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $request)
    {
        $author = new Author();
        $author->name = $request->name;
        $author->gender_id = $request->gender_id;
        $author->genre_id = $request->genre_id;
        $author->save();
        return redirect()->route('author.index')->with('message', 'Successfully created data!');
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
        $data['editData'] = Author::where('id', $id)->orderBy('id', 'asc')->get();
        $data['genres'] = GendreAuthor::all();
        $data['genders'] = Gender::all();
        return view('admin.crud.authors.edit', $data);
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
        $data = Author::where('id', $id)->first();
        $data->name = $request->name;
        $data->gender_id = $request->gender_id;
        $data->genre_id = $request->genre_id;
        $data->save();
        return redirect()->route('author.index')->with('message', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Author::find($id);
        $data->delete();
        return redirect()->route('author.index');
    }
}
