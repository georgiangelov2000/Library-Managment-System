<?php

namespace App\Http\Controllers;

use App\Models\AssignBook;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class AssignBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = AssignBook::all();
        return view('admin.crud.assign_book.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['books'] = Book::all();
        $data['users'] = User::where('role_id', '=', '1')->get();
        return view('admin.crud.assign_book.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->user_id as $key => $value) {
            $saveRecord = [
                'user_id' => $request->user_id[$key],
                'book_id' => $request->book_id[$key],
                'date_of_receipt' => $request->date_of_receipt,
                'date_of_return' => $request->date_of_return,
            ];
            DB::table('assign_books')->insert($saveRecord);
        }
        return redirect()->route('assign.book.index')->with('message', 'Successfully created data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = AssignBook::find($id);
        $data->delete();
        return redirect()->route('assign.book.index');
    }
}
