<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameTag extends Model
{
    use HasFactory;
    protected $guarded =[];
     //game
     public function Game()
     {
         return $this->belongsTo(Game::class, 'game_id');
     }

}
