<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;
use App\Repositories\WorkRepository;
use Illuminate\Http\Request;

class TopPageServer extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(
        NewsRepository $news_repository,
        WorkRepository $work_repository
    ) {
        $news_list = $news_repository->getNewsList(limit: 3, use_pagination: false);
        $work_list = $work_repository->getWorkList(limit: 3, use_pagination: false);
        $param = [
            'news_list' => $news_list,
            'work_list' => $work_list,
        ];
        return view('index', $param);
    }
}
