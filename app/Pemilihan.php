<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilihan extends Model
{
    

    protected $primaryKey = 'id_pemilihan';
    protected $table = 'pemilihan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}