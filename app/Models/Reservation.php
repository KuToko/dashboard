<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 * 
 * @property uuid $id
 * @property uuid $business_id
 * @property uuid $payment_id
 * @property uuid $user_id
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Business $business
 * @property Payment $payment
 * @property User $user
 * @property Collection|ReservationDetail[] $reservation_details
 *
 * @package App\Models
 */
class Reservation extends Model
{
	protected $table = 'reservations';
	public $incrementing = false;

	protected $casts = [
		'id' => 'uuid',
		'business_id' => 'uuid',
		'payment_id' => 'uuid',
		'user_id' => 'uuid',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'business_id',
		'payment_id',
		'user_id',
		'start_date',
		'end_date'
	];

	public function business()
	{
		return $this->belongsTo(Business::class);
	}

	public function payment()
	{
		return $this->belongsTo(Payment::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function reservation_details()
	{
		return $this->hasMany(ReservationDetail::class);
	}
}
