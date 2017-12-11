<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TodoRepositoryInterface;

class TodoController extends AbstractController
{
	/**
	 * __construct
	 */
	public function __construct(TodoRepositoryInterface $todoRepository)
	{
		parent::__construct();

		$this->todoRepository = $todoRepository;
	}

	/**
	 * index action
	 * @return JSON
	 */
    public function index()
    {
    	return $this->todoRepository->getContentList();
    }
}
