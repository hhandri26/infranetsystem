<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
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
	    	$confirm1 	= 1;
	    	if ($confirm1==1){
				
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Hapus record berhasil";
	            $t_array['refresh'] 	=route($refresh);
	        }
	        return $t_array;
	    }
	    catch(\Exception $e) {
		    $t_array['msg_type'] 	='error';
		    $t_array['msg'] 		=$e->getMessage();
		    $t_array['refresh'] 	=route($refresh);
		    return $t_array;
       }
	}

	public static function delete_prv_ok()
	{
		try {
	    	$id 		= request()->id;
	    	$msg_type 	='success';
	    	$msg 		='Hapus record berhasil';
	    	DB::table('t_privileges')->where('id', $id)->delete();
	    	$confirm1 	= 1;
	    	if ($confirm1==1){
				
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Hapus record berhasil";
	        }
	        return $t_array;
	    }
	    catch(\Exception $e) {
		    $t_array['msg_type'] 	='error';
		    $t_array['msg'] 		=$e->getMessage();
		    $t_array['refresh'] 	=route($refresh);
		    return $t_array;
       }
	}

	public static function select_menu_ok()
	{
		$q 		= \Request::input('q');
		return DB::table('t_menu')
			   ->select('id','menu_name as text')
			   ->where(function($query) use ($q) {
		                $query->where('menu_name', 'like', "%$q%");
		           		 })
			   ->get();
	}

	public static function user_add_ok()
	{
		try{
				$data       	= request()->data;
				$json_array1	= json_decode($data, TRUE);		
				$adddate     	= date("Y-m-d H:i:s");
				$user        	= auth()->user();
				$userid      	= $user->id;
				$id 		 	= request()->id;
				if ($id>0){
					foreach ($json_array1 as $key => $val) {
						$update_user = DB::table('users')
									   ->where('id', $id)
									   ->update([
									   	'name' 			=>$val['name'],
									 	'email' 		=>$val['email'],
									 	'password' 		=>str_replace(' ','',bcrypt($val['password'])),
									 	'real_password'	=>str_replace(' ','',$val['password']),
									 	'phone' 		=>$val['phone'],
									 	'active' 		=>$val['active'],
									   ]);
						$confirm1 	= 1;

						$menu_id 	= $val['select_menu'];
						if($menu_id!=='')
						{
							$cari_menu	= DB::table('t_menu')
									  ->select('*')
									  ->whereRaw('id in ('.$menu_id.')')
									  ->get();
							foreach ($cari_menu as $row) {
								$insert_prv = DB::table('t_privileges')
											  ->insert([
											  	'menu_id'	=>$row->id,
											  	'user_id' 	=>$id,
											  ]);
								$confirm2 	= 1;
							}
						}else{

						}
						
					}



					}else{
						foreach ($json_array1 as $key => $val) {

							$insert_user=DB::table('users')
										 ->insert([
										 	'name' 			=>$val['name'],
										 	'email' 		=>$val['email'],
										 	'password' 		=>str_replace(' ','',bcrypt($val['password'])),
									 		'real_password'	=>str_replace(' ','',$val['password']),
										 	'phone' 		=>$val['phone'],
										 	'active' 		=>$val['active'],
										 	'adddate' 		=>$adddate,
										 	'addby'			=>$userid
										 ]);
							$confirm1 	= 1;
							$cari_id 	= DB::table('users')
										  ->select('id','adddate')
										  ->where('adddate',$adddate)
										  ->get();
							foreach ($cari_id as $row) {
								$id_user_prv = $row->id;
							 }

							 // update username
							 $update_username = DB::table('users')
							 					->where('id', $id_user_prv)
							 					->update(['username' => str_replace(' ','',$val['name']).$id_user_prv ]);

							$menu_id 	= $val['select_menu'];
							$cari_menu	= DB::table('t_menu')
										  ->select('*')
										  ->whereRaw('id in ('.$menu_id.')')
										  ->get();
							foreach ($cari_menu as $row) {
								$insert_prv = DB::table('t_privileges')
											  ->insert([
											  	'menu_id'	=>$row->id,
											  	'user_id' 	=>$id_user_prv
											  ]);
								$confirm2 	= 1;
							}
							
						}
				}
				if ($confirm1==1){
		            $t_array['msg_type'] 	='success';
		            $t_array['msg'] 		="Simpan data berhasil..";
		            $t_array['refresh'] 	=route('user_table');
	        	}
	        	return $t_array;

			}
			catch(\Exception $e) {
 		    $t_array['msg_type']='error';
		    $t_array['msg']=$e->getMessage();
		    return $t_array;
		}
	}

	public static function upload_file_ok($request)
	{
		$folder 	=Request()->folder;
		$prefik 	=Request()->prefik;
		$table 		=Request()->table;
		$field_name =Request()->field_name;
		$refresh 	= request()->refresh;
		$exst_img 	= request()->exst_img;
		$path 		=storage_path('app/file/');
		$msg 		="Upload berhasil";
		$validator  = Validator::make($request->all(),['file[]' => 'image',],['file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)']);
		if ($validator->fails()){
			$err 		='';
			$json_array = json_decode($validator->errors(), TRUE);
			foreach ($json_array as $key => $val) {
					$err.=$val[0];
			}
			$t_array['msg_type'] 	='warning';
		    $t_array['msg'] 		=$err;
		    return $t_array;
		}else{
			$image 	='.jpg.png.bmp.jpeg.gif.tiff';
		    $dir  	=$path.$folder.'/';
		    $n 		=0;
		    foreach($request->file('file') as $file){
		    	if(is_file($file)){
		    		$filename 		= $prefik.'_'.$file->getClientOriginalName();
		    		$file->move($dir, $filename);
		    		$update_table 	= DB::table($table)
		    						  ->where('id', $prefik)
		    						  ->update([$field_name=>$filename]);
		    		$n++;
		    	}
		    }
		    $msg=$n. " file berhasil di upload ";
		}
		$t_array['refresh'] 	=route($refresh);
		$t_array['msg_type'] 	='success';
	    $t_array['msg'] 		=$msg;
	    return $t_array;

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

	public static function users_privileges($id_user,$tbl)
	{
		$json_data 		=array();
		$json_array 	='';
		$rows 			=DB::table('t_privileges as a')
						 ->select('a.user_id','a.menu_id','b.menu_name','a.id')
						 ->leftjoin('t_menu as b','a.menu_id','=','b.id')
						 ->where('a.user_id',$id_user)
						 ->get();
		foreach ($rows as $k) {
			if($tbl=='get'){
				$json_array = '<li><span class="fa-li" ><i class="fa fa-check-square clr-green"></i></span>'.$k->menu_name;
			}
			if($tbl=='row'){
				return $rows;
			}
			array_push($json_data,$json_array);
		}
		return $json_data;
	}

	public static function get_user_prv()
	{
		$id 			=request()->id;
		$json_data 		=array();
		$json_array 	=array();
		if ($id>0){$sql2="a.id=".$id;}else{$sql2="a.id>0";}
		$data1 = DB::table('users as a')
				 ->select('a.id','a.name','a.email','a.phone','a.active','a.role','a.real_password','a.username','b.name_role')
				 ->leftjoin('t_role_user as b','a.role','=','b.id')
				 ->whereRaw($sql2)
				 ->get();
		foreach ($data1 as $row) {
			$id_user 						= $row->id;
			$d1 							= ConfigModels::users_privileges($id_user,'get');
			$df 							= implode(",", $d1);
			$json_array['id'] 				= $row->id;
			$json_array['users_privileges'] = '<ul class="fa-ul">'.$df.'</ul>';
			$json_array['row_prv'] 			= ConfigModels::users_privileges($id_user,'row');
			$json_array['name'] 			= $row->name;
			$json_array['username'] 		= $row->username;
			$json_array['email'] 			= $row->email;
			$json_array['phone']			= $row->phone;
			$json_array['active'] 			= $row->active;
			$json_array['name_role'] 		= $row->name_role;
			$json_array['real_password'] 	= $row->real_password;
			array_push($json_data,$json_array);
		}
		if($id>0){
			$list_array 			= $json_array;
		}else{
			return '{"data":'.json_encode($json_data).'}';
		}
		return $list_array;
			
		
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
					 		  			'url'			=>str_replace(' ','',$val['url']),
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
					 		  			'url'			=>str_replace(' ','',$val['url']),
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

	public static function get_contact_info()
	{
		$data1 = DB::table('t_info')
				->select('*')
				->get();
		foreach ($data1 as $row) {
			$json_array['img'] 			= $row->logo;
			$json_array['email'] 		= $row->email;
			$json_array['phone'] 		= $row->phone;
			$json_array['address'] 		= $row->address;
			$json_array['facebook'] 	= $row->facebook;
			$json_array['twitter'] 		= $row->twitter;
			$json_array['instagram'] 	= $row->instagram;
			$json_array['linkedin'] 	= $row->linkedin;
			$json_array['title'] 		= $row->title;
			$json_array['decription'] 	= $row->decription;
			$json_array['keywords'] 	= $row->keywords;
			$json_array['tag'] 			= $row->tag;
			$json_array['maps'] 		= $row->maps;
			$json_array['copyright'] 	= $row->copyright;

		}
		return $json_array;
	}

	public static function info_update_ok()
	{
		try{
			
			$data       = request()->data;
			$json_array = json_decode($data, TRUE);
			
			foreach ($json_array as $key => $val){
				$update = DB::table('t_info')
				 		  ->where('id',1)
				 		  ->update([
				 		  			'email'		=>$val['email'],
				 		  			'phone'		=>$val['phone'],
				 		  			'address'	=>$val['address'],
				 		  			'facebook'	=>$val['facebook'],
				 		  			'twitter'	=>$val['twitter'],
				 		  			'instagram'	=>$val['instagram'],
				 		  			'linkedin'	=>$val['linkedin'],
				 		  			'title'		=>$val['title'],
				 		  			'decription'=>$val['decription'],
				 		  			'keywords'	=>$val['keywords'],
				 		  			'tag'		=>$val['tag'],
				 		  			'maps'		=>$val['maps'],
				 		  			'copyright'	=>$val['copyright']
				 		  		]);
				$confirm1	=1;
			}	

			if ($confirm1==1){
				$t_array['sid'] 		= '1';
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	= route('info_form');
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
