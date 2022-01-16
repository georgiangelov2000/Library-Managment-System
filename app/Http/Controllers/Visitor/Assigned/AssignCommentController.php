<?php

namespace App\Http\Controllers\Visitor\Assigned;

use App\Http\Controllers\Controller;
use App\Http\Requests\AssignedCommentRequest;
use App\Models\AssignBook;
use App\Models\AssignComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AssignCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        $data['books']=AssignBook::select('book_id')->where('user_id','=',$id)->get();
        return view('visitor.crud.comments.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssignedCommentRequest $request)
    {
        $user=Auth::id();
        $comment= new AssignComment();
        $comment->name=$request->name;
        $comment->user_id=$user;
        $comment->book_id=$request->book_id;
        $comment->save();
        return redirect()->route('comments.index')->with('message', 'Successfully created data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $assignComments=AssignComment::select('name','created_at','updated_at','book_id')->where('book_id','=',$id)->get();
      return view('visitor.crud.comments.inbox',['assignComments'=>$assignComments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
