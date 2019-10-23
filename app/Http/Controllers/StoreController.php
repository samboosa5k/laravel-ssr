<?php

namespace App\Http\Controllers;

use App\App;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Request $request)
    {
        $genre_id = $request->input('gid');
        $installs = $request->input('installs');
        $orderby = $request->input('orderby');
        $orderway = $request->input('orderway');

        $apps = App::where('category_id', $genre_id)
            ->where('installs', '<', $installs)->orderby($orderby, $orderway)->limit(25)
            ->join('genres', 'genres.id', '=', 'apps.category_id')
            ->select('apps.installs', 'apps.id', 'apps.title', 'apps.rating', 'apps.current_version', 'genres.name as genre')
            ->get();

        //return dd($apps);
        return view('index', ['apps' => $apps]);
    }
}
