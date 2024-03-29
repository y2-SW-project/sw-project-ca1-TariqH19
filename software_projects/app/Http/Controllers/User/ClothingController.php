<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Clothing;
use Illuminate\Http\Request;

class ClothingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clothes = Clothing::all();
        return view('user.clothes.index', [
            'clothes' =>$clothes
        ]);
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
        $clothes = Clothing::findOrFail($id);
        return view('user.clothes.show', [
            'clothing' => $clothes
        ]);
    }

    public function buy($id)
    {
        $clothes = Clothing::findOrFail($id);
        return view('user.clothes.buy', [
            'clothing' => $clothes
        ]);
    }

        public function bid($id)
    {
        $clothes = Clothing::findOrFail($id);
        return view('user.clothes.bid', [
            'clothing' => $clothes
        ]);
    }

        public function sell($id)
    {
        $clothes = Clothing::findOrFail($id);
        return view('user.clothes.sell', [
            'clothing' => $clothes
        ]);
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