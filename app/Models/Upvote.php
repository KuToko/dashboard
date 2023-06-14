<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Upvote
 * 
 * @property uuid $id
 * @property uuid|null $user_id
 * @property uuid $business_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User|null $user
 * @property Business $business
 *
 * @package App\Models
 */
class Upvote extends Model
{
	protected $table = 'upvotes';
	public $incrementing = false;
	public $keyType = 'uuid';

	protected $casts = [];

	protected $fillable = [
		'user_id',
		'business_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function business()
	{
		return $this->belongsTo(Business::class);
	}
}
