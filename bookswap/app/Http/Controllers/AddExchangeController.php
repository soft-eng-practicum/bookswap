<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Exchange;
use App\Books;

class AddExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

          'desc' => 'required',

          'description' => 'required',

          'price' => 'required',



        ]);

        //create a new book using request data
        //save it to the database
        $id = Auth::id();
        $ex = new Exchange;
        $ex->desc = $request->input('desc');
        $ex->description = $request->input('description');
        $ex->price = $request->input('price');
        $ex->user_id = $id;
        $ex->books_id = $request->input('bookID');
        $ex->save();
        //Exchange::create(request(['description','price','books_id']));

        //redirect to books

        return redirect('/test');
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
        $exchange = Exchange::findorFail($id);
        $exchange->delete();

     // redirect
     return redirect('/profile');
    }
}
