<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'active',
        'due_date',
        'todo_id',
        'state_id',
    ];

    public function todo(){
        return belongsTo(Todo::class,'todo_id','id');
    }

    public function state(){
        return belongsTo(State::class,'state_id','id');
    }

    public function steps(){
        return hasMany(Step::class,'task_id','id');
    }

    public function users(){
        return $this->belongsToMany(User::class)
            ->using(TaskUser::class);
    }
}
