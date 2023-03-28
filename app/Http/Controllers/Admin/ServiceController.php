<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Service;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {
        // $services = Service::all();

        $categories = Category::all();

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

        // return $services;

        return view('pages.admin.services.index', compact('services', 'categories'));
    }

    public function edite_service($service) 
    {
        
    }
    
    public function delete_service ($service, $categorie, $image)
    {
        DB::table('services')->where('id', $service)->delete();
        DB::table('images')->where('id', $image)->delete();

        return redirect(route('admin.services.index'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('pages.admin.services.create', compact('categories'));
    }

    /**
     * @throws ValidationException
     */
    public function store()
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|',
            'description' => 'required|string',
            'category_id'   => 'required|',
            'image' => 'required|mimes:jpg,png,jpeg,gif|max:500|', //dimensions:min_width=300,min_height=300,max_width=500,max_height=500',
        ]);
        if ($validator->fails()) {
            session()->flash('success', false);
            session()->flash('message', $validator->errors()->all());
            return redirect(route('admin.services.index'))->withInput();
        }
        $data = $validator->validated();
        $data['image'] = $data['image']->store('services', 'public');
        $image = Image::create([
            'path' => $data['image'],
        ]);
        Service::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'category_id'=> $data['category_id'],
            'image_id' => $image->id,
        ]);
        session()->flash('success', true);
        session()->flash('message', "Categorie ajoutée.");
        return redirect()->route('admin.services.index');
    }
}
