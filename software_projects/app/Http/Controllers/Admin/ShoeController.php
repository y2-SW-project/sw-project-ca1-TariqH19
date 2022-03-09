<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shoe;


class ShoeController extends Controller
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
        $shoes = Shoe::all();
        return view('admin.shoes.index', [
            // the view can see the courses (the green one)
            'shoes' => $shoes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shoes.create');
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
            'title' => 'required',
            'price' => 'required|max:500',
            'description' =>'required|max:500'
            
        ]);

    $shoe = new Shoe();
    $shoe->title = $request->input('title');
    $shoe->price = $request->input('price');
    $shoe->description = $request->input('description');
    $shoe->save();

    return redirect()->route('admin.shoes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shoe = Shoe::findOrFail($id);

        return view('admin.shoes.show', [
            'shoe' => $shoe
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
        $shoe = Shoe::findOrFail($id);

        // Load the edit view and pass the course to
        // that view
        return view('admin.shoes.edit', [
            'shoe' => $shoe
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
        $course = Course::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'price' => 'required|max:500',
            'description' =>'required|max:500'
        ]);

        // if validation passes then update existing course
        $shoe->title = $request->input('title');
        $shoe->price = $request->input('price');
        $shoe->description = $request->input('description');
        $shoe->save();

        return redirect()->route('admin.courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shoe = Shoe::findOrFail($id);
        $shoe->delete();

        return redirect()->route('admin.shoes.index');
    }
}
