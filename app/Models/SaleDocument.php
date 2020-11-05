<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleDocument extends Model {
	protected $connection = 'mysql';
	const TABLE_NAME      = 'sale_documents';
	const STATE_ACTIVE 	  = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		//Table Rows
		'id','ticket','type_payment','amount','subtotal','taxes','products','data_client',
		//Audit
		'flag_active', 'updated_at', 'deleted_at','created_at'
	];

	/**
	 * Casting of attributes
	 *
	 * @var array
	 */
	protected $casts = [
		'data_client' => 'array',
		'products' => 'array'
	];

	public function getFillable() {
		# code...
		return $this->fillable;
	}

	
	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $table = self::TABLE_NAME;    
}
