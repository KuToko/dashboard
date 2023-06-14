<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Business
 * 
 * @property uuid $id
 * @property uuid|null $claim_by
 * @property uuid|null $created_by
 * @property uuid|null $province_id
 * @property uuid|null $regency_id
 * @property uuid|null $district_id
 * @property uuid|null $village_id
 * @property string|null $username
 * @property string $name
 * @property string $latitude
 * @property string $longitude
 * @property string $address
 * @property string $postal_code
 * @property string|null $avatar
 * @property string|null $description
 * @property Carbon|null $released_at
 * @property float|null $google_maps_rating
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property bool|null $is_monday_open
 * @property time without time zone|null $monday_start_time
 * @property time without time zone|null $monday_end_time
 * @property string|null $monday_notes
 * @property bool|null $is_tuesday_open
 * @property time without time zone|null $tuesday_start_time
 * @property time without time zone|null $tuesday_end_time
 * @property string|null $tuesday_notes
 * @property bool|null $is_wednesday_open
 * @property time without time zone|null $wednesday_start_time
 * @property time without time zone|null $wednesday_end_time
 * @property string|null $wednesday_notes
 * @property bool|null $is_thursday_open
 * @property time without time zone|null $thursday_start_time
 * @property time without time zone|null $thursday_end_time
 * @property string|null $thursday_notes
 * @property bool|null $is_friday_open
 * @property time without time zone|null $friday_start_time
 * @property time without time zone|null $friday_end_time
 * @property string|null $friday_notes
 * @property bool|null $is_saturday_open
 * @property time without time zone|null $saturday_start_time
 * @property time without time zone|null $saturday_end_time
 * @property string|null $saturday_notes
 * @property bool|null $is_sunday_open
 * @property time without time zone|null $sunday_start_time
 * @property time without time zone|null $sunday_end_time
 * @property string|null $sunday_notes
 * @property string|null $place_id
 * @property bool $added_from_system
 * @property string|null $link_theme
 * 
 * @property User|null $user
 * @property Province|null $province
 * @property Regency|null $regency
 * @property District|null $district
 * @property Village|null $village
 * @property Collection|Reservation[] $reservations
 * @property Collection|Post[] $posts
 * @property Collection|Space[] $spaces
 * @property Collection|Upvote[] $upvotes
 * @property Collection|BusinessCategory[] $business_categories
 * @property Collection|Link[] $links
 * @property Collection|Feedback[] $feedback
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class Business extends Model
{
	use SoftDeletes;
	protected $table = 'businesses';
	public $incrementing = false;
	public $keyType = 'uuid';

	protected $casts = [
		'released_at' => 'datetime',
		'google_maps_rating' => 'float',
		'is_monday_open' => 'bool',
		'monday_start_time' => 'datetime',
		'monday_end_time' => 'datetime',
		'is_tuesday_open' => 'bool',
		'tuesday_start_time' => 'datetime',
		'tuesday_end_time' => 'datetime',
		'is_wednesday_open' => 'bool',
		'wednesday_start_time' => 'datetime',
		'wednesday_end_time' => 'datetime',
		'is_thursday_open' => 'bool',
		'thursday_start_time' => 'datetime',
		'thursday_end_time' => 'datetime',
		'is_friday_open' => 'bool',
		'friday_start_time' => 'datetime',
		'friday_end_time' => 'datetime',
		'is_saturday_open' => 'bool',
		'saturday_start_time' => 'datetime',
		'saturday_end_time' => 'datetime',
		'is_sunday_open' => 'bool',
		'sunday_start_time' => 'datetime',
		'sunday_end_time' => 'datetime',
		'added_from_system' => 'bool'
	];

	protected $fillable = [
		'claim_by',
		'created_by',
		'province_id',
		'regency_id',
		'district_id',
		'village_id',
		'username',
		'name',
		'latitude',
		'longitude',
		'address',
		'postal_code',
		'avatar',
		'description',
		'released_at',
		'google_maps_rating',
		'is_monday_open',
		'monday_start_time',
		'monday_end_time',
		'monday_notes',
		'is_tuesday_open',
		'tuesday_start_time',
		'tuesday_end_time',
		'tuesday_notes',
		'is_wednesday_open',
		'wednesday_start_time',
		'wednesday_end_time',
		'wednesday_notes',
		'is_thursday_open',
		'thursday_start_time',
		'thursday_end_time',
		'thursday_notes',
		'is_friday_open',
		'friday_start_time',
		'friday_end_time',
		'friday_notes',
		'is_saturday_open',
		'saturday_start_time',
		'saturday_end_time',
		'saturday_notes',
		'is_sunday_open',
		'sunday_start_time',
		'sunday_end_time',
		'sunday_notes',
		'place_id',
		'added_from_system',
		'link_theme',
		'location'
	];

	protected $appends = [
		'location',
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by');
	}

	public function province()
	{
		return $this->belongsTo(Province::class);
	}

	public function regency()
	{
		return $this->belongsTo(Regency::class);
	}

	public function district()
	{
		return $this->belongsTo(District::class);
	}

	public function village()
	{
		return $this->belongsTo(Village::class);
	}

	public function reservations()
	{
		return $this->hasMany(Reservation::class);
	}

	public function posts()
	{
		return $this->hasMany(Post::class);
	}

	public function spaces()
	{
		return $this->hasMany(Space::class);
	}

	public function upvotes()
	{
		return $this->hasMany(Upvote::class);
	}

	public function business_categories()
	{
		return $this->hasMany(BusinessCategory::class);
	}

	public function links()
	{
		return $this->hasMany(Link::class);
	}

	public function feedbacks()
	{
		return $this->hasMany(Feedback::class);
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}

	public function products()
	{
		return $this->hasMany(Product::class);
	}

	public function claim_by()
	{
		return $this->belongsTo(User::class, 'claim_by', 'id');
	}

	public function created_by()
	{
		return $this->belongsTo(User::class, 'created_by');
	}

	public function getLocationAttribute(): array
	{
		return [
			"lat" => (float)$this->latitude,
			"lng" => (float)$this->longitude,
		];
	}

	public function setLocationAttribute(?array $location): void
	{
		if (is_array($location)) {
			$this->attributes['latitude'] = $location['lat'];
			$this->attributes['longitude'] = $location['lng'];
			unset($this->attributes['location']);
		}
	}

	public static function getLatLngAttributes(): array
	{
		return [
			'lat' => 'latitude',
			'lng' => 'longitude',
		];
	}

	public static function getComputedLocation(): string
	{
		return 'location';
	}
}
