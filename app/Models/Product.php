<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property uuid $id
 * @property uuid $business_id
 * @property string $name
 * @property float|null $price
 * @property string|null $description
 * @property string|null $product_image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|OrderDetail[] $order_details
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';
	public $incrementing = false;
	public $keyType = 'uuid';

	protected $casts = [
		'price' => 'float'
	];

	protected $fillable = [
		'business_id',
		'name',
		'price',
		'description',
		'product_image'
	];

	public function order_details()
	{
		return $this->hasMany(OrderDetail::class);
	}

	public function business()
	{
		return $this->belongsTo(Business::class);
	}
}
