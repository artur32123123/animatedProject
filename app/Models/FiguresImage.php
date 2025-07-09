<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiguresImage extends Model
{
    protected $fillable = ['src', 'figure_id'];

    public function figure()
    {
        return $this->belongsTo(Figure::class);
    }
}
