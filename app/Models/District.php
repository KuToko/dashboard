<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class District
 * 
 * @property uuid $id
 * @property uuid $regency_id
 * @property string $name
 * 
 * @property Collection|Business[] $businesses
 *
 * @package App\Models
 */
class District extends Model
{
	protected $table = 'districts';
	public $incrementing = false;
	public $keyType = 'uuid';
	public $timestamps = false;

	protected $casts = [];

	protected $fillable = [
		'regency_id',
		'name'
	];

	public function businesses()
	{
		return $this->hasMany(Business::class);
	}

	public function regency()
	{
		return $this->belongsTo(Regency::class);
	}

	public function villages()
	{
		return $this->hasMany(Village::class);
	}
}
