<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    //
protected $table = 'fasilitas';
    protected $fillable = ['foto','keterangan'];
    protected $visible = ['foto','keterangan'];
    public $timestamps = true;
}

