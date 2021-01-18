<?php 

namespace App\Models;

use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;
// use Illuminate\Support\Str;

class Produk extends Model{

	use ProdukAttributes, ProdukRelations;

	protected $table = 'produk';

	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime'];

	// protected $primaryKey = 'id';
	// public $incrementing = false;
	// protected static function boot(){
	// 	parent::boot();

	// 	static::creating(function($item){
	// 		$item->id = (string) Str::id();
	// 	});
	// }
}