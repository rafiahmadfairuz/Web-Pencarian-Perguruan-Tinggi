<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fakultas extends Model
{
    /** @use HasFactory<\Database\Factories\FakultasFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    public function perguruanTinggi(): BelongsTo
    {
        return $this->belongsTo(PerguruanTinggi::class);
    }
    public function jurusan(): HasMany
    {
        return $this->hasMany(Jurusan::class);
    }
    public function pendaftar(): HasMany
    {
        return $this->hasMany(Pendaftar::class);
    }
}
