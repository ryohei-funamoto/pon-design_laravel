<?php

namespace App\Repositories;

use App\Models\News;

class NewsRepository {
    public function getNewsList($limit)
    {
        return News::with('news_category')
            ->where('news.is_public', '=', 1)
            ->orderBy('news.created_at', 'desc')
            ->limit($limit)
            ->get();
    }

    public function getNewsDetail($id)
    {
        return News::with('news_category')->find($id);
    }
}
