<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BusinessCategory
 * 
 * @property uuid $id
 * @property uuid $category_id
 * @property uuid $business_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Category $category
 * @property Business $business
 *
 * @package App\Models
 */
class BusinessCategory extends Model
{
	protected $table = 'business_categories';
	public $incrementing = false;

	protected $casts = [];

	protected $fillable = [
		'category_id',
		'business_id'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function business()
	{
		return $this->belongsTo(Business::class);
	}
}
