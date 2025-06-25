<?php

namespace App\Repositories;

use App\Models\News;

class NewsRepository {
    public function getNewsList($limit)
    {
        return News::select('news.created_at', 'news_categories.name as category_name', 'news.title')
            ->leftJoin('news_categories', 'news.news_category_id', '=', 'news_categories.id')
            ->orderBy('news.created_at', 'desc')
            ->limit($limit)
            ->get();
    }
}
