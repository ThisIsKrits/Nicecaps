<?php

namespace App\Http\Controllers;

use App\Models\Thumbnail;
use App\Http\Requests\Admin\ThumbnailRequest;
use App\Models\Roadmap;
use App\Http\Requests\Admin\RoadmapRequest;
use App\Models\Gallery;
use App\Http\Requests\Admin\GalleryRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $roadmap = Roadmap::all();
        $thumbnail = Thumbnail::all();
        $gallery = Gallery::all();

        return view('pages.home',
    [
        'roadmap' => $roadmap,
        'thumbnail' => $thumbnail,
        'gallery' => $gallery
    ]);
    }
}
