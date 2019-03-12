<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $table="t_sub_menu";
    protected $guarded	=[];

     public function menu()
    {
        return $this->belongsTo('App\Groupmenu');
    } 
}
