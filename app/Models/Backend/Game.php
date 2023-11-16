<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function gameCategory()
    {
        return $this->belongsTo(GameCategory::class, 'id', 'game_id');
    }

    public function gameTag()
    {
        return $this->belongsTo(GameTag::class, 'id', 'game_id');
    }
    public function CustomDescription()
    {
        return $this->belongsTo(CustomGameDescription::class, 'custom_description');
    }
}
