<?php

namespace App\Repositories;

use App\Models\News;

class NewsRepository
{
    public function getNewsList(
        $limit,
        $use_pagination,
        $keyword = null,
        $category = null
    ) {
        $news_list_query = News::with('news_category')
            ->where('news.is_public', '=', 1)
            ->orderByDesc('news.created_at');

        if (isset($keyword)) {
            $news_list_query = $news_list_query
                ->where(function ($query) use ($keyword) {
                    $query->where('title', 'like', '%' . $keyword . '%')
                        ->orWhere('content', 'like', '%' . $keyword . '%');
                });
        }
        if (isset($category)) {
            $news_list_query = $news_list_query
                ->whereHas('news_category', function ($query) use ($category) {
                    $query->where('name', '=', $category);
                });
        }

        if ($use_pagination) {
            return $news_list_query
                ->paginate($limit);
        } else {
            return $news_list_query
                ->limit($limit)
                ->get();
        }
    }

    public function getNewsDetail($id)
    {
        return News::with('news_category')->find($id);
    }

    public function getPrevNews($news)
    {
        return News::select('news.id', 'news.title')
            ->where('news.created_at', '<=', $news->created_at)
            ->where('news.id', '<>', $news->id)
            ->where('news.is_public', '=', 1)
            ->orderBy('news.created_at', 'desc')
            ->first();
    }

    public function getNextNews($news)
    {
        return News::select('news.id', 'news.title')
            ->where('news.created_at', '>=', $news->created_at)
            ->where('news.id', '<>', $news->id)
            ->where('news.is_public', '=', 1)
            ->orderBy('news.created_at', 'asc')
            ->first();
    }
}
