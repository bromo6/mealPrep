<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Log;
use App\Allergy;
use App\Recipe;
use App\Favorite;
use App\RecipeIngredient;

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
    public function index(Request $request)
    {
        $query = $request->query('searchRecipe');
        $recipeResults = Recipe::where('name','=',$query)->get();
        $data = [
            'recipeResults' => $recipeResults,
            'query' => $query
        ];
        return view('home')->with($data);
    }

    public function viewRecipe($id)
    {
        $recipe = Recipe::find($id);
        $ingredients = RecipeIngredient::where('recipe_id', $id)->with('ingredient')->get();
        // $step = Recipe::where('steps');
        // return $ingredients;
        $data = [
            'recipe' => $recipe,
            'ingredients' => $ingredients,
            // 'step' => $step
        ];
        return view('recipe-detail')->with($data);
    }

    public function favoriteRecipe($favoriteId)
    {
        $userId = Auth::id();
        $newFavorite = new Favorite;
        $newFavorite->recipe_id = $favoriteId;
        $newFavorite->user_id = $userId;
        $newFavorite->save();

        return redirect()->route('profile');
    }

    public function userInfo()
    {
        $userInfo = User::where("id", '=', Auth::id())->first();
        // $userInfo = User::find(Auth::id());

        $data = [
          'userInfo' => $userInfo
        ];
        return view('settings')->with($data);
    }
    public function showUser()
    {
        $showUser = User::where("id", '=', Auth::id())->first();
        $myRecipes = Recipe::where('user_id', Auth::id())->get();
        $favoritedRecipes = Favorite::where('user_id', Auth::id())->get();
        // return $favoritedRecipes;
        // $userInfo = User::find(Auth::id());

        $data = [
          'showUser' => $showUser,
          'favoritedRecipes' => $favoritedRecipes,
          'myRecipes' => $myRecipes
        ];
        return view('profile')->with($data);
    }
    public function saveUser(Request $request)
    {
        Log::info($request);
        // save data to user table
        $userInfo = User::where("id", '=', Auth::id())->first();
        $userInfo->username = $request->username;
        $userInfo->image_path = $request->image_path;
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
        return view('home')->with($data);

    }
}
