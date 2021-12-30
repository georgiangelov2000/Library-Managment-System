<?php

namespace App\Http\Controllers;

use App\Models\AssignBook;
use App\Models\Book;
use App\Models\Gender;
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
        return view('admin.crud.guest-profile.profile',$data);
    }

    public function visitorBooks(){
        $id = Auth::id();
        $data['books']=AssignBook::select('book_id')->where('user_id','=',$id)->get();
        return view('admin.crud.guest-profile.mybooks',$data);
    }

    public function getEditProfile($id){
        $data['user'] = User::where('id',$id)->get();
        $data['genders'] = Gender::all();
        return view('admin.crud.guest-profile.edit-profile',$data);
    }

    public function postUpdateProfile(Request $request,$id){
        $user = User::where('id',$id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->dob = $request->dob;
        $user->gender_id = $request->gender_id;
        if($request->file('image')){
            $file=$request->file('image');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/images'),$filename);
            $user['image']=$filename;
        }
        $user->save();
        return redirect()->route('profile.index')->with('message', 'Successfully updated data!');
    }
}
