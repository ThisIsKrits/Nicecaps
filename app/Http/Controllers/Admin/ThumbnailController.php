<?php

namespace App\Http\Controllers\Admin;
use App\Models\Thumbnail;
use App\Http\Requests\Admin\ThumbnailRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ThumbnailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Thumbnail::all();

        return view('pages.admin.thumbnail.index',
        [
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
        return view('pages.admin.thumbnail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThumbnailRequest $request)
    {
        $data = $request->all();
        $data['thumbnail'] = $request->file('thumbnail')->store
        ('assets/thumbnail','public');

        Thumbnail::create($data);
        return redirect()->route('thumbnail.index');
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
        $item = Thumbnail::FindOrFail($id);

        return view('pages.admin.thumbnail.edit',
        ['item' => $item,
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ThumbnailRequest $request, $id)
    {
        $data = $request->all();
        $data['thumbnail'] = $request->file('thumbnail')->store
        ('assets/thumbnail','public');

        $item = Thumbnail::FindOrFail($id);
        $item ->update($data);
        return redirect()->route('thumbnail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Thumbnail::FindOrFail($id);
        $item->delete();

        return redirect()->route('thumbnail.index');
    }
    
}
