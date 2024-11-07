<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    /** @use HasFactory<\Database\Factories\FakultasFactory> */
    use HasFactory;
    protected $guarded = ['id'];
}
