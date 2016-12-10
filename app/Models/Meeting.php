<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Meeting
 *
 * 
 *
 * @package App\Models
 */
class Meeting extends Model
{
    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'held_at'
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'location',
        'held_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function participants()
    {
        return $this->belongsToMany(User::class, 'meeting_participants', 'meeting_id', 'user_id')
            ->withPivot(['is_attending']);
    }
}
