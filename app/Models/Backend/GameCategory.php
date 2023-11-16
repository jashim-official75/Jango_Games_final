<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameCategory extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    //game
    public function Game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }
}
