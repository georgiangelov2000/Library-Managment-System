<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\GendreBook;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class GendreBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = GendreBook::all();
        return view('admin.crud.gendre-books.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.gendre-books.create');
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
        $data = new GendreBook();
        $data->name=$request->name;
        $data->save();

        return redirect()->route('gendre.book.index')->with('message', 'Successfully created data!');
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
        $gendre=GendreBook::find($id);
        return view('admin.crud.gendre-books.edit', compact('gendre'));
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
        $data=GendreBook::find($id);
        $data->name=$request->name;
        $data->save();
        return redirect()->route('gendre.book.index')->with('message', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data=GendreBook::find($id);
        $data->delete();
        return redirect()->route('gendre.book.index');
    }

    public function genreBooks ($id){
        $data['allData'] = Book::select('name', 'image','book_no','year')->where('genre_id', $id)->get();
        return view('admin.crud.gendre-books.assigned-books', $data);
    }
}
