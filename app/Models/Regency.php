<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Regency
 * 
 * @property uuid $id
 * @property uuid $province_id
 * @property string $name
 * 
 * @property Collection|Business[] $businesses
 *
 * @package App\Models
 */
class Regency extends Model
{
	protected $table = 'regencies';
	public $incrementing = false;
	public $keyType = 'uuid';
	public $timestamps = false;

	protected $casts = [];

	protected $fillable = [
		'province_id',
		'name'
	];

	public function businesses()
	{
		return $this->hasMany(Business::class);
	}

	public function province()
	{
		return $this->belongsTo(Province::class);
	}

	public function districts()
	{
		return $this->hasMany(District::class);
	}
}
