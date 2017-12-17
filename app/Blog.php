<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $table = 'blog';

	public function setTable($table)
	{
		$this->table = $table;
		return $this;
	}
}
