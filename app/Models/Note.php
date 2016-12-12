<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Note
 *
 * Notes which are attached to any existing models for administrative
 * notes on the topic being administrated.
 *
 * @package App\Models
 */
class Note extends Model
{
    /**
     * Properties of the model which are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
    ];

    /**
     * The user who initially wrote the note.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The polymorphic relation to the model the note should be attached to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function link()
    {
        return $this->morphTo();
    }
}
