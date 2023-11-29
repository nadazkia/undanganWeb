<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Mempelai extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "mempelai"; //Agar sama dengan table di databasenya

    protected $fillable = [
        'nama_pria',
        'panggil_pria',
        'bapak_pria',
        'ibu_pria',
        'anakke_pria',
        'nama_wanita',
        'panggil_wanita',
        'bapak_wanita',
        'ibu_wanita',
        'anakke_wanita',
        'tanggal_akad',
        'mulai_akad',
        'selesai_akad',
        'tempat_akad',
        'link_akad',
        'tanggal_resepsi',
        'mulai_resepsi',
        'selesai_resepsi',
        'tempat_resepsi',
        'link_resepsi',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        // 'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
