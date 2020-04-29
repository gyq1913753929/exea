<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cusrorm extends Model
{
    protected $table='custorm';
	protected $primaryKey = 'c_id';

	public $timestamps = false;

	protected $guarded = [];
}
