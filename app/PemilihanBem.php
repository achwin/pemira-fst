<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemilihanBem extends Model
{
    

    protected $primaryKey = 'id_pemilihan_bem';
    protected $table = 'pemilihan_bem';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'paslon_bem_suara'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}