<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * 
 * @property uuid $id
 * @property uuid $user_id
 * @property uuid $business_id
 * @property string|null $content
 * @property string|null $media
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Business $business
 *
 * @package App\Models
 */
class Post extends Model
{
	protected $table = 'posts';
	public $incrementing = false;

	protected $casts = [];

	protected $fillable = [
		'user_id',
		'business_id',
		'content',
		'media'
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
