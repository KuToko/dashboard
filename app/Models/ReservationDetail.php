<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationDetail
 * 
 * @property uuid $id
 * @property uuid $reservation_id
 * @property uuid $space_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Reservation $reservation
 * @property Space $space
 *
 * @package App\Models
 */
class ReservationDetail extends Model
{
	protected $table = 'reservation_details';
	public $incrementing = false;

	protected $casts = [
		'id' => 'uuid',
		'reservation_id' => 'uuid',
		'space_id' => 'uuid'
	];

	protected $fillable = [
		'reservation_id',
		'space_id'
	];

	public function reservation()
	{
		return $this->belongsTo(Reservation::class);
	}

	public function space()
	{
		return $this->belongsTo(Space::class);
	}
}
