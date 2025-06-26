<?php

namespace App\Repositories;

use App\Models\News;

class NewsRepository {
    public function getNewsList($limit, $use_pagination)
    {
        $news_list_query = News::with('news_category')
            ->where('news.is_public', '=', 1)
            ->orderBy('news.created_at', 'desc');

        if ($use_pagination) {
            return $news_list_query->paginate($limit);
        } else {
            return $news_list_query->limit($limit)->get();
        }
    }

    public function getNewsDetail($id)
    {
        return News::with('news_category')->find($id);
    }
}
