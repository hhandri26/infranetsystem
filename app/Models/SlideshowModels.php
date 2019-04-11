<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class SlideshowModels extends Model
{
	public static function get_slideshow()
	{
		$id 			= request()->id;
		if ($id>0){ $sql2="a.id=".$id;}else{$sql2="a.id>0";}		
		$data1 = DB::table('t_slideshow as a')
				->select('a.id','a.img','a.title','a.description','a.link','a.sort','a.active','b.title as link_name')
				->leftjoin('t_article as b','a.link','=','b.id')
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['img'] 			= $row->img;
			$json_array['title'] 		= $row->title;
			$json_array['description'] 	= $row->description;
			$json_array['link'] 		= $row->link;
			$json_array['link_name'] 	= $row->link_name;
			$json_array['sort'] 		= $row->sort;
			$json_array['active'] 		= $row->active;
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
	}
	public static function slideshow_save_ok()
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
					$update = DB::table('t_slideshow')
					 		  ->where('id',$id)
					 		  ->update([
					 		  			'title'			=>$val['title'],
					 		  			'description'	=>$val['description'],
					 		  			'link'			=>$val['link'],
					 		  			'active'		=>$val['active'],
					 		  			'sort'			=>$val['sort'],
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
					$id_sldeshow = $id;
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('t_slideshow')
					 		  ->insert([
					 		  			'title'			=>$val['title'],
					 		  			'description'	=>$val['description'],
					 		  			'link'			=>$val['link'],
					 		  			'active'		=>$val['active'],
					 		  			'sort'			=>$val['sort'],
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
					$cari_id = DB::table('t_slideshow')
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
	            $t_array['refresh'] 	=route('slideshow_table');
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