<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Banner;
use App\Models\Backend\Category;
use App\Models\Backend\Game;
use App\Models\Backend\GameCategory;
use App\Models\Backend\GameTag;
use App\Models\Backend\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
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
    //index
    public function index(Request $request)
    {
        $games = Game::orderBy('serial_number', 'desc')->take(200)->inRandomOrder()->get();
        $left_banners = Banner::where('position', 0)->get();
        $right_banners = Banner::where('position', 1)->get();
        $featured_games = Game::where('is_featured', 1)->with('gameCategory')->take(50)->get();
        $recommended_games = Game::where('is_paid', 1)->with('gameCategory')->take(50)->get();
        $best_games = Game::where('is_exclusive', 1)->with('gameCategory')->take(50)->get();

        //--action category based game show ----
        $action_category = Category::where('slug', 'action')->first();
        $action_categories = GameCategory::where('category_slug', $action_category->slug)->with('Game')->take(40)->get();
        //--Adventure category based game show ----
        $adventure_category = Category::where('slug', 'adventure')->first();
        $adventure_categories = GameCategory::where('category_slug', $adventure_category->slug)->with('Game')->take(100)->get();
        //--Arcade category based game show ----
        $arcade_category = Category::where('slug', 'arcade')->first();
        $arcade_categories = GameCategory::where('category_slug', $arcade_category->slug)->with('Game')->take(40)->get();
        //--Racing category based game show ----
        $racing_category = Category::where('slug', 'racing')->first();
        $racing_categories = GameCategory::where('category_slug', $racing_category->slug)->with('Game')->take(100)->get();
        //--Multiplayer category based game show ----
        $multiplayer_category = Category::where('slug', 'multiplayer')->first();
        $multiplayer_categories = GameCategory::where('category_slug', $multiplayer_category->slug)->with('Game')->take(40)->get();
        //--Shooting category based game show ----
        $shooting_category = Category::where('slug', 'shooting')->first();
        $shooting_categories = GameCategory::where('category_slug', $shooting_category->slug)->with('Game')->take(100)->get();
        //--Beauty category based game show ----
        $beauty_category = Category::where('slug', 'beauty')->first();
        $beauty_categories = GameCategory::where('category_slug', $beauty_category->slug)->with('Game')->take(40)->get();
        //--Sports category based game show ----
        $sports_category = Category::where('slug', 'sports')->first();
        $sports_categories = GameCategory::where('category_slug', $sports_category->slug)->with('Game')->take(100)->get();

        return view('frontend.index', [
            'games' => $games,
            'left_banners' => $left_banners,
            'right_banners' => $right_banners,
            'featured_games' => $featured_games,
            'recommended_games' => $recommended_games,
            'best_games' => $best_games,
            'action_category' => $action_category,
            'adventure_category' => $adventure_category,
            'arcade_category' => $arcade_category,
            'racing_category' => $racing_category,
            'multiplayer_category' => $multiplayer_category,
            'shooting_category' => $shooting_category,
            'beauty_category' => $beauty_category,
            'sports_category' => $sports_category,
            'action_categories' => $action_categories,
            'adventure_categories' => $adventure_categories,
            'arcade_categories' => $arcade_categories,
            'racing_categories' => $racing_categories,
            'multiplayer_categories' => $multiplayer_categories,
            'shooting_categories' => $shooting_categories,
            'beauty_categories' => $beauty_categories,
            'sports_categories' => $sports_categories,
        ]);
    }

    // about--
    public function about()
    {
        return view('frontend.about');
    }
    //contact
    public function contact()
    {
        return view('frontend.contact');
    }

    // privacy--
    public function privacy()
    {
        return view('frontend.privacy');
    }

    //termsCondition
    public function termsCondition()
    {
        return view('frontend.terms_and_condition');
    }
}
