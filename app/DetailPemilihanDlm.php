<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPemilihanDlm extends Model
{
    

    protected $primaryKey = 'id_detail_pemilihan_dlm';
    protected $table = 'detail_pemilihan_dlm';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'detail_pemilihan_dlm_user',
        'detail_pemilihan_dlm_id_fk'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}