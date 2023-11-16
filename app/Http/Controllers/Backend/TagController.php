<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tags = Tag::query()
        ->where(function ($q) use ($request){
            if($request->search){
                $q->where('title', 'LIKE','%'.$request->search.'%');
            }
        })
        ->latest()
        ->paginate(10);
        return view('backend.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'thumbnail'=>'image|mimes:png,jpg,jpeg,webp|max:2048'
        ]);

       $tag_id = Tag::create([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'icon_class'=>$request->icon_class,
            'color_code'=>$request->color_code,
            'description'=>$request->description,
        ]);

        if($request->hasfile('thumbnail')){
            $name = uniqid().'_'.'tag'.'.'.$request->file('thumbnail')->extension();
            $request->file('thumbnail')->move(public_path('uploads/Tag'), $name);
            Tag::find($tag_id->id)->update([
                'icon'=>$name
            ]);
        }
        return redirect()->route('tag.index')->with('message', 'Tag Inserted Successfully !!');
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
        $tag = Tag::findOrFail($id);
        return view('backend.tag.edit', compact('tag'));
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
        $tag = Tag::findOrFail($id);
        $request->validate([
            'title'=>'required',
            'thumbnail'=>'image|mimes:png,jpg,jpeg,webp|max:2048'
        ]);
        if($request->hasfile('thumbnail')){
            //old image delete----
            $old_image = $tag->icon;
            $oldPath ='uploads/Tag/'.$old_image;
            if($oldPath){
                File::delete(public_path($oldPath));
            }
            $name = uniqid().'_'.'tag_update'.'.'.$request->file('thumbnail')->extension();
            $request->file('thumbnail')->move(public_path('uploads/Tag'), $name);
            $tag->update([
                'icon'=>$name
            ]);
        }
        $tag->update([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'icon_class'=>$request->icon_class,
            'color_code'=>$request->color_code,
            'description'=>$request->description,
        ]);
        return redirect()->route('tag.index')->with('message', 'Tag Updated Successfully !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $old_image = $tag->icon;
        $oldPath ='uploads/Tag/'.$old_image;
        if($oldPath){
            File::delete(public_path($oldPath));
        }
        $tag->delete();
        return redirect()->route('tag.index')->with('message', 'Tag Deleted !!');
    }
}
