<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Crud extends Model
{
    use HasFactory;
    protected $fillable = [
        'fristname',
        'lastname',
        'age'
    ];
}
