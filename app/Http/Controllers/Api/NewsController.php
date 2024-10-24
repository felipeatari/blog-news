<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use DateTime;
use Illuminate\Http\Request;
use IntlDateFormatter;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        if ($search) {
            $news = News::where('title', 'like', '%' . $search . '%')->get();
        }
        else {
            $news = News::orderBy('id', 'DESC')->paginate(6);
        }

        return response()->json($news);
    }

    public function show(Request $request)
    {
        $news = News::with('comments')->find($request->route('id'));

        $date = new DateTime($news->created_at);
        $formatter = new IntlDateFormatter(
            'pt_BR',
            IntlDateFormatter::LONG,
            IntlDateFormatter::NONE
        );
        $formattedDate = $formatter->format($date);

        $news->date = $formattedDate;

        return response()->json($news);
    }
}
