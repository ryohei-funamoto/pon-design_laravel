<?php

namespace App\Repositories;

use App\Models\Work;

class WorkRepository
{
    public function getWorkList($limit, $use_pagination = false)
    {
        $work_list_query = Work::with('works_category')
            ->where('works.is_public', '=', 1)
            ->orderByDesc('works.created_at');

        if ($use_pagination) {
            return $work_list_query
                ->paginate($limit);
        } else {
            return $work_list_query
                ->limit($limit)
                ->get();
        }
    }
}
