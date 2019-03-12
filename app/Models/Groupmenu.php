<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groupmenu extends Model
{
    protected $table="t_group_menu";
    protected $guarded	=[];

    public function submenu()
    {
        return $this->hasMany('App\Submenu');
    } 
}
