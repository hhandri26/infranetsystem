<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class GalleryModels extends Model
{
	public static function get_gallery()
	{
		$id 			= request()->id;
		if ($id>0){ $sql2="id=".$id;}else{$sql2="id>0";}		
		$data1 = DB::table('t_gallery')
				->select('*')
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['img'] 			= $row->img;
			$json_array['title'] 		= $row->title;
			$json_array['desc'] 		= $row->desc;
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
	}

	public static function gallery_add_ok()
	{
		try{
			$adddate    = date("Y-m-d H:i:s");
			$date       = date("Y-M-d i");
			$user       = auth()->user();
			$addby     	= $user->id;
			$data       = request()->data;
			$id 		= request()->id;
			$refresh 	= request()->refresh;
			$json_array = json_decode($data, TRUE);
			if ($id>0){
				foreach ($json_array as $key => $val){
					$update = DB::table('t_gallery')
					 		  ->where('id',$id)
					 		  ->update([
					 		  			'title'			=>$val['title'],
					 		  			'desc'			=>$val['desc'],
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
					$id_sldeshow = $id;
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('t_gallery')
					 		  ->insert([
					 		  			'title'			=>$val['title'],
					 		  			'desc'			=>$val['desc'],
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
					$cari_id = DB::table('t_gallery')
							   ->select('id')
							   ->where('adddate', $adddate)
							   ->get();
					foreach ($cari_id as $row) {
						$id_sldeshow = $row->id;
					}
				}

			}

			if ($confirm1==1){
				$t_array['sid'] 		= $id_sldeshow;
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('gallery_table');
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