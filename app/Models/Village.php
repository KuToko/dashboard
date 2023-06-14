<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Village
 * 
 * @property uuid $id
 * @property uuid $district_id
 * @property string $name
 * 
 * @property Collection|Business[] $businesses
 *
 * @package App\Models
 */
class Village extends Model
{
	protected $table = 'villages';
	public $incrementing = false;
	public $keyType = 'uuid';
	public $timestamps = false;

	protected $casts = [];

	protected $fillable = [
		'district_id',
		'name'
	];

	public function businesses()
	{
		return $this->hasMany(Business::class);
	}

	public function district()
	{
		return $this->belongsTo(District::class);
	}
}
