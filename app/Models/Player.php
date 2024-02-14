<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players'; 
    protected $fillable = ['Name', 'Team', 'Jersey_Number', 'Position', 'Date_of_birth', 'Nationality'];
}

