<?php

namespace App\Http\Controllers;

use App\Main;
use App\Board;
use App\Notice;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use DB;

class WelcomeController extends Controller
{
    public function index()
    {    
        $mains = DB::table('mains')
                ->orderBy('id', 'desc')
                ->paginate(5);

        $boards = DB::table('boards')
                ->orderBy('id', 'desc')
                ->paginate(5);
        $notices = DB::table('notices')
                ->orderBy('id', 'desc')
                ->paginate(5);
        return view('welcome',compact('mains','boards','notices'));
    }
}
