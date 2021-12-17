<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VisitorProfileController extends Controller
{

    public function index(){
        return view('guest');
    }

    public function profile(){
        $data['user']=Auth::user();
        return view('admin.crud.profile.profile',$data);
    }

    public function visitorBooks(){
        $id = Auth::id();
        $data['books'] =Book::where('user_id', '=',$id)->get();
        return view('admin.crud.profile.mybooks',$data);
    }
}
