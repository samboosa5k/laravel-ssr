<?php

namespace App\Http\Controllers;

use App\App;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $apps = App::where('category_id', '>', 10)->limit(25)
            ->join('categories', 'categories.id', '=', 'apps.category_id')
            ->select('apps.id', 'apps.title', 'apps.rating', 'apps.current_version', 'categories.name as category')
            ->get();

        // return dd($apps);
        return view('index', ['apps' => $apps]);
    }
}
