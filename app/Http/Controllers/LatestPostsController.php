<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use Illuminate\Http\Request;

class LatestPostsController extends Controller
{
    public function index()
    {
        $categories = Categori::with('latestPost')->get();

        return view('latest_posts', compact('categories'));
    }
}
