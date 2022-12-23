<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cgy extends Model
{
    use HasFactory;
    protected $date = ['enabled_at'];
    protected $fillable = ['title', 'desc', 'enabled'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function cgy()
    {
        return $this->hasOne(Cgy::class);
    }

}