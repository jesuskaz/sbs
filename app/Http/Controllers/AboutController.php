<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $image = $this->getOldImage();

        $categories = Category::all();

        return view('pages.about', compact('image', 'categories'));
    }

    private function getOldImage(): array
    {
        return Image::where('path', 'like', '%images/about%')->get()->pluck('path')->all();
    }
}
