<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Http\Requests\StatusRequest;
use App\Models\UserFlags;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StatusController extends Controller
{

    public function updateStatusBook(StatusRequest $request, Book $book)
    {
        $validated= $request->validated();
        $book->update($validated);
        // return redirect()->back()->with('message', 'Successfully updated book status!');
    }

    public function updateStatusUser(StatusRequest $request, User $user)
    {
        $validated = $request->validated();
        $user->update($validated);
        return redirect()->back()->with('message', 'Successfully updated book status!');
    }

    public function approvedUsers(){ 
         $approvedUsers =  User::whereHas('user_flags', function($query) {
            $query->where('flag_id', 1)->where('role_id','=',1);
         })->get();

         return view('admin.crud.approved_users.index',['approvedUsers'=>$approvedUsers]);
    }

    public function waitingUsers(){
        $waitingUsers =  User::whereHas('user_flags', function($query) {
            $query->where('flag_id', 2)->where('role_id','=',1);
         })->get();

         return view('admin.crud.waiting-users.index',['waitingUsers'=>$waitingUsers]);
    }

    public function adminIndex()
    {
        $data['allData'] = DB::table('users')->where('role_id', '=', 2)->get();
        return view('admin.crud.users.adminView', $data);
    }

    public function visitorIndex()
    {
        $users = DB::table('users')->where('role_id', '=', 1)->get();
        $flags = UserFlags::all();
        return view('admin.crud.users.visitorView', ['users'=>$users, 'flags'=>$flags]);
    }

    public function deleteAllUsers(){
        DB::table('users')->where('role_id', '=', 1)->delete();
        return redirect()->back();        
    }

    public function deleteWaitingUsers(){
        User::where('role_id', '=', 1)
        ->where('flag_id', '=', 2)
        ->delete();

        return redirect()->back();        
    }

    public function deleteApprovedUsers(){
        User::where('role_id', '=', 1)
        ->where('flag_id', '=', 1)
        ->delete();
        return redirect()->back();        
    }

}
