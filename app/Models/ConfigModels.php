<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class ConfigModels extends Model
{
	public static function get_gorup_menu()
	{
		$data = DB::table('t_menu')
				->select('*')
				->get();
		return $data;
	}

	public static function get_icon()
	{
		$data = DB::table('t_icon')
				->select('*')
				->get();
		return $data;
	}
}
