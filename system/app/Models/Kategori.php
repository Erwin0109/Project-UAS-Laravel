<?php 

namespace App\Models;

use App\Models\Traits\Attributes\KategoriAttributes;

class Kategori extends Model{

	use KategoriAttributes;

	protected $table = 'kategori';
}