<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App\Models
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $forum_name
 * @property string $mta_name
 * @property string $time_zone¡
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class User extends Authenticatable
{
    use Notifiable, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'forum_name', 'mta_name', 'time_zone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The properties of the model of which changes should be logged.
     *
     * @var array
     */
    protected static $logAttributes = [
        'name', 'email', 'forum_name', 'mta_name', 'time_zone'
    ];

    /**
     * When updating a user's password, hash the password before
     * persisting to the database.
     *
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
