<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'user_id',
        'state_id'
    ];

    public function user(){
        return belongsTo(User::class,'user_id','id');
    }

    public function tasks(){
        return hasMany(Task::class,'todo_id','id');
    }

    public function state(){
        return belongsTo(State::class,'state_id','id');
    }
}
