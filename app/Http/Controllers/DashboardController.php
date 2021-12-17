<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['authors']=Author::all();
        $data['books']=Book::all();
        $data['users']=User::all();
        $data['roles']=Role::all();

        $data['visitor']=User::where('role_id','=',1)->get();
        $data['admin']=User::where('role_id','=',2)->get();

        return view('admin.dashboard.index',$data);
    }
}
