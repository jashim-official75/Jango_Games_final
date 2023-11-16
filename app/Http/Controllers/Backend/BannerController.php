<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::paginate(10);
        return view('backend.banner.index', compact('banners'));
    }
    public function create()
    {
        return view('backend.banner.create');
    }

    public function store(Request $request)
    {
        $banner =Banner::create([
            'name'=>$request->game_name,
            'slug'=>Str::slug($request->game_name),
            'video_url'=>$request->video_url,
            'review'=>$request->review,
            'game_url'=>$request->game_url,
            'position'=>$request->position,
        ]);

        if($request->hasfile('thumbnail')){
            $name = uniqid().'_'.'banner'.'.'.$request->file('thumbnail')->extension();
            $request->file('thumbnail')->move(public_path('uploads/banner'), $name);
            Banner::find($banner->id)->update([
                'banner_image'=>$name
            ]);
        }


        return redirect()->route('banner.index')->with('message', 'Banner Inserted Successfully !!');
    }
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('backend.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);
        $request->validate([
            'game_name'=>'required',
            'game_url'=>'required',
            'position'=>'required',
            'thumbnail'=>'image|mimes:png,jpg,jpeg,webp|max:2048'
        ]);
        if($request->hasfile('thumbnail')){
            //old image delete----
            $old_image = $banner->banner_image;
            $oldPath ='uploads/banner/'.$old_image;
            if($oldPath){
                File::delete(public_path($oldPath));
            }
            $name = uniqid().'_'.'update_banner'.'.'.$request->file('thumbnail')->extension();
            $request->file('thumbnail')->move(public_path('uploads/banner'), $name);
            $banner->update(['banner_image'=>$name]);
        }
        $banner->update([
            'name'=>$request->game_name,
            'slug'=>Str::slug($request->game_name),
            'video_url'=>$request->video_url,
            'review'=>$request->review,
            'game_url'=>$request->game_url,
            'position'=>$request->position,
        ]);

        return redirect()->route('banner.index')->with('message', 'banner Updated Successfully !!');
    }
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $old_image = $banner->banner_image;
            $oldPath ='uploads/banner/'.$old_image;
            if($oldPath){
                File::delete(public_path($oldPath));
            }
        $banner->delete();
        return redirect()->route('banner.index')->with('message', 'Banner Deleted Successfully ! ');
    }
}
