<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable implements JWTSubject
{
    use HasFactory;

    // Mendapatkan key yang digunakan untuk generate token JWT.
    // Dalam hal ini, kita menggunakan primary key dari tabel user.
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    // Mendapatkan custom claims yang akan dimasukkan ke dalam token JWT.
    // Dalam hal ini, kita tidak menggunakan custom claims apapun.
    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $table = 'm_user';        // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id';  // Mendefinisikan primary key dari tabel yang digunakan

    /** 
     * Mirip seperti comment ( // ) namun bisa digunakan untuk multi line.
     * Khusus php.
     * 
     * $fillable: Atribut yang bisa diisi (seperti insert, update).
     * @var array */
    protected $fillable = [
        'level_id',
        'username',
        'nama',
        'password',
        'profile',
    ];

    protected $hidden = ['password']; // data password tidak ditampilkan saat select/find 

    protected $casts = ['password' => 'hashed']; // casting password agar otomatis di hash
    // sehingga tidak perlu diisi lagi, contoh: $user->password = Hash::make('123456');
    // menjadi: $user->password = '123456'; saja.

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    /**
     * Mendapatkan nama role dari user yang sedang login.
     */
    public function getRoleName(): string
    {
        return $this->level->level_nama;
    }

    // Cek apakah user memiliki role tertentu
    public function hasRole($role): bool
    {
        // return $this->level->level_kode == $role;
        return in_array($this->level->level_kode, $role);
    }

    // Mendapatkan kode role
    public function getRole(): string
    {
        return $this->level->level_kode;
    }
}
