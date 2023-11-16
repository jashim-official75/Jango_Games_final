<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::query()
        ->where(function ($q) use ($request){
            if($request->search){
                $q->where('title', 'LIKE','%'.$request->search.'%');
            }
        })
        ->paginate(20);
        return view('backend.category.index', compact('categories'));
    }
    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:categories,title',
            'icon_class'=>'required',
            'thumbnail'=>'image|mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        $category =Category::create([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'icon_class'=>$request->icon_class,
            'sub_title'=>$request->sub_title,
            'description'=>$request->description,
            'meta_title'=>$request->meta_title,
            'meta_description'=>$request->meta_description,
            'meta_keyword'=>$request->meta_keyword,
        ]);

        if($request->hasfile('thumbnail')){
            $name = uniqid().'_'.'category'.'.'.$request->file('thumbnail')->extension();
            $request->file('thumbnail')->move(public_path('uploads/Category'), $name);
            Category::find($category->id)->update([
                'thumbnail'=>$name
            ]);
        }


        return redirect()->route('category.index')->with('message', 'Category Inserted Successfully !!');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $request->validate([
            'title'=>'required',
            'icon_class'=>'required',
            'thumbnail'=>'image|mimes:png,jpg,jpeg,webp|max:2048'
        ]);
        if($request->hasfile('thumbnail')){
            //old image delete----
            $old_image = $category->thumbnail;
            $oldPath ='uploads/Category/'.$old_image;
            if($oldPath){
                File::delete(public_path($oldPath));
            }
            $name = uniqid().'_'.'update_category'.'.'.$request->file('thumbnail')->extension();
            $request->file('thumbnail')->move(public_path('uploads/Category'), $name);
            $category->update(['thumbnail'=>$name]);
        }
        $category->update([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'icon_class'=>$request->icon_class,
            'sub_title'=>$request->sub_title,
            'description'=>$request->description,
            'meta_title'=>$request->meta_title,
            'meta_description'=>$request->meta_description,
            'meta_keyword'=>$request->meta_keyword,
        ]);

        return redirect()->route('category.index')->with('message', 'Category Updated Successfully !!');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $old_image = $category->thumbnail;
            $oldPath ='uploads/Category/'.$old_image;
            if($oldPath){
                File::delete(public_path($oldPath));
            }
        $category->delete();
        return redirect()->route('category.index')->with('message', 'Category Deleted Successfully ! ');
    }
}
