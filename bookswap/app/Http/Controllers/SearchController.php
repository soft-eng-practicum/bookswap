<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Books;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete() 
    {
        $term = Input::get('title');
        $results = array();
        $queries = DB::table('Books')
        ->where('title', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        foreach($queries as $query)
        {
            $results[];
        }
        return Response::json($results);
    }
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //creates validation

        $this->validate(request(),[

          'title' => 'required',

          'author' => 'required',

          'edition' => 'required',

          'ISBN' => 'required',

          'publisher' => 'required'

        ]);

        //create a new book using request data
        //save it to the database

        Books::create(request(['title','author','edition','ISBN','publisher']));

        //redirect to books

        return redirect('/addExchange');
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
        //
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