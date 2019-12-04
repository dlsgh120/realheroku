<?php

namespace App\Http\Controllers;
use App\Notice;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use DB;


class NoticeController extends Controller
{
    public function index(Request $request)
    {
        $search=$request->input('search');

        if($request->has('search')){
        $notices=Notice::where('title','like','%'.$search.'%')->paginate(5);
        }
        else{
        $notices = Notice::orderBy('id','desc')->paginate(5);
   
        }
        
        return view('notice',compact('notices'));
    }

    public function write()
    {
        return view('notice_write');
    }

    public function store(Request $request)
    {   
        $id=DB::table('notices')->max('id');
        $userId=Auth::user()->id;
        $userName=Auth::user()->name;
        $title=$request->input('title');
        $content=$request->input('content');
        $date=date("Y-m-d");
        $count=0;

        Notice::create([
            'id'=>$id+1,
            'userId'=>$userId,
            'title'=>$title,
            'content'=>$content,
            'date'=>$date,
            'userName'=>$userName,
            'count'=>$count
        ]);

        return redirect('/notice');
    }

    public function read($id)
    {   
        
        $notices = Notice::find($id);
        $notices->count=$notices->count+1;
        $notices->save();
        return view('notice_read',compact('notices'));
        
    }

    public function edit($id)
    {
        $notices=Notice::find($id);
        return view('notice_update',compact('notices'));
    }

    public function update(Request $request, $id)
    {
        $title=$request->input('title');
        $content=$request->input('content');
        $date=date('Y-m-d');

        $notices = DB::table('notices')
              ->where('id', $id)
              ->update(['title' => $title, 'content'=> $content, 'date'=> $date]);

        return redirect('/notice');
    }

    public function destroy($id)
    {
        $notices=Notice::find($id);
        $notices->delete();
        
        return redirect('/notice');
    }
}
