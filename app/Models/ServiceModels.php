<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class ServiceModels extends Model
{
	// service 1
	public static function get_desc1()
	{
		$data = DB::table('t_desc_h')
				->select('*')
				->where('id',1)
				->get();
		foreach ($data as $row) {
			$json_array['title']  	= $row->title;
			$json_array['desc']  	= $row->desc;

		}
		return $json_array;
	}
	public static function get_service1()
	{
		$id 			= request()->id;
		if ($id>0){ $sql2="id=".$id;}else{$sql2="id>0";}
		$data1 = DB::table('t_desc')
				->select('*')
				->where('id_h',1)
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['img'] 			= $row->img;
			$json_array['title'] 		= $row->title;
			$json_array['description'] 	= $row->description;
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
		
	}

	public static function update_service_h1_ok()
	{
		try{
			$data       = request()->data;
			$json_array = json_decode($data, TRUE);
			foreach ($json_array as $key => $val){
				$update = DB::table('t_desc_h')
					 		  ->where('id',1)
					 		  ->update([
					 		  			'title'	=>$val['title'],
					 		  			'desc'	=>$val['desc']
					 		  		]);
				$confirm1	=1;
			}
			if ($confirm1==1){
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Update data berhasil..";
	            $t_array['refresh'] 	=route('service1_table');
	        }
	        return $t_array;
		}
		catch(\Exception $e) {
 		    $t_array['msg_type']='error';
		    $t_array['msg']=$e->getMessage();
		    return $t_array;
		}
	}

	public static function service1_add_ok()
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
					$update = DB::table('t_desc')
					 		  ->where('id',$id)
					 		  ->update([
					 		  			'title'			=>$val['title'],
					 		  			'description'	=>$val['description'],
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
					$id_article = $id;
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('t_desc')
					 		  ->insert([
					 		  			'id_h' 			=>'1',
					 		  			'title'			=>$val['title'],
					 		  			'description'	=>$val['description'],
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
					$cari_id = DB::table('t_desc')
							   ->select('id')
							   ->where('adddate', $adddate)
							   ->get();
					foreach ($cari_id as $row) {
						$id_article = $row->id;
					}
				}

			}

			if ($confirm1==1){
				$t_array['sid'] 		= $id_article;
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('service1_table');
	        }
	        return $t_array;
		}
		catch(\Exception $e) {
 		    $t_array['msg_type']='error';
		    $t_array['msg']=$e->getMessage();
		    return $t_array;
		}
	}

	// service 2

	public static function get_service2()
	{
		$id 			= request()->id;
		if ($id>0){ $sql2="id=".$id;}else{$sql2="id>0";}
		$data1 = DB::table('t_desc')
				->select('*')
				->where('id_h',2)
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['img'] 			= $row->img;
			$json_array['title'] 		= $row->title;
			$json_array['description'] 	= $row->description;
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
	}

	public static function service2_add_ok()
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
					$update = DB::table('t_desc')
					 		  ->where('id',$id)
					 		  ->update([
					 		  			'title'			=>$val['title'],
					 		  			'description'	=>$val['description'],
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
					$id_article = $id;
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('t_desc')
					 		  ->insert([
					 		  			'id_h' 			=>'2',
					 		  			'title'			=>$val['title'],
					 		  			'description'	=>$val['description'],
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
					$cari_id = DB::table('t_desc')
							   ->select('id')
							   ->where('adddate', $adddate)
							   ->get();
					foreach ($cari_id as $row) {
						$id_article = $row->id;
					}
				}

			}

			if ($confirm1==1){
				$t_array['sid'] 		= $id_article;
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('service2_table');
	        }
	        return $t_array;
		}
		catch(\Exception $e) {
 		    $t_array['msg_type']='error';
		    $t_array['msg']=$e->getMessage();
		    return $t_array;
		}
	}

	public static function get_service3()
	{
		$id 			= request()->id;
		if ($id>0){ $sql2="id=".$id;}else{$sql2="id>0";}
		$data1 = DB::table('t_desc')
				->select('*')
				->where('id_h',3)
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['img'] 			= $row->img;
			$json_array['icon'] 		= $row->icon;
			$json_array['title'] 		= $row->title;
			$json_array['description'] 	= $row->description;
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
	}

	public static function get_desc3()
	{
		$data = DB::table('t_desc_h')
				->select('*')
				->where('id',3)
				->get();
		foreach ($data as $row) {
			$json_array['title']  	= $row->title;
			$json_array['desc']  	= $row->desc;

		}
		return $json_array;
	}

	public static function service3_add_ok()
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
					$update = DB::table('t_desc')
					 		  ->where('id',$id)
					 		  ->update([
					 		  			'icon'	 		=>$val['icon'],
					 		  			'title'			=>$val['title'],
					 		  			'description'	=>$val['description'],
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
					$id_article = $id;
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('t_desc')
					 		  ->insert([
					 		  			'id_h' 			=>'3',
					 		  			'icon'	 		=>$val['icon'],
					 		  			'title'			=>$val['title'],
					 		  			'description'	=>$val['description'],
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
					$cari_id = DB::table('t_desc')
							   ->select('id')
							   ->where('adddate', $adddate)
							   ->get();
					foreach ($cari_id as $row) {
						$id_article = $row->id;
					}
				}

			}

			if ($confirm1==1){
				$t_array['sid'] 		= $id_article;
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('service3_table');
	        }
	        return $t_array;
		}
		catch(\Exception $e) {
 		    $t_array['msg_type']='error';
		    $t_array['msg']=$e->getMessage();
		    return $t_array;
		}
	}

	public static function update_service_h3_ok()
	{
		try{
			$data       = request()->data;
			$json_array = json_decode($data, TRUE);
			foreach ($json_array as $key => $val){
				$update = DB::table('t_desc_h')
					 		  ->where('id',3)
					 		  ->update([
					 		  			'title'	=>$val['title'],
					 		  			'desc'	=>$val['desc']
					 		  		]);
				$confirm1	=1;
			}
			if ($confirm1==1){
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Update data berhasil..";
	            $t_array['refresh'] 	=route('service3_table');
	        }
	        return $t_array;
		}
		catch(\Exception $e) {
 		    $t_array['msg_type']='error';
		    $t_array['msg']=$e->getMessage();
		    return $t_array;
		}
	}

	public static function get_service4()
	{
		$id 			= request()->id;
		if ($id>0){ $sql2="id=".$id;}else{$sql2="id>0";}
		$data1 = DB::table('t_desc')
				->select('*')
				->where('id_h',4)
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['title'] 		= $row->title;
			$json_array['description'] 	= $row->description;
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
	}

	public static function service4_add_ok()
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
					$update = DB::table('t_desc')
					 		  ->where('id',$id)
					 		  ->update([
					 		  			'title' 		=>$val['title'],
					 		  			'description'	=>$val['description'],
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
					$id_article = $id;
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('t_desc')
					 		  ->insert([
					 		  			'id_h' 			=>'4',
					 		  			'description'	=>$val['description'],
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
					$cari_id = DB::table('t_desc')
							   ->select('id')
							   ->where('adddate', $adddate)
							   ->get();
					foreach ($cari_id as $row) {
						$id_article = $row->id;
					}
				}

			}

			if ($confirm1==1){
				$t_array['sid'] 		= $id_article;
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('service4_table');
	        }
	        return $t_array;
		}
		catch(\Exception $e) {
 		    $t_array['msg_type']='error';
		    $t_array['msg']=$e->getMessage();
		    return $t_array;
		}
	}
	
	public static function get_aboutus()
	{
		$id 			= request()->id;
		if ($id>0){ $sql2="id=".$id;}else{$sql2="id>0";}
		$data1 = DB::table('t_about_us')
				->select('*')
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['img'] 			= $row->img;
			$json_array['title'] 		= $row->title;
			$json_array['decription'] 	= $row->decription;
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
	}

	public static function aboutus_add_ok()
	{
		try{
			$adddate    = date("Y-m-d H:i:s");
			$user       = auth()->user();
			$addby     	= $user->id;
			$data       = request()->data;
			$id 		= request()->id;
			$json_array = json_decode($data, TRUE);
			
			foreach ($json_array as $key => $val){
				$update = DB::table('t_about_us')
				 		  ->where('id',$id)
				 		  ->update([
				 		  			'title'			=>$val['title'],
				 		  			'decription'	=>$val['decription'],
				 		  			'addby'			=>$addby,
				 		  			'adddate' 		=>$adddate
				 		  		]);
				$confirm1	=1;
				$id_article = $id;
			}

			

			if ($confirm1==1){
				$t_array['sid'] 		= $id_article;
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('aboutus_table');
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