<?php

namespace App\Http\Controllers;
use App\Board;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use DB;

class BoardController extends Controller
{
    public function index(Request $request)
    {
        $search=$request->input('search');

        if($request->has('search')){
        $boards=Board::where('title','like','%'.$search.'%')->paginate(5);
        }
        else{
        $boards = Board::orderBy('id','desc')->paginate(5);
   
        }
        
        return view('board',compact('boards'));
    }

    public function write()
    {
        return view('write');
    }

    public function store(Request $request)
    {   
        $id=DB::table('boards')->max('id');
        $userId=Auth::user()->id;
        $userName=Auth::user()->name;
        $title=$request->input('title');
        $content=$request->input('content');
        $date=date("Y-m-d");
        $count=0;

        Board::create([
            'id'=>$id+1,
            'userId'=>$userId,
            'title'=>$title,
            'content'=>$content,
            'date'=>$date,
            'userName'=>$userName,
            'count'=>$count
        ]);

        return redirect('/board');
    }
    
    public function read($id)
    {   
        if(empty(auth::user())){
            return redirect('/login');
        }
        else{
        $boards = Board::find($id);
        $boards->count=$boards->count+1;
        $boards->save();
        return view('read',compact('boards'));
        }
    }

    public function edit($id)
    {
        $boards=Board::find($id);
        return view('board_update',compact('boards'));
    }

    public function update(Request $request, $id)
    {
        $title=$request->input('title');
        $content=$request->input('content');
        $date=date('Y-m-d');

        $boards = DB::table('boards')
              ->where('id', $id)
              ->update(['title' => $title, 'content'=> $content, 'date'=> $date]);

        return redirect('/board');
    }

    public function destroy($id)
    {
        $boards=Board::find($id);
        $boards->delete();
        
        return redirect('/board');
    }
}
