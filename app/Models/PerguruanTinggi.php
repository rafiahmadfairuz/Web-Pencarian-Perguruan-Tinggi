<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PerguruanTinggi extends Model
{
    /** @use HasFactory<\Database\Factories\PerguruanTinggiFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'perguruan_tinggi_user', 'perguruan_tinggi_id', 'user_id');
    }
    public function fakultas(): BelongsToMany
    {
        return $this->belongsToMany(Fakultas::class, 'perguruan_tinggi_fakultas_jurusan');
    }
    public function jurusan(): BelongsToMany
    {
        return $this->belongsToMany(Jurusan::class, 'perguruan_tinggi_fakultas_jurusan');
    }
    public function admin(): HasOne
    {
        return $this->hasOne(Admin::class);
    }

    public function scopeCari($query, $filters): void
    {
         $query->when(
            $filters ?? false,
            fn ($query, $search) =>
            $query->where('nama' ,'like', '%' . $search . '%' )
         );
    }
    public function scopeStatus($query, $filters): void
    {
        $query->when(
           $filters ?? false,
           fn ($query) =>
           $query->where('status', $filters)
        );
    }
}
