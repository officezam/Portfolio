<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{

	protected $table = 'slider';

	public function setTable($table)
	{
		$this->table = $table;
		return $this;
	}
}
