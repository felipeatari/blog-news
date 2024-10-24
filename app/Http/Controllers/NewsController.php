<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('pages.news-index');
    }

    public function show(News $news)
    {
        return view('pages.news-show', compact('news'));
    }

    public function store()
    {
        return view('pages.news-store');
    }

    public function update(News $news)
    {
        return view('pages.news-update', compact('news'));
    }
}
