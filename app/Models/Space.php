<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Space
 * 
 * @property uuid $id
 * @property uuid $business_id
 * @property string $code
 * @property string $name
 * @property string $photo
 * @property int $capacity
 * @property float $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Business $business
 * @property Collection|SpaceSchedule[] $space_schedules
 * @property Collection|ReservationDetail[] $reservation_details
 *
 * @package App\Models
 */
class Space extends Model
{
	protected $table = 'spaces';
	public $incrementing = false;

	protected $casts = [
		'id' => 'uuid',
		'business_id' => 'uuid',
		'capacity' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'business_id',
		'code',
		'name',
		'photo',
		'capacity',
		'price'
	];

	public function business()
	{
		return $this->belongsTo(Business::class);
	}

	public function space_schedules()
	{
		return $this->hasMany(SpaceSchedule::class);
	}

	public function reservation_details()
	{
		return $this->hasMany(ReservationDetail::class);
	}
}
