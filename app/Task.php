<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'id'
        ,'tsk_titulo'
        ,'tsk_status'
    ];

    protected $table = 'tasks';
}
