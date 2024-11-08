<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Fakultas extends Model
{
    /** @use HasFactory<\Database\Factories\FakultasFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    public function perguruanTinggi(): BelongsToMany
    {
        return $this->belongsToMany(PerguruanTinggi::class, 'perguruan_tinggi_fakultas_jurusan');
    }
    public function fakultas(): BelongsToMany
    {
        return $this->belongsToMany(Fakultas::class, 'perguruan_tinggi_fakultas_jurusan');
    }
}
