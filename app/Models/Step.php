<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Step extends Model
{
    use HasFactory;

    protected $table = 'steps';

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'image',
        'task_id',
        'state_id',
        'created_at',
        'deleted_at',
    ];

    public function Task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    public function State(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

}
