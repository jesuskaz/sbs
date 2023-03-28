<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // $services = Service::all();

        // $categories = Category::all();

        // $homeImages = $this->getHomeImages();
        $result = DB::table('categories')->get();
        $categories = $result->toArray();

        $header = $this->getHomeImages();

        $categories = DB::table('images')
        ->join('categories', 'categories.image_id', '=', 'images.id')
        ->get(['categories.id as idcategorie', 'images.id as idimage', 'name', 'path']);

        $homeImages = [];

        foreach($categories as $categorie)
        {
            $service = DB::table('categories')
            ->join('services', 'services.category_id', '=', 'categories.id')
            ->join('images', 'images.id', '=', 'services.image_id')
            ->whereIn('services.category_id', [$categorie->idcategorie])
            ->get([
                'categories.id as idcategorie', 
                'images.id as idimage', 
                'categories.name as categorie',
                'services.name as service',
                'services.id as idservice',
                'path',
                'description'
            ]);
            $homeImages[$categorie->name] = $service;
        }

        // return $homeImages;

        return view('pages.index', compact('homeImages', 'categories', 'header'));
    }

    private function getHomeImages()
    {
        return Image::where('path', 'like', '%images/slider%')->get()->pluck('path')->all();
    }
}
