<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemilihanDlm extends Model
{
    

    protected $primaryKey = 'id_pemilihan_dlm';
    protected $table = 'pemilihan_dlm';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'calon_dlm_suara'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}