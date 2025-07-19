<?php

namespace App\Http\Controllers;

use App\Repositories\WorkRepository;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    protected $work_repository;

    public function __construct(WorkRepository $work_repository)
    {
        $this->work_repository = $work_repository;
    }

    public function index()
    {
        $work_list = $this->work_repository->getWorkList(limit: 9, use_pagination: true);
        return view('works.index', ['work_list' => $work_list]);
    }
}
