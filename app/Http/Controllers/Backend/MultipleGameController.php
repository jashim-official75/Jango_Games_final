<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\CustomGameDescription;
use App\Models\Backend\Game;
use App\Models\Backend\GameCategory;
use App\Models\Backend\GameTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class MultipleGameController extends Controller
{

    //custom_description----
    public function custom_description()
    {
        $desc = CustomGameDescription::latest()->first();
        return view('backend.game.custom_description', compact('desc'));
    }
    //----custom_description_store
    public function custom_description_store(Request $request)
    {
        $request->validate(['custom_description' => 'required']);
        $count = CustomGameDescription::count();
        if($count == 0){
            CustomGameDescription::create(['custom_description' => $request->custom_description]);
            return back()->with('message', 'Custom Description Inserted !! ');
        }
        $desc_id = CustomGameDescription::latest()->first();
        CustomGameDescription::find($desc_id->id)->update(['custom_description' => $request->custom_description]);
        return back()->with('message', 'Custom Description Updated !! ');

        
    }

    //multiple game create---
    public function create()
    {
        $desc = CustomGameDescription::latest()->first();
        return view('backend.game.multipleGame', compact('desc'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'game_type' => 'required',
            'api_url' => 'required',
        ]);
         $count_game = 0;

        if ($request->game_type == 1) {
            $api_url = $request->api_url;
            $post_data = Http::get($api_url);
            $datas = json_decode($post_data->body());
            foreach ($datas as $data) {
                $data = (array)$data;
                $same_game = Game::where('name', $data['Title'])->first();
                if($same_game?->name ==  $data['Title']){
                    continue;
                }
                $game_id = Game::insertGetId([
                    'name' => $data['Title'],
                    'slug' => Str::slug($data['Title'], '-'),
                    'link' => $data['Url'],
                    'type' => $request->game_type,
                    'desc' => $data['Description'],
                    'video_url' => $data['TubiaUrl'] ?? '',
                    'image_link' => $data['Asset'][1] ?? $data['Asset'][0],

                    //new add---
                    'custom_description' => $request->custom_description,
                    'game_type' => $data['Type'] ?? '',
                    'game_sub_type' => $data['SubType'] ?? '',
                    'game_Mobile' => $data['Mobile'] ?? '',
                    'mobile_mode' => $data['MobileMode'] ?? '',
                    'Https' => $data['Https'] ?? '',
                    //end new ---
                    
                    'created_at'=>now()
                ]);
                foreach ($data['Category'] as $key => $category) {
                    GameCategory::insert([
                        'game_id' => $game_id,
                        'category_name' => $category ?? 'NA',
                        'category_slug' => Str::slug($category, '-') ?? 'NA',
                        'created_at' => now(),
                    ]);
                }

                foreach ($data['Tag'] as $key => $tag) {
                    GameTag::insert([
                        'game_id' => $game_id,
                        'tag_name' => $tag ?? 'NA',
                        'tag_slug' => Str::slug($tag, '-') ?? 'NA',
                        'created_at' => now(),
                    ]);
                }
                if($game_id){
                    $count_game++;
                }
               
                
            }
        }

        if ($request->game_type == 2) {
            $api_url = $request->api_url;
            $post_data = Http::get($api_url);
            $datas = json_decode($post_data->body());
            foreach ($datas as $data) {
                $data = (array)$data;
                $same_game = Game::where('name', $data['title'])->first();
                if($same_game?->name ==  $data['title']){
                    continue;
                }
                $game_id = Game::insertGetId([
                    'name' => $data['title'],
                    'slug' => Str::slug($data['title'], '-'),
                    'link' => $data['url'],
                    'type' => $request->game_type,
                    'desc' => $data['description'],
                    'image_link' => $data['thumb'],
                    'custom_description' => $request->custom_description,
                    'created_at'=>now()
                ]);
                GameCategory::insert([
                    'game_id' => $game_id,
                    'category_name' => $data['category'] ?? 'NA',
                    'category_slug' => Str::slug($data['category'], '-') ?? 'na',
                    'created_at' => now(),
                ]);

                // GameTag::insert([
                //     'game_id' => $game_id,
                //     'tag_name' => $data['tags'] ?? 'NA',
                //     'tag_slug' => Str::slug($data['tags'], '-') ?? 'NA',
                //     'created_at' => now(),
                // ]);

                $tagsArray = explode(",", $data['tags']);
                foreach ($tagsArray as $tag) {
                    GameTag::insert([
                        'game_id' => $game_id,
                        'tag_name' => $tag ?? 'NA',
                        'tag_slug' => Str::slug($tag, '-') ?? 'NA',
                        'created_at' => now(),
                    ]);
                }

                if($game_id){
                    $count_game++;
                }
            }
        }

        if ($request->game_type == 3) {
            $api_url = $request->api_url;
            $post_data = Http::get($api_url);
            $datas = json_decode($post_data->body());

            foreach ($datas->items as $data) {
                $data = (array)$data;
                $same_game = Game::where('name', $data['title'])->first();
                if($same_game?->name ==  $data['title']){
                    continue;
                }
                $game_id = Game::insertGetId([
                    'name' => $data['title'],
                    'slug' => Str::slug($data['title'], '-'),
                    'link' => $data['url'],
                    'type' => $request->game_type,
                    'desc' => $data['description'],
                    'image_link' => $data['image'],

                    //new add---
                    'custom_description' => $request->custom_description,
                    'orientation' => $data['orientation'] ?? '',
                    'game_published' => $data['date_published'] ?? '',
                    'game_modified' => $data['date_modified'] ?? '',
                    'banner_image' => $data['banner_image'] ?? '',
                    //end new ---
                    'created_at'=>now()
                ]);

                GameCategory::insert([
                    'game_id' => $game_id,
                    'category_name' => $data['category'] ?? 'NA',
                    'category_slug' => Str::slug($data['category'], '-') ?? 'NA',
                    'created_at' => now(),
                ]);
                if($game_id){
                    $count_game++;
                }
            }
        }

        if ($request->game_type == 4) {
            $api_url = $request->api_url;
            $post_data = Http::get($api_url);
            $datas = json_decode($post_data->body());
            foreach ($datas as $data) {
                $data = (array)$data;
                $same_game = Game::where('name', $data['title'])->first();
                if($same_game?->name ==  $data['title']){
                    continue;
                }
                $game_id = Game::insertGetId([
                    'name' => $data['title'],
                    'slug' => Str::slug($data['title'], '-'),
                    'link' => $data['url'],
                    'type' => $request->game_type,
                    'is_featured' => 1,
                    'desc' => $data['description'],
                    'image_link' => $data['thumb'],
                    'custom_description' => $request->custom_description,
                    'created_at'=>now()
                ]);
                GameCategory::insert([
                    'game_id' => $game_id,
                    'category_name' => $data['category'] ?? 'NA',
                    'category_slug' => Str::slug($data['category'], '-') ?? 'na',
                    'created_at' => now(),
                ]);

                 $tagsArray = explode(",", $data['tags']);
                foreach ($tagsArray as $tag) {
                    GameTag::insert([
                        'game_id' => $game_id,
                        'tag_name' => $tag ?? 'NA',
                        'tag_slug' => Str::slug($tag, '-') ?? 'NA',
                        'created_at' => now(),
                    ]);
                }
                
                if($game_id){
                    $count_game++;
                }
            }
        }


        return redirect()->route('game.index')->with('message', $count_game.' Games Inserted Successfully !');
    }
}
