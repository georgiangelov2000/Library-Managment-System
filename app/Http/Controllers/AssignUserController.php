<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssignUserController extends Controller
{

    public function index()
    {
        $data['allData']=Book::all();
        return view('admin.crud.assign_user.index',$data);
    }
    
    public function edit($id)
    {
        $data['editData'] = Book::where('id', $id)->orderBy('id', 'asc')->get();
        $data['users']=User::all();
        return view('admin.crud.assign_user.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $data = Book::where('id',$id)->first();
        $data->name = $request->name;
        $data->user_id = $request->user_id;
        $data->save();
        return redirect()->route('assign.user.index');
    }
}
