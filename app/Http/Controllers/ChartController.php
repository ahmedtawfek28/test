<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ChartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=User::count();
        $usersGoogle=User::where('provider','=','GOOGLE')->count();
        $usersNotGoogle=User::WhereNull('provider')->count();
        $usersGooglejson=User::where('provider','=','GOOGLE')->whereNotNull('password')->count();

        return view('chart',compact('users','usersGoogle','usersNotGoogle','usersGooglejson'));
    }
}