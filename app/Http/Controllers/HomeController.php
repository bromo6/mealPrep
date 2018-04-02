<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Log;
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
        Log::info($request);
        // save data to user table
        $userInfo = User::where("id", '=', Auth::id())->first();
        $userInfo->age = $request->age;
        $userInfo->height = $request->height;
        $userInfo->weight = $request->weight;
        $userInfo->gender = $request->gender;
        $userInfo->allergy_treenuts = ($request->tree_nuts) ? $request->tree_nuts : 0;
        $userInfo->allergy_peanuts = ($request->peanuts) ? $request->peanuts : 0;
        $userInfo->allergy_dairy = ($request->dairy) ? $request->dairy : 0;
        $userInfo->allergy_egg = ($request->egg_whites) ? $request->egg_whites : 0;
        $userInfo->allergy_soy = ($request->soy) ? $request->soy : 0;
        $userInfo->allergy_finnedfish = ($request->finned_fish) ? $request->finned_fish : 0;
        $userInfo->allergy_shellfish = ($request->shellfish) ? $request->shellfish : 0;
        $userInfo->allergy_wheat = ($request->wheat) ? $request->wheat : 0;
        $userInfo->allergy_corn = ($request->corn) ? $request->corn : 0;
        $userInfo->allergy_sesameseeds = ($request->sesame_seeds) ? $request->sesame_seeds : 0;
        $userInfo->allergy_yeast = ($request->yeast) ? $request->yeast : 0;
        $userInfo->save();

        $data = [
            'userInfo' => $userInfo
        ];
        return view('profile')->with($data);

    }
}
