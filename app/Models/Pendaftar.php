<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pendaftar extends Model
{
    protected $table = 'perguruan_tinggi_user';

    public function perguruanTinggi(): BelongsTo
    {
        return $this->belongsTo(PerguruanTinggi::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(Jurusan::class);
    }
    public function fakultas(): BelongsTo
    {
        return $this->belongsTo(Fakultas::class);
    }
}
