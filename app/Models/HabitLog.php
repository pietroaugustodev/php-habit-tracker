<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HabitLog extends Model
{
    protected $fillable = [
        'habit_id',
        'user_id',
        'completed_at'
    ];

    public function habit(): BelongsTo {
        return $this->BelongsTo(Habit::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}