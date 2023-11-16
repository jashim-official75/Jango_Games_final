<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\GameRequest;
use App\Models\Backend\Category;
use App\Models\Backend\Game;
use App\Models\Backend\GameCategory;
use App\Models\Backend\GameTag;
use App\Models\Backend\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GameController extends Controller
{
    //index
    public function index(Request $request)
    {
        $total_games = Game::count();
        $games = Game::where('name', 'like', '%' . $request->search . '%')
            ->orWhere('serial_number', $request->search)
            ->orderBy('serial_number', 'desc')
            ->latest()
            ->paginate(50);
       
        return view('backend.game.index', compact('games', 'total_games'));
    }

    //create
    public function create()
    {
        $categories = Category::get();
        $tags = Tag::get();
        return view('backend.game.create', compact('categories', 'tags'));
    }
    //store
    public function store(GameRequest $request)
    {
         $request->validated();
        if($request->hasfile('thumbnail')){
            $name = uniqid().'_'.'thumbnail'.'.'.$request->file('thumbnail')->extension();
            $request->file('thumbnail')->move(public_path('uploads/Games'), $name);
        }
        $game = Game::create([
            'name'=>$request->game_name,
            'slug' => Str::slug($request->game_name, '-'),
            'link'=>$request->game_url,
            'type'=>$request->game_type,
            'desc'=>$request->description,
            'is_paid'=>$request->game_paid,
            'is_exclusive'=>$request->exclusive_game,
            'is_featured'=>$request->featured_game,
            'thumbnail'=>$name,
        ]);

        foreach($request->game_category as $category){
            GameCategory::create([
                'game_id'=>$game->id,
                'category_name'=>$category,
                'category_slug' => Str::slug($category, '-') ?? 'NA',
            ]);
        }
        if($request->game_tag){
            foreach($request->game_tag as $tag){
            GameTag::create([
                'game_id'=>$game->id,
                'tag_name'=>$tag,
                'tag_slug' => Str::slug($tag, '-') ?? 'NA',
            ]);
        }
        }
        return redirect()->route('game.index')->with('message', 'Game Inserted Successfully !');

    }
    //edit----
    public function edit($id)
    {
        $game = Game::findOrfail($id);
        $categories = Category::get();
        $tags = Tag::get();
        return view('backend.game.edit', compact('game', 'categories', 'tags'));
    }
    //update----
    public function update(GameRequest $request , $id){
        $game_id = Game::findOrFail($id);
        $game = Game::where('serial_number', $request->serial_number)->where('serial_number', '!=', $game_id->serial_number)->first();
        if(!$request->serial_number == ''){
            if($game?->serial_number == $request->serial_number){
                return back()->with('error', 'this Position is already exists !!');
            }
        }
        $game_id->update([
            'name'=>$request->game_name,
            'slug' => Str::slug($request->game_name, '-'),
            'link'=>$request->game_url,
            'type'=>$request->game_type,
            'serial_number'=>$request->serial_number,
            'desc'=>$request->description,
            'is_paid'=>$request->game_paid,
            'is_exclusive'=>$request->exclusive_game,
            'is_featured'=>$request->featured_game,
        ]);

        if($request->hasFile('thumbnail')){
            $oldFile = $game_id->thumbnail;
            $oldPath ='uploads/Games/'.$oldFile;
            if($oldPath){
                File::delete(public_path($oldPath));
            }

            $name = uniqid().'_'.'thumbnail_update'.'.'.$request->file('thumbnail')->extension();
            $request->file('thumbnail')->move(public_path('uploads/Games'), $name);
            $game_id->update([
                'thumbnail'=>$name
            ]);
        }
        return redirect()->route('game.index')->with('message', 'Game Updated Successfully !');
    }



    //destroy----

    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->gameCategory()->delete();
        $game->gameTag()->delete();
        if($game->thumbnail){
            $oldFile = $game->thumbnail;
            $oldPath ='uploads/Games/'.$oldFile;
            if($oldPath){
                File::delete(public_path($oldPath));
            }
        }
        $game->delete();
        return redirect()->route('game.index')->with('message', "Game deleted successfully");
    }

    //selectedGameDelete---
    public function selectedGameDelete(Request $request)
    {
        $gameIds = Game::whereIn('id', $request->allGameId)->delete();
        return response()->json(['status'=>true,'message'=>"Selected Game deleted successfully."]);
    }

    //allGamedelete-------
    public function allGamedelete()
    {
        // Game::getQuery()->delete();
        Game::where('type', 2)->delete();
        return back()->with('message', 'All Game Deleted Successfully !! ');
    }

}
