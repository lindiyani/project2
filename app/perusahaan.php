<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    //
    protected $table = 'fasilitas';
    protected $fillable = ['kejuruan','nama','logo'];
    protected $visible = ['kejuruan','nama','logo'];
    public $timestamps = true;
}

