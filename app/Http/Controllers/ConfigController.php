<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigModels;
use App\Models\MenuModels;
use App\Models\SubMenuModels;
use DB;
class ConfigController extends Controller
{

	public function delete()
	{
		return ConfigModels::delete_ok();
	}

	// menu
	public function menu_table()
	{
		$groupmenu      =ConfigModels::get_gorup_menu();
        return view('menu/index', compact('groupmenu'));
	}

	public function menu_form()
	{
		$icon 			=ConfigModels::get_icon();
		return view('menu/form', compact('icon'));
	}

	public function menu_add(Request $request)
	{
		return ConfigModels::menu_save_ok();
	}

	public function menu_edit()
	{
		$data 		=ConfigModels::get_gorup_menu();
        return view('menu/form', $data);

	}
	// sub Menu

	public function sub_menu_table()
	{
		$data['get']      =ConfigModels::get_sub_menu();
        return view('sub_menu/table',$data);
	}

	public function sub_menu_form()
	{
		$groupmenu      =ConfigModels::get_gorup_menu();
		return view('sub_menu/form', compact('groupmenu'));
	}

	public function sub_menu_add(Request $request)
	{
		return ConfigModels::sub_menu_save();
	}

	public function sub_menu_edit()
	{
		$data['get']      	=ConfigModels::get_sub_menu();
		$data['groupmenu'] 	=DB::table('t_menu')
							 ->select('*')
							 ->get();
		return view('sub_menu/form',$data);
	}
}