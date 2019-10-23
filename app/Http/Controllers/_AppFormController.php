<?php

namespace App\Http\Controllers;

use App\App;

use Illuminate\Http\Request;

class AppFormController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->input('id');

        $app = App::where('id', $id)
            ->first();
        //dd($apps);
        return view('appForm', ['app' => $app, 'title' => $app->title]);
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $category = $request->input('category');
        $type = $request->input('type');
        $content_rating = $request->input('content_rating');
        $price = $request->input('price');
    }
}
