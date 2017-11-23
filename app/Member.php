<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Member extends Model
{
	use Notifiable;
	use SoftDeletes;

	protected $table    = 'member';
	protected $fillable = [ 'user_id','first_name', 'middle_name','last_name'];



}
