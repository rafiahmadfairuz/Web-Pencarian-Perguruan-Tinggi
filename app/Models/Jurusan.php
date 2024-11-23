<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jurusan extends Model
{
    /** @use HasFactory<\Database\Factories\JurusanFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    public function perguruanTinggi(): BelongsTo
    {
        return $this->belongsTo(PerguruanTinggi::class, 'perguruan_tinggi_id');
    }
    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(Fakultas::class);
    }
    public function pendaftar(): HasMany
    {
        return $this->hasMany(Pendaftar::class);
    }
}
