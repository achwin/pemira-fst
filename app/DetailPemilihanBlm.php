<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPemilihanBlm extends Model
{
    

    protected $primaryKey = 'id_detail_pemilihan_blm';
    protected $table = 'detail_pemilihan_blm';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'detail_pemilihan_blm_user',
        'detail_pemilihan_blm_id_fk'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}