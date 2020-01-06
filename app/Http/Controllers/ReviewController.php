<?php

namespace App\Http\Controllers;

use App\Review;

use App\Main;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use DB;

class ReviewController extends Controller
{
    public function store(Request $request, $getid)
    {   
        $id=DB::table('reviews')->max('id');
        $userId=Auth::user()->id;
        $type="mains";
        // $boardId=$getid;
        $content=$request->input('review_text');
        $date=date("Y-m-d");
        $userName=Auth::user()->name;

        Review::create([
            'id'=>$id+1,
            'userId'=>$userId,
            'type'=>$type,
            'boardId'=>$getid,
            'content'=>$content,
            'date'=>$date,
            'userName'=>$userName
        ]);

        return redirect()->back();
        
    }

    public function index()
    {
        // $reviews=Review::all();
        // return view('review',compact('reviews'));

        $test=DB::table('mains')
        ->join('reviews','reviews.boardId','=','mains.id')
        ->get();

        $mains = Main::find('6');

        return view('review',compact('test','mains'));
    }


    public function storeboard(Request $request, $getid)
    {   
        $id=DB::table('reviews')->max('id');
        $userId=Auth::user()->id;
        $type="boards";
        // $boardId=$getid;
        $content=$request->input('review_text');
        $date=date("Y-m-d");
        $userName=Auth::user()->name;

        Review::create([
            'id'=>$id+1,
            'userId'=>$userId,
            'type'=>$type,
            'boardId'=>$getid,
            'content'=>$content,
            'date'=>$date,
            'userName'=>$userName
        ]);

        return redirect()->back();
        
    }

    public function deleteMain($id)
    {
        $reviews=Review::find($id);
        $reviews->delete();
        
        return redirect()->back();
    }
    
}
