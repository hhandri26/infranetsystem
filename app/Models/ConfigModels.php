<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class ConfigModels extends Model
{
	public static function delete_ok()
	{
		try {
	    	$tbl 		= request()->table;
	    	$id 		= request()->id;
	    	$refresh 	= request()->refresh;
	    	$msg_type 	='success';
	    	$msg 		='Hapus record berhasil';
	    	DB::table($tbl)->where('id', $id)->delete();
	    }
	    catch(\Exception $e) {
		    $t_array['msg_type'] 	='error';
		    $t_array['msg'] 		=$e->getMessage();
		    $t_array['refresh'] 	=route($refresh);
		    return $t_array;
       }
	}

	public static function get_gorup_menu()
	{
		$id 			= request()->id;
		if ($id>0){
			$data1 = DB::table('t_menu')
					->select('*')
					->where('id',$id)
					->get();
			foreach ($data1 as $row) {
				$json_array['menu'] 	= $row->menu_name;
				$json_array['icon_e'] 	= $row->icon;
				$json_array['sort'] 	= $row->sort;
				$json_array['icon'] 	= DB::table('t_icon')
										  ->select('*')
									      ->get();
			}
			return $json_array;
		}else{
			$data = DB::table('t_menu')
				->select('*')
				->get();
			return $data;
		}
		
	}

	public static function get_icon()
	{
		$data = DB::table('t_icon')
				->select('*')
				->get();
		return $data;
	}

	public static function menu_save_ok()
	{
		try{
			$adddate    = date("Y-m-d H:i:s");
			$user       = auth()->user();
			$addby     	= $user->id;
			$data       = request()->data;
			$id 		= request()->id;
			$json_array = json_decode($data, TRUE);
			if ($id>0){
				foreach ($json_array as $key => $val){
					$update = DB::table('t_menu')
					 		  ->where('id',$id)
					 		  ->update([
					 		  			'menu_name'	=>$val['menu'],
					 		  			'icon'		=>$val['icon'],
					 		  			'sort'		=>$val['no_urut'],
					 		  			'addby'		=>$addby,
					 		  			'adddate' 	=>$adddate
					 		  		]);
					$confirm1	=1;
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('t_menu')
					 		  ->insert([
					 		  			'menu_name'	=>$val['menu'],
					 		  			'icon'		=>$val['icon'],
					 		  			'sort'		=>$val['no_urut'],
					 		  			'addby'		=>$addby,
					 		  			'adddate' 	=>$adddate
					 		  		]);
					$confirm1	=1;
				}

			}

			if ($confirm1==1){
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('menu_table');
	        }
	        return $t_array;
		}
		catch(\Exception $e) {
 		    $t_array['msg_type']='error';
		    $t_array['msg']=$e->getMessage();
		    return $t_array;
		}
	}
	// sub Menu

	public static function get_sub_menu()
	{
		$id 			= request()->id;
		if ($id>0){ $sql2="a.id=".$id;}else{$sql2="a.id>0";}		
		$data1 = DB::table('t_sub_menu as a')
				->select('a.id','a.id_menu','a.sub_menu_name as submenu','a.url','b.menu_name as menu')
				->leftjoin('t_menu as b','a.id_menu','=','b.id')
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['submenu'] 	= $row->submenu;
			$json_array['id_menu'] 	= $row->id_menu;
			$json_array['menu'] 	= $row->menu;
			$json_array['url'] 		= $row->url;
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
		
		
	}

	public static function sub_menu_save()
	{
		try{
			$adddate    = date("Y-m-d H:i:s");
			$user       = auth()->user();
			$addby     	= $user->id;
			$data       = request()->data;
			$id 		= request()->id;
			$json_array = json_decode($data, TRUE);
			if ($id>0){
				foreach ($json_array as $key => $val){
					$update = DB::table('t_sub_menu')
					 		  ->where('id',$id)
					 		  ->update([
					 		  			'id_menu'		=>$val['id_menu'],
					 		  			'sub_menu_name'	=>$val['sub_menu_name'],
					 		  			'url'			=>$val['url'],
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('t_sub_menu')
					 		  ->insert([
					 		  			'id_menu'		=>$val['id_menu'],
					 		  			'sub_menu_name'	=>$val['sub_menu_name'],
					 		  			'url'			=>$val['url'],
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
				}

			}

			if ($confirm1==1){
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('sub_menu_table');
	        }
	        return $t_array;
		}
		catch(\Exception $e) {
 		    $t_array['msg_type']='error';
		    $t_array['msg']=$e->getMessage();
		    return $t_array;
		}
	}
}
