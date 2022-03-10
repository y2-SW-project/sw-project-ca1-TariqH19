<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
 public function index()
    {
        $images = Image::all();
        return view('user.shoes.index', [
            'images' =>$images
        ]);
    }
}
