<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPemilihanBem extends Model
{
    

    protected $primaryKey = 'id_detail_pemilihan_bem';
    protected $table = 'detail_pemilihan_bem';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'detail_pemilihan_bem_user',
        'detail_pemilihan_bem_id_fk'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}