<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{
    use HasFactory;
        
    protected $fillable = [
        'movie_id',
        'hall_id',
        'start_show_time',
        'end_show_time'
    ];

    public function movie_id()
    {
        return $this->belongsTo('App\Models\Movie');
    }
    
    public function hall()
    {
        return $this->belongsTo('App\Models\Hall');
    }

}
