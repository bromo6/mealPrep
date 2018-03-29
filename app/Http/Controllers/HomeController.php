<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Allergy;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function userInfo()
    {
        $userInfo = User::where("id", '=', Auth::id())->first();
        // $userInfo = User::find(Auth::id());

        $data = [
          'userInfo' => $userInfo
        ];
        return view('profile')->with($data);
    }
    public function saveUser(Request $request)
    {
        // save data to user table
        $userInfo = User::where("id", '=', Auth::id())->first();
        $userInfo->age = $request->age;
        $userInfo->height = $request->height;
        $userInfo->weight = $request->weight;
        $userInfo->save();

        $data = [
            'userInfo' => $userInfo
        ];
        return view('profile')->with($data);

    }
}
