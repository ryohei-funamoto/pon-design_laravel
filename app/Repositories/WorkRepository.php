<?php

namespace App\Repositories;

use App\Models\Work;

class WorkRepository
{
    public function getWorkList(
        $limit,
        $use_pagination,
        $keyword = null,
        $category = null
    ) {
        $work_list_query = Work::with('works_category')
            ->where('works.is_public', '=', 1)
            ->orderByDesc('works.created_at');

        if (isset($keyword)) {
            $work_list_query = $work_list_query
                ->where(function ($query) use ($keyword) {
                    $query->where('title', 'like', '%' . $keyword . '%')
                        ->orWhere('content', 'like', '%' . $keyword . '%');
                });
        }
        if (isset($category)) {
            $work_list_query = $work_list_query
                ->whereHas('works_category', function ($query) use ($category) {
                    $query->where('name', '=', $category);
                });
        }

        if ($use_pagination) {
            return $work_list_query
                ->paginate($limit);
        } else {
            return $work_list_query
                ->limit($limit)
                ->get();
        }
    }

    public function getWorkDetail($id)
    {
        return Work::with('works_category')->find($id);
    }

    public function getPrevWork($work)
    {
        return Work::with('works_category')
            ->where('works.created_at', '<=', $work->created_at)
            ->where('works.id', '<>', $work->id)
            ->where('works.is_public', '=', 1)
            ->orderByDesc('works.created_at')
            ->first();
    }

    public function getNextWork($work)
    {
        return Work::with('works_category')
            ->where('works.created_at', '>=', $work->created_at)
            ->where('works.id', '<>', $work->id)
            ->where('works.is_public', '=', 1)
            ->orderBy('works.created_at', 'asc')
            ->first();
    }
}
