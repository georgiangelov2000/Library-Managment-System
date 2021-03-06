<?php

namespace App\Http\Controllers\Visitor\Assigned;

use App\Http\Controllers\Controller;
use App\Http\Requests\AssignedCommentRequest;
use App\Models\AssignBook;
use App\Models\AssignComment;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class AssignCommentController extends Controller
{

    public $assignBook;
    public function __construct(AssignBook $assignBook){
        $this->assignBook = $assignBook;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        $books= $this->assignBook->where('user_id','=',$id)->get('book_id');
        return view('visitor.crud.comments.create',['books'=>$books]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=Auth::id();
        $comment= new AssignComment();
        $comment->name=$request->name;
        $comment->user_id=$user;
        $comment->book_id=$request->book_id;
        $comment->save();
        return redirect()->route('comment.show',$request->book_id)->with('message', 'Successfully created data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $authUser=Auth::id(); 
      $assignComments = User::find($authUser)->comments()->where(['book_id'=>$id])->get(); 
      return view('visitor.crud.comments.inbox',['assignComments'=>$assignComments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignComment $assignComment)
    {
        $id = $assignComment['id'];
        $authUser=Auth::id();
        $comment = User::find($authUser)->comments()->where(['id' => $id])->first();
        return view('visitor.crud.comments.edit',compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssignComment $assignComment, Request $request)
    {
        $id = $assignComment['id'];
        $authUser=Auth::id();
        $comment= User::find($authUser)->comments()->where(['id' => $id])->first();
        $comment->name=$request->name;
        $comment->save();
        return redirect()->route('comment.show',$authUser)->with('message', 'Successfully created data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(AssignComment $comment)
    {
        $comment->delete();
        return redirect()->back();
    }

    public function comments (){
        $authUser=Auth::id();
        $comments = User::find($authUser)->comments()->get();
        return view('visitor.crud.comments.comments',['assignComments'=>$comments]);
    }
}
