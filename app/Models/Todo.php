<?php

namespace App\Models;

class Todo extends AbstractModel
{
	/**
	 * get content list
	 * @return array
	 */
    public function getContentList()
    {
    	return $this->select('content')->get()->pluck('content')->toArray();
    }
}
