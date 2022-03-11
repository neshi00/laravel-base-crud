<?php

namespace App\Http\Controllers;

use App\Archive;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Archive::all();

        return view("archives.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("archives.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newComic = new Archive();

        $newComic->title = $data["title"];
        $newComic->price = $data["price"];
        $newComic->description = $data["description"];
        $newComic->series = $data["series"];

        $newComic->save();

        return redirect()->route("archives.show", $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $archive = Archive::findOrFail($id);

        return view("archives.show", compact("archive"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $archive = Archive::findOrFail($id);

        return view("archives.edit", compact("archive"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */  
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $archive = Archive::findOrFail($id);

        $archive->update($data);

        return redirect()->route("archives.show", $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $archive = Archive::findOrFail($id);
        $archive->delete();

        return redirect()->route("archives.index");
    }
}
