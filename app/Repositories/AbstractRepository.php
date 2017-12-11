<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository {

	/**
	 * $model
	 * @var Object
	 */
	protected $model;

	/**
	 * constructor
	 * @param Model $model
	 */
	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	/**
	 * get all record
	 * @return Array
	 */
	public function getAll()
	{
		return $this->model->get();
	}

	/**
	 * find by id
	 * @param  integer $id
	 * @return Object
	 */
	public function findById($id)
	{
		return $this->find($id);
	}
}