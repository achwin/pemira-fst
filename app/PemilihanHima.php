<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemilihanHima extends Model
{
    

    protected $primaryKey = 'id_pemilihan';
    protected $table = 'pemilihan_hima';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'paslon_hima_suara'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}