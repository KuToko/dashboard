<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property uuid $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $key
 * 
 * @property Collection|BusinessCategory[] $business_categories
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';
	public $incrementing = false;
	public $keyType = 'uuid';

	protected $casts = [];

	protected $fillable = [
		'name',
		'key'
	];

	public function business_categories()
	{
		return $this->hasMany(BusinessCategory::class);
	}
}
