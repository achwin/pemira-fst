<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPemilihanHima extends Model
{
    

    protected $primaryKey = 'id_detail_pemilihan_hima';
    protected $table = 'detail_pemilihan_hima';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'detail_pemilihan_hima_user',
        'detail_pemilihan_hima_id_fk'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}