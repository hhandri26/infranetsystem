<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigModels;
use App\Models\MenuModels;
use App\Models\SubMenuModels;
class ConfigController extends Controller
{
	public function menu_table()
	{
		$groupmenu      =ConfigModels::get_gorup_menu();
        return view('menu/index', compact('groupmenu'));
	}

	public function menu_form()
	{
		$icon 			=ConfigModels::get_icon();
		return view('menu/add', compact('icon'));
	}

	public function menu_add()
	{

	}

	public function menu_edit()
	{

	}
}