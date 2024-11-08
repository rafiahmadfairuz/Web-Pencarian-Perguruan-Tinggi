<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Jurusan extends Model
{
    /** @use HasFactory<\Database\Factories\JurusanFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    public function perguruanTinggi(): BelongsToMany
    {
        return $this->belongsToMany(PerguruanTinggi::class, 'perguruan_tinggi_fakultas_jurusan');
    }
    public function jurusan(): BelongsToMany
    {
        return $this->belongsToMany(Jurusan::class, 'perguruan_tinggi_fakultas_jurusan');
    }
}
