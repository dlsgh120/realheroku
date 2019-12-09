<?php

namespace App\Http\Controllers;
use App\Main;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use DB;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $search=$request->input('search');

        if($request->has('search')){
        $mains=Main::where('title','like','%'.$search.'%')->paginate(5);
        }
        else{
        $mains = Main::orderBy('id','desc')->paginate(5);
   
        }
        
        return view('main',compact('mains'));
    }

    public function write(){
        return view('main_write');
    }

    public function store(Request $request){

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image=$request->file('image');

        $new_name = rand() . '.' . $image->
        getClientOriginalExtension();

        $image->move(public_path("images"),$new_name);
        
        $id=DB::table('mains')->max('id');
        $userId=Auth::user()->id;
        $userName=Auth::user()->name;
        $title=$request->input('title');
        $content=$request->input('content');
        // $image=$request->input('image');
        $date=date("Y-m-d");
        $count=0;

        Main::create([
            'id'=>$id+1,
            'userId'=>$userId,
            'title'=>$title,
            'content'=>$content,
            'image'=>$new_name,
            'date'=>$date,
            'userName'=>$userName,
            'count'=>$count
        ]);

        return redirect('/main');
    }

    public function read($id)
    {   
        $mains = Main::find($id);
        $mains->count=$mains->count+1;
        $mains->save();
        
        $jointable=DB::table('mains') // mains , reviews
        ->join('reviews','reviews.boardId','=','mains.id')
        ->where('mains.id','=',$id)
        ->get();

        return view('main_read',compact('mains','jointable'));
        
    }

    public function edit($id)
    {
        $mains=Main::find($id);
        return view('main_update',compact('mains'));
    }

    public function update(Request $request, $id)
    {
        $title=$request->input('title');
        $content=$request->input('content');
        $date=date('Y-m-d');
        $image=$request->input('image_text');

            $mains = DB::table('mains')
            ->where('id', $id)
            ->update(['title' => $title, 'content'=> $content, 'date'=> $date, 'image'=>$image]);
    
        return redirect('/main');
    }

    public function destroy($id)
    {
        $mains=Main::find($id);
        $mains->delete();
        
        return redirect('/main');
    }
}
