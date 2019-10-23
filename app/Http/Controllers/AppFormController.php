<?php

namespace App\Http\Controllers;

use App\App;

use Illuminate\Http\Request;

class AppFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->input('id');

        $app = App::where('id', $id)
            ->first();
        return view('appForm', ['app' => $app, 'title' => $app->title, 'id' => $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  UPDATE FUNCTION WAS DIFFICULT
        $all = $request->all();
        $title = $all['title'];
        $category = $all['category'];
        $type = $all['type'];
        $content_rating = $request->input('content_rating');
        $price = $request->input('price');

        $appToUpdate = App::find($id);
        $appToUpdate->title = $title;
        $appToUpdate->category_id = $category;
        $appToUpdate->type = $type;
        $appToUpdate->content_Rating = $content_rating;
        $appToUpdate->price = $price;

        $appToUpdate->save();

        return redirect('/form?id=' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
