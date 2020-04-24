<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Brandar extends Model{
	protected $table='Brandar';
	protected $primaryKey = 'brandar_cid';

	public $timestamps = false;

	protected $guarded = [];
}




?>