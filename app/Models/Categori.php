<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Categori extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function latestPost()
    {   $category = Categori::find($categori_Id);
        $latestPost = $category->latestPost;
        return $this->hasOne(Post::class)->latest();
    }

}


