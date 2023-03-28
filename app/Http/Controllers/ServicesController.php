<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index()
    {
        // $services = Service::all();

        $services = DB::table('categories')
        ->join('services', 'services.category_id', '=', 'categories.id')
        ->join('images', 'images.id', '=', 'services.image_id')
        ->get([
            'categories.id as idcategorie', 
            'images.id as idimage', 
            'categories.name as categorie',
            'services.name as service',
            'services.id as idservice',
            'path',
            'description'
        ]);


        $image = $this->getOldImages();

        // return $image;

        // $categories = Category::with('services')->get();

        return view('pages.services', compact('services', 'image'));
    }

    private function getOldImages(): array
    {
        return Image::where('path', 'like', '%images/services%')->get()->pluck('path')->all();
    }
}
