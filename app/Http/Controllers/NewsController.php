<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $news_repository;

    public function __construct(NewsRepository $news_repository)
    {
        $this->news_repository = $news_repository;
    }

    public function index(Request $request)
    {
        $news_list = $this->news_repository->getNewsList(
            limit: 10,
            use_pagination: true,
            keyword: $request->input('keyword'),
            category: $request->input('category')
        );
        return view('news.index', ['news_list' => $news_list]);
    }

    public function detail($id)
    {
        $news = $this->news_repository->getNewsDetail(id: $id);
        $prev_news = $this->news_repository->getPrevNews(news: $news);
        $next_news = $this->news_repository->getNextNews(news: $news);
        $param = [
            'news' => $news,
            'prev_news' => $prev_news,
            'next_news' => $next_news
        ];
        return view('news.detail', $param);
    }
}
