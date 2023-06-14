<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaceSchedule
 * 
 * @property uuid $id
 * @property uuid $space_id
 * @property time without time zone $start_time
 * @property time without time zone $end_time
 * @property string $day
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Space $space
 *
 * @package App\Models
 */
class SpaceSchedule extends Model
{
	protected $table = 'space_schedules';
	public $incrementing = false;

	protected $casts = [
		'id' => 'uuid',
		'space_id' => 'uuid',
		'start_time' => 'time without time zone',
		'end_time' => 'time without time zone'
	];

	protected $fillable = [
		'space_id',
		'start_time',
		'end_time',
		'day'
	];

	public function space()
	{
		return $this->belongsTo(Space::class);
	}
}
