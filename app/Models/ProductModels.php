<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DB;

class ProductModels extends Model
{
	public static function get_product()
	{
		$id 			= request()->id;
		if ($id>0){ $sql2="id=".$id;}else{$sql2="id>0";}
		$data1 = DB::table('t_product')
				->select('*')
				->where('id_h',5)
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['price'] 		= $row->price;
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

	public static function get_desc()
	{
		$data = DB::table('t_desc_h')
				->select('*')
				->where('id',5)
				->get();
		foreach ($data as $row) {
			$json_array['title']  	= $row->title;
			$json_array['desc']  	= $row->desc;

		}
		return $json_array;
	}

	public static function product_add_ok()
	{
		try{
			
			$data       = request()->data;
			$id 		= request()->id;
			$json_array = json_decode($data, TRUE);
			if ($id>0){
				foreach ($json_array as $key => $val){
					$update = DB::table('t_product')
					 		  ->where('id',$id)
					 		  ->update([
					 		  			'icon'	 		=>$val['icon'],
					 		  			'title'			=>$val['title'],
					 		  			'description'	=>$val['description'],
					 		  			'price' 		=>str_replace(' ','',$val['price'])
					 		  		]);
					$confirm1	=1;
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('t_product')
					 		  ->insert([
					 		  			'id_h' 			=>'5',
					 		  			'icon'	 		=>$val['icon'],
					 		  			'title'			=>$val['title'],
					 		  			'description'	=>$val['description'],
					 		  			'price' 		=>str_replace(' ','',$val['price'])
					 		  		]);
					$confirm1	=1;
				}

			}

			if ($confirm1==1){
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('product_table');
	        }
	        return $t_array;
		}
		catch(\Exception $e) {
 		    $t_array['msg_type']='error';
		    $t_array['msg']=$e->getMessage();
		    return $t_array;
		}
	}

	public static function update_product_h_ok()
	{
		try{
			$data       = request()->data;
			$json_array = json_decode($data, TRUE);
			foreach ($json_array as $key => $val){
				$update = DB::table('t_desc_h')
					 		  ->where('id',5)
					 		  ->update([
					 		  			'title'	=>$val['title'],
					 		  			'desc'	=>$val['desc']
					 		  		]);
				$confirm1	=1;
			}
			if ($confirm1==1){
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Update data berhasil..";
	            $t_array['refresh'] 	=route('product_table');
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