<?php

namespace App\Models;

use App\Models\Cgy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $date = ['enabled_at'];

    public function cgy()
    {
        return $this->belongsTo(Cgy::class);
    }

}