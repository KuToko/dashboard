<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Province
 * 
 * @property uuid $id
 * @property string $name
 * 
 * @property Collection|Business[] $businesses
 *
 * @package App\Models
 */
class Province extends Model
{
	protected $table = 'provinces';
	public $incrementing = false;
	public $keyType = 'uuid';
	public $timestamps = false;

	protected $casts = [];

	protected $fillable = [
		'name'
	];

	public function businesses()
	{
		return $this->hasMany(Business::class);
	}

	public function regencies()
	{
		return $this->hasMany(Regency::class);
	}
}
