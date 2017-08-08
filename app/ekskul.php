<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ekskul extends Model
{
    //
   protected $table = 'fasilitas';
    protected $fillable = ['nama','foto'];
    protected $visible = ['nama','foto'];
    public $timestamps = true;
}

