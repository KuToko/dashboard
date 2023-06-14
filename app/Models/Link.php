<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Link
 * 
 * @property uuid $id
 * @property uuid $business_id
 * @property string $name
 * @property string $link
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Business $business
 *
 * @package App\Models
 */
class Link extends Model
{
	protected $table = 'links';
	public $incrementing = false;

	protected $casts = [
		'id' => 'uuid',
		'business_id' => 'uuid'
	];

	protected $fillable = [
		'business_id',
		'name',
		'link'
	];

	public function business()
	{
		return $this->belongsTo(Business::class);
	}
}
