<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $image = $this->getOldImage();

        return view('pages.contact', compact('image'));
    }

    private function getOldImage(): array
    {
        return Image::where('path', 'like', '%images/contact%')->get()->pluck('path')->all();
    }

    public function mail()
    {
        Mail::to('info@supplybusinesservice.com')
            ->send(new Email(request()->all()));
        return redirect()->back();
    }
}
