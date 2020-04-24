<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Goodsarr extends Model{
	protected $table='goodsarr';
	protected $primaryKey = 'goodsarr_id';

	public $timestamps = false;

	protected $guarded = [];
}




?>