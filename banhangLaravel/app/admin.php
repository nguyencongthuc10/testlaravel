<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'admin_name', 'admin_email', 'admin_password','admin_phone'
    ];
    
    protected $primarykey = 'admin_id';
    protected $table = 'tbl_admin';
    
}
