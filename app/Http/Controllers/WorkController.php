<?php

namespace App\Http\Controllers;

use App\Repositories\WorkRepository;
use App\Repositories\WorksCategoryRepository;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    protected $work_repository;
    protected $works_category_repository;

    public function __construct(
        WorkRepository $work_repository,
        WorksCategoryRepository $works_category_repository
    ) {
        $this->work_repository = $work_repository;
        $this->works_category_repository = $works_category_repository;
    }

    public function index(Request $request)
    {
        $work_list = $this->work_repository->getWorkList(
            limit: 9,
            use_pagination: true,
            keyword: $request->input('keyword'),
            category: $request->input('category'),
        );
        $category_list = $this->works_category_repository->getAllCategories();
        $param = [
            'work_list' => $work_list,
            'category_list' => $category_list,
        ];
        return view('works.index', $param);
    }

    public function detail($id)
    {
        $work = $this->work_repository->getWorkDetail(id: $id);
        $prev_work = $this->work_repository->getPrevWork(work: $work);
        $next_work = $this->work_repository->getNextWork(work: $work);
        $param = [
            'work' => $work,
            'prev_work' => $prev_work,
            'next_work' => $next_work,
        ];
        return view('works.detail', $param);
    }
}
