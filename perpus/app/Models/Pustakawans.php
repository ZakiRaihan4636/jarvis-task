<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pustakawans extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'gender', 'ship'];
}
