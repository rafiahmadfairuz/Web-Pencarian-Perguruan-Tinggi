<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pendaftar extends Model
{
    protected $table = 'perguruan_tinggi_user';
    protected $guarded = ['id'];
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
    public function scopeFilter($query, $filters): void
    {
        $query->when(
            $filters ?? false,
            fn($query, $search) =>
                filter_var($search, FILTER_VALIDATE_EMAIL)
                    ? $query->whereHas('user', function ($query) use ($search) {
                        $query->where('email', 'like', '%' . $search . '%');
                    })
                    : $query->whereHas('user', function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    })
        );
    }

    public function scopeStatus($query, $filters): void
    {
        if ($filters == 'nol') {
            $filters = "0";
        }
        $query->when(
            $filters !== null,
            fn($query) =>
            $query->where('status', $filters)
        );
    }
}
