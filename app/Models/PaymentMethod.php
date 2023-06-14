<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentMethod
 * 
 * @property uuid $id
 * @property string $name
 * @property string $logo
 * @property string $key
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Payment[] $payments
 *
 * @package App\Models
 */
class PaymentMethod extends Model
{
	protected $table = 'payment_methods';
	public $incrementing = false;
	public $keyType = 'uuid';

	protected $casts = [];

	protected $fillable = [
		'name',
		'logo',
		'key'
	];

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}
}
