<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function pt(): BelongsToMany
    {
        return $this->belongsToMany(PerguruanTinggi::class, 'perguruan_tinggi_user', 'user_id' , 'perguruan_tinggi_id')->withPivot('id', 'fakultas_id', 'jurusan_id', 'alamat', 'nilai_akhir', 'status')->withTimestamps();
    }
    public function pendaftar(): HasMany
    {
        return $this->hasMany(Pendaftar::class);
    }

    public function scopeFilter($query, $filters): void
    {
         $query->when(
            $filters ?? false,
            fn ($query, $search) =>
            filter_var($search, FILTER_VALIDATE_EMAIL)
            ? $query->where('email' ,'like', '%' . $search . '%' )
            : $query->where('name' ,'like', '%' . $search . '%' )
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
