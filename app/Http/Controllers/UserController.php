<?php

namespace App\Http\Controllers;

use App\Models\AssignBook;
use App\Models\Gender;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData'] = User::all();
        return view('admin.crud.users.index', $data);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['roles'] = Role::all();
        $data['genders'] = Gender::all();
        return view('admin.crud.users.create', $data);
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
            'email' => 'required|email',
            'role_id' => 'required',
            'gender_id' => 'required',
            'image' => 'required',
            'password' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->gender_id = $request->gender_id;
        $user->dob = $request->dob;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $user['image'] = $filename;
        }
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('user.index')->with('message', 'Successfully created data!');
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
        $data['editData'] = User::where('id', $id)->orderBy('id', 'asc')->get();
        $data['genders'] = Gender::all();
        $data['roles'] = Role::all();
        return view('admin.crud.users.edit', $data);
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
        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->gender_id = $request->gender_id;
        $user->dob = $request->dob;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $user['image'] = $filename;
        }
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('user.index')->with('message', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }

    public function adminIndex()
    {
        $data['allData'] = DB::table('users')
            ->where('role_id', '=', 2)
            ->get();

        return view('admin.crud.users.adminView', $data);
    }

    public function visitorIndex()
    {
        $data['allData'] = DB::table('users')
            ->where('role_id', '=', 1)
            ->get();
        return view('admin.crud.users.visitorView', $data);
    }

    public function visitorBook($id)
    {
        $data['allData'] = AssignBook::select('book_id', 'date_of_receipt', 'date_of_return')->where('user_id', $id)->get();
        return view('admin.crud.books.assigned-books', $data);
    }

    public function adminProfile(){
        $data['user']= Auth::user();
        return view('admin.crud.admin-profile.profile',$data);
    }

    public function editAdminProfile($id){
        $data['user'] = User::where('id',$id)->get();
        $data['genders'] = Gender::all();
        return view('admin.crud.admin-profile.edit-profile',$data);
    }

    public function updateAdminProfile(Request $request,$id){
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
