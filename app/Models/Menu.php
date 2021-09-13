<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $table='menus';
    public $primaryKey='id';

    public $fillable = [
        'menu_name', 'menu_link', 'menu_status',
    ];

    //  public function submenus() {
    //     return $this->hasMany('App\Models\Submenu');
    // }
    public function sub()
    {
    	return $this->hasMany('App\Models\Submenu');
    }
}
