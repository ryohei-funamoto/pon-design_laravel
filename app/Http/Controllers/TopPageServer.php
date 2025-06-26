<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class TopPageServer extends Controller
{
    protected $news_repository;

    public function __construct(NewsRepository $news_repository)
    {
        $this->news_repository = $news_repository;
    }

    public function index()
    {
        $news_list = $this->news_repository->getNewsList(limit: 3);
        return view('index', ['news_list' => $news_list]);
    }
}
