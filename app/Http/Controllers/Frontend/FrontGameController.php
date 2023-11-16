<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use App\Models\Backend\Game;
use App\Models\Backend\GameCategory;
use App\Models\Backend\GameTag;
use App\Models\Backend\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontGameController extends Controller
{
    public function __construct()
    {
        $categories = Category::orderBy('id', 'asc')->get();
        $tags = Tag::take(54)->get();
        View::share([
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    //---all_games
    public function all_games()
    {
        $games = Game::orderBy('serial_number', 'desc')->paginate(120);
        return view('frontend.game.all_game', [
            'games'=>$games,
        ]);
    }
    //--all_category
    public function all_category()
    {
        $categories = Category::get();
        return view('frontend.game.all_category', compact('categories'));
    }

    //---all_tag
    public function all_tag()
    {
        $tags = Tag::get();
        return view('frontend.game.all_tag', compact('tags'));
    }
    //----category based game
    public function categoryGame($slug)
    {
        $single_category = Category::where('slug', $slug)->first();
        $game_categories = GameCategory::where('category_slug', $slug)->with('Game')->inRandomOrder()->paginate(120);
        return view('frontend.game.category_based_game', compact('game_categories', 'slug', 'single_category'));
    }
    //----tag based game
    public function tagGame($slug)
    {
        $single_tag = Tag::where('slug', $slug)->first();
        $game_tags = GameTag::where('tag_slug', $slug)->with('Game')->paginate(120);
        return view('frontend.game.tag_game', compact('game_tags', 'slug', 'single_tag'));
    }
    //gamePlay
    public function gamePlay($slug)
    {
        $single_game = Game::where('slug', $slug)->with('gameCategory')->first();
        $game = Game::where('slug', $slug)->with('gameCategory')->first();
        $category = GameCategory::where('game_id', $single_game->id)->first();
        $game_same_categories = GameCategory::where('game_id', $single_game->id)->get();
        $game_same_tags = GameTag::where('game_id', $single_game->id)->get();
        $related_games = GameCategory::where('category_name', $category->category_name)->with('Game')->inRandomOrder()->get();
        $games = Game::orderBy('serial_number', 'desc')->take(200)->inRandomOrder()->get();
        return view('frontend.game.gamePlay', compact('single_game', 'game', 'related_games', 'games', 'category', 'game_same_categories', 'game_same_tags'));
    }

     //best_games
     public function best_games()
     {
        $best_games = Game::where('is_exclusive', 1)->with('gameCategory')->paginate(120);
         return view('frontend.game.best_games', compact('best_games'));
     }

     //featured_games---
     public function featured_games()
     {
        $featured_games = Game::where('is_featured', 1)->latest()->with('gameCategory')->paginate(120);
         return view('frontend.game.featured_game', compact('featured_games'));
     }
}
