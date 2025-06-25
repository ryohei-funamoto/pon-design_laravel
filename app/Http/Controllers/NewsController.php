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

    public function index()
    {
        $news_list = $this->news_repository->getNewsList(limit: 10);
        return view('news.index', ['news_list' => $news_list]);
    }
}
