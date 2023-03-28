<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeContentController extends Controller
{
    public function index()
    {
        $images = $this->getHomeImages();

        $servicesImg = $this->getOldImagesServices();

        $aboutImg = $this->getOldImagesAbout();

        $contactImg = $this->getOldImagesContact();

        return view('pages.admin.contents.index', compact('images', 'servicesImg', 'aboutImg', 'contactImg'));
    }

    public function update()
    {

    }

    private function deleteOldImg(array $images) {
        foreach ($images as $img)
        {
            Image::where('path', 'like', '%'.$img.'%')->delete();
            File::delete(['path' => 'storage' . '/'. $img ]);
        }
    }


    private function getHomeImages()
    {
        return Image::where('path', 'like', '%images/slider%')->get()->pluck('path')->all();
    }

    private function getOldImagesServices(): array
    {
        return Image::where('path', 'like', '%images/services%')->get()->pluck('path')->all();
    }

    private function getOldImagesAbout(): array
    {
        return Image::where('path', 'like', '%images/about%')->get()->pluck('path')->all();
    }

    private function getOldImagesContact(): array
    {
        return Image::where('path', 'like', '%images/contact%')->get()->pluck('path')->all();
    }

    public function getOldImages()
    {
        return '';
    }
}
