<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Categori;

class PostController extends Controller
{public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        // Optionally, you can return a response indicating the deletion was successful.
        return response()->json(['message' => 'Post deleted successfully']);
    }
    public function index()
    {
        $posts = Post::with('category')->get();

        return view('posts', compact('posts'));
    }
    public function getPosts($id)
    {
        $category = Categori::findOrFail($id);

        $posts = $category->posts;

        return view('category.posts', compact('category', 'posts'));
    }

}
