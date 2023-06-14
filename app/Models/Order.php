<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property uuid $id
 * @property uuid $business_id
 * @property uuid $payment_id
 * @property uuid $user_id
 * @property string $status
 * @property int $total_price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Business $business
 * @property Payment $payment
 * @property User $user
 * @property Collection|OrderDetail[] $order_details
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';
	public $incrementing = false;
	public $keyType = 'uuid';

	protected $casts = [
		'total_price' => 'float'
	];

	protected $fillable = [
		'business_id',
		'payment_id',
		'user_id',
		'status',
		'total_price'
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

	public function order_details()
	{
		return $this->hasMany(OrderDetail::class);
	}
}
