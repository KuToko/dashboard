<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderDetail
 * 
 * @property uuid $id
 * @property uuid $product_id
 * @property uuid $order_id
 * @property int $quantity
 * @property int $price
 * @property int $total_price
 * 
 * @property Product $product
 * @property Order $order
 *
 * @package App\Models
 */
class OrderDetail extends Model
{
	protected $table = 'order_details';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'uuid',
		'product_id' => 'uuid',
		'order_id' => 'uuid',
		'quantity' => 'int',
		'price' => 'int',
		'total_price' => 'int'
	];

	protected $fillable = [
		'product_id',
		'order_id',
		'quantity',
		'price',
		'total_price'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function order()
	{
		return $this->belongsTo(Order::class);
	}
}
