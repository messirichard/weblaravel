<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'homes';
    protected $primarykey ='no';
    public $incrementing =false;
    protected $fillable = ['no','judul','slug','tanggal','konten'];

    protected $hidden = ['no','judul','slug','tanggal','konten'];
}