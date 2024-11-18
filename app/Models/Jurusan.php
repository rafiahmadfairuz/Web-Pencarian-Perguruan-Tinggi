<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Jurusan extends Model
{
    /** @use HasFactory<\Database\Factories\JurusanFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    public function perguruanTinggi(): BelongsTo
    {
        return $this->belongsTo(PerguruanTinggi::class);
    }
    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(Fakultas::class);
    }
}
