<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->json()->all();

        Comment::create([
            'news_id' => $data['news_id'],
            'author' => $data['nome'],
            'comment' =>  $data['mensagem'],
        ]);

        return response()->json(['api' => true]);
    }
}
