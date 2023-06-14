<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Token
 * 
 * @property uuid $id
 * @property uuid $user_id
 * @property string $token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon $expired_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Token extends Model
{
	protected $table = 'tokens';
	public $incrementing = false;

	protected $casts = [
		'id' => 'uuid',
		'user_id' => 'uuid',
		'expired_at' => 'datetime'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'user_id',
		'token',
		'expired_at'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
