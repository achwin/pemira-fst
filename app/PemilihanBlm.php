<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemilihanBlm extends Model
{
    

    protected $primaryKey = 'id_pemilihan_blm';
    protected $table = 'pemilihan_hima';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'calon_blm_suara'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}