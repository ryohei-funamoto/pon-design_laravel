<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Repositories\NewsCategoryRepository;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $news_repository;
    protected $news_category_repository;

    public function __construct(
        NewsRepository $news_repository,
        NewsCategoryRepository $news_category_repository
    ) {
        $this->news_repository = $news_repository;
        $this->news_category_repository = $news_category_repository;
    }

    public function index(Request $request)
    {
        $news_list = $this->news_repository->getNewsList(
            limit: 10,
            use_pagination: true,
            keyword: $request->input('keyword'),
            category: $request->input('category')
        );
        $category_list = $this->news_category_repository->getAllCategories();
        $param = [
            'news_list' => $news_list,
            'category_list' => $category_list,
        ];
        return view('news.index', $param);
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
