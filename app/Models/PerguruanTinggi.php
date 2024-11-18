<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PerguruanTinggi extends Model
{
    /** @use HasFactory<\Database\Factories\PerguruanTinggiFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'perguruan_tinggi_user', 'perguruan_tinggi_id', 'user_id')->withTimestamps();
    }

    public function fakultas(): HasMany
    {
        return $this->hasMany(Fakultas::class);
    }
    public function jurusan(): HasMany
    {
        return $this->hasMany(Fakultas::class);
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

    public function scopeFilter(Builder $query ,array $filters): void
    {
        $query->when(
            $filters['jurusan'] ?? false,
            fn ($query, $search) =>
            $query->where('jurusan' ,'like', '%' . $search . '%' )
         );
         $query->when(
            $filters['akreditasi'] ?? false,
            fn ($query, $akreditasi) =>
            $query->where('akreditasi' , $akreditasi )
         );
         $query->when(
            $filters['kategori'] ?? false,
            fn ($query, $kategori) =>
            $query->where('kategori' , $kategori)
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
