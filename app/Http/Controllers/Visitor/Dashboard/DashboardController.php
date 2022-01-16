<?php

namespace App\Http\Controllers\Visitor\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AssignComment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $id = Auth::id();

        $comments = AssignComment::where('user_id', '=', $id)->get();
        $commentsCollection = collect($comments);

        //all books
        $allBooks=User::find($id)->visitorBooks()->get();
        //favourites        
        $bookFavCount=User::find($id)->visitorBooks()->where('flag_id',1 )->get();
        //incomigs
        $bookIncCount=User::find($id)->visitorBooks()->where('flag_id',2 )->get();
        //readed
        $bookReadedCount=User::find($id)->visitorBooks()->where('flag_id',3 )->get();
        //archived
        $bookArchCount=User::find($id)->visitorBooks()->where('flag_id',4 )->get();

        return view('visitor.dashboard.index',compact('commentsCollection','allBooks','bookFavCount','bookIncCount','bookReadedCount','bookArchCount'));
    }
}
