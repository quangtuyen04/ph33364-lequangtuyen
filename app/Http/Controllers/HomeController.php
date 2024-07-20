<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News; // Import đúng namespace

class HomeController extends Controller
{
    public function index()
    {
        $featuredNews = News::where('is_featured', true)->take(5)->get();
        $latestNews = News::orderBy('created_at', 'desc')->take(5)->get();
        $mostViewedNews = News::orderBy('views', 'desc')->take(5)->get();

        return view('home', compact('featuredNews', 'latestNews', 'mostViewedNews'));
    }
}

