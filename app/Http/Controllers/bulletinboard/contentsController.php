<?php

namespace App\Http\Controllers\bulletinboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\thread;
use App\comment;
use Illuminate\Support\Facades\DB;

class contentsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  //
  public function contents(Request $request)
  {
    $data['threads']=  thread:: all() ;
    $data['comments']= comment:: all() ;
    $thread_id = $request->thread_id;
    $data['threads'] = DB::table('thread')->where('thread_id','=',$thread_id)->get();
    $comment_id = $request->comment_id;
    $data['comments'] = DB::table('comment')->where('thread_id','=',$thread_id)->get();

    return view('bulletinboard.contents',$data);
  }
}
