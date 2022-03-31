<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clothing;


class ClothingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clothes = Clothing::all();
        return view('admin.clothes.index', [
            // the view can see the courses (the green one)
            'clothes' => $clothes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clothes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|max:500',
            'image' =>'required|max:500',
            'description' =>'required|max:500'
            
        ]);

    $clothing = new Clothing();
    $clothing->name = $request->input('name');
    $clothing->price = $request->input('price');
    $clothing->image = $request->input('image');
    $clothing->description = $request->input('description');
    $clothing->save();

    return redirect()->route('admin.clothes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clothing = Clothing::findOrFail($id);

        return view('admin.clothes.show', [
            'clothing' => $clothing
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
        $clothing = Clothing::findOrFail($id);

        // Load the edit view and pass the course to
        // that view
        return view('admin.clothes.edit', [
            'clothing' => $clothing
        ]);
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
        $clothing = Clothing::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'price' => 'required|max:500',
            'image' => 'required|max:500',
            'description' =>'required|max:500'
        ]);

        // if validation passes then update existing course
        $clothing->name = $request->input('name');
        $clothing->price = $request->input('price');
        $clothing->image = $request->input('image');
        $clothing->description = $request->input('description');
        $clothing->save();

        return redirect()->route('admin.clothes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clothing = Clothing::findOrFail($id);
        $clothing->delete();

        return redirect()->route('admin.clothes.index');
    }
}