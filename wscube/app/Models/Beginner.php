<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beginner extends Model
{
    use HasFactory;
    protected $table = 'beginner';
    protected $primary_key = 'beginner id';
}
