<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Himpunan extends Model
{
    

    protected $primaryKey = 'id_himpunan';
    protected $table = 'himpunan';
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