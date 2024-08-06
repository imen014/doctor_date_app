<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional_experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'begin_date',
        'end_date',
        'organization',
        'task1',
        'task2',
        'task3',
        'description'

    ];
}
