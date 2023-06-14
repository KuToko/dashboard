<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Feedback
 * 
 * @property uuid $id
 * @property uuid $user_id
 * @property uuid $business_id
 * @property string|null $feedbacks
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Business $business
 *
 * @package App\Models
 */
class Feedback extends Model
{
	protected $table = 'feedbacks';
	public $incrementing = false;
	public $keyType = 'uuid';

	protected $casts = [];

	protected $fillable = [
		'user_id',
		'business_id',
		'feedbacks'
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
