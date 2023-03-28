<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::with('services')->get();

        $categories = DB::table('images')
        ->join('categories', 'categories.image_id', '=', 'images.id')
        ->get(['categories.id as idcategorie', 'images.id as idimage', 'name', 'path']);
        // return $categories;

        return view('pages.admin.categories.index', compact('categories'));
    }

    public function store()
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|',
            'image' => 'required|mimes:jpg,png,jpeg,gif|max:500|', //dimensions:min_width=300,min_height=300,max_width=500,max_height=500',
        ]);

        if ($validator->fails()) {
            session()->flash('success', false);
            session()->flash('message', $validator->errors()->all());
            return redirect(route('admin.categories.index'))->withInput();
        }
        $data = $validator->validated();

        
        $data['image'] = $data['image']->store('categories', 'public');
        // dd($data);
        $image = Image::create([
            'path' => $data['image'],
        ]);
        Category::create([
            'name' => $data['name'],
            'image_id' => $image->id,
        ]);
        session()->flash('success', true);
        session()->flash('message', "Categorie ajoutée.");
        return redirect()->route('admin.categories.index');
    }

    public function edit($category_id)
    {
        // $category = Category::find($category_id);
        $category = DB::table('images')
        ->join('categories', 'categories.image_id', '=', 'images.id')
        ->whereIn('categories.id', [$category_id])
        ->get(['categories.id as idcategorie', 'images.id as idimage', 'name', 'path']);

        // return $category;

        return view('pages.admin.categories.edit', compact('category'));
    }

    public function update($category_id, Request $request)
    {

        $image = request('idimage');
       
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|',
            'image' => 'required|mimes:jpg,png,jpeg,gif|max:500|', //dimensions:min_width=300,min_height=300,max_width=500,max_height=500',
        ]);
        if ($validator->fails()) {
            session()->flash('success', false);
            session()->flash('message', $validator->errors()->all());
            return redirect(route('admin.categories.index'))->withInput();
        }
        
        $data = $validator->validated();

        $data['image'] = $data['image']->store('categories', 'public');

        $categoryToUpdated = Category::find($category_id);

        $categoryToUpdated->update([
            'name' => $data['name'],
        ]);

        // $imageToUpdated = Image::find($categoryToUpdated->image_id);
        $imageToUpdated = Image::find($image);
        $imageToUpdated->update([
            'path' => $data['image'],
        ]);

        $this->deleteOldImg($this->getOldImage($imageToUpdated->id));

        return redirect()->route('admin.categories.index');
    }


    private function getOldImage($image_id): Image
    {
        return Image::find($image_id);
    }

    private function deleteOldImg($image) {
        File::delete(['path' => 'storage/' .$image]);
    }

    public function delete_cat($idcategorie, $idimage)
    {
        // $idimage = request('idimage');
        DB::table('categories')->where('id', $idcategorie)->delete();
        DB::table('images')->where('id', $idimage)->delete();

        return redirect(route('admin.categories.index'));
        // return $idimage;
        // $category = Category::find($category_id);

        // dd($category);

        // $category->delete($category_id);
    }
    public function delete($category_id)
    {
        $idimage = request('idimage');
        
        return $idimage;
        $category = Category::find($category_id);

        dd($category);

        $category->delete($category_id);
    }

    public function show()
    {

    }
}
