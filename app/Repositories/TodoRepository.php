<?php

namespace App\Repositories;

use App\Models\Todo;

class TodoRepository extends AbstractRepository implements TodoRepositoryInterface {

	public function __construct(Todo $todo)
	{
		$this->model = $todo;
	}
	
	/**
	 * get content list
	 * @return Array
	 */
	public function getContentList()
	{
		return $this->model->getContentList();
	}
}