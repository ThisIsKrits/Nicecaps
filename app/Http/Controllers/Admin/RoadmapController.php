<?php

namespace App\Http\Controllers\Admin;

use App\Models\Roadmap;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\RoadmapRequest;
use Illuminate\Support\Str;

class RoadmapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Roadmap::all();

        return view('pages.admin.roadmap.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.roadmap.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoadmapRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title_roadmap);
        
        Roadmap::create($data);
        return redirect()->route('roadmap.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Roadmap::FindOrFail($id);

        return view('pages.admin.roadmap.edit',
        [
            'item' => $item,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoadmapRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title_roadmap);
        
        $item = Roadmap::FindOrFail($id);
        $item->update($data);
        return redirect()->route('roadmap.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Roadmap::FindOrFail($id);

        $item->delete();
        return redirect()->route('roadmap.index');
    }
}
