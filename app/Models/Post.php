<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

     public function category(){
        return $this->belongsTo(Categori::class);
      }
      public function getTotalPostsByCategory($categoryId)
{
    return $this->where('category_id', $categoryId)->count();
}
public static function getSoftDeletedPosts()
{ $softDeletedPosts = Post::getSoftDeletedPosts();

    return static::onlyTrashed()->get();
}





}
