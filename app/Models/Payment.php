<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 * 
 * @property uuid $id
 * @property uuid $user_id
 * @property uuid $payment_method_id
 * @property bool $is_paid
 * @property Carbon $expired_at
 * @property string $payment_url
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property PaymentMethod $payment_method
 * @property Collection|Reservation[] $reservations
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class Payment extends Model
{
	protected $table = 'payments';
	public $incrementing = false;
	public $keyType = 'uuid';

	protected $casts = [
		'is_paid' => 'bool',
		'expired_at' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'payment_method_id',
		'is_paid',
		'expired_at',
		'payment_url',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function payment_method()
	{
		return $this->belongsTo(PaymentMethod::class);
	}

	public function reservations()
	{
		return $this->hasMany(Reservation::class);
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}
}
