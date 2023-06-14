<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 * 
 * @property uuid $id
 * @property string $username
 * @property string $name
 * @property string $email
 * @property string $password
 * @property bool $is_super_admin
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property bool $is_dummy
 * @property int $serial
 * @property string|null $remember_token
 * 
 * @property Collection|Reservation[] $reservations
 * @property Collection|Post[] $posts
 * @property Collection|Token[] $tokens
 * @property Collection|Upvote[] $upvotes
 * @property Collection|Feedback[] $feedback
 * @property Collection|Payment[] $payments
 * @property Collection|Business[] $businesses
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable;

	protected $table = 'users';
	public $incrementing = false;
	public $keyType = 'uuid';

	protected $casts = [
		'is_super_admin' => 'bool',
		'is_dummy' => 'bool',
		'serial' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'username',
		'name',
		'email',
		'password',
		'is_super_admin',
		'is_dummy',
		'serial',
		'remember_token'
	];

	public function reservations()
	{
		return $this->hasMany(Reservation::class);
	}

	public function posts()
	{
		return $this->hasMany(Post::class);
	}

	public function tokens()
	{
		return $this->hasMany(Token::class);
	}

	public function upvotes()
	{
		return $this->hasMany(Upvote::class);
	}

	public function feedback()
	{
		return $this->hasMany(Feedback::class);
	}

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}

	public function businesses()
	{
		return $this->hasMany(Business::class, 'created_by');
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}

	public function canAccessFilament(): bool
	{
		return $this->is_super_admin;
	}
}
