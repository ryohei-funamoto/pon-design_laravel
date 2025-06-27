<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class TopPageServer extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(NewsRepository $news_repository)
    {
        $news_list = $news_repository->getNewsList(limit: 3, use_pagination: false);
        $param = [
            'news_list' => $news_list
        ];
        return view('index', $param);
    }
}
