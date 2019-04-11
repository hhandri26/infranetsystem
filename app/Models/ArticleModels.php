<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class ArticleModels extends Model
{
	protected $table = 't_article';

	public static function get_article()
	{
		$id 			= request()->id;
		if ($id>0){ $sql2="id=".$id;}else{$sql2="id>0";}		
		$data1 = DB::table('t_article')
				->select('*')
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['img'] 			= $row->img;
			$json_array['title'] 		= $row->title;
			$json_array['decription'] 	= $row->decription;
			$json_array['keywords'] 	= $row->keywords;
			$json_array['tag'] 			= $row->tag;
			$json_array['author'] 		= $row->author;
			$json_array['active'] 		= $row->active;
			$json_array['sort'] 		= $row->sort;
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
	}

	public static function artikel_save_ok()
	{
		try{
			$adddate    = date("Y-m-d H:i:s");
			$date       = date("Y-M-d i");
			$user       = auth()->user();
			$addby     	= $user->id;
			$data       = request()->data;
			$id 		= request()->id;
			$json_array = json_decode($data, TRUE);
			if ($id>0){
				foreach ($json_array as $key => $val){
					$update = DB::table('t_article')
					 		  ->where('id',$id)
					 		  ->update([
					 		  			'title'			=>$val['title'],
					 		  			'decription'	=>$val['decription'],
					 		  			'keywords'		=>$val['keywords'],
					 		  			'tag'			=>$val['tag'],
					 		  			'author'		=>$val['author'],
					 		  			'active'		=>$val['active'],
					 		  			'sort'			=>$val['sort'],
					 		  			'date' 			=>$date,
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
					$id_article = $id;
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('t_article')
					 		  ->insert([
					 		  			'title'			=>$val['title'],
					 		  			'decription'	=>$val['decription'],
					 		  			'keywords'		=>$val['keywords'],
					 		  			'tag'			=>$val['tag'],
					 		  			'author'		=>$val['author'],
					 		  			'active'		=>$val['active'],
					 		  			'sort'			=>$val['sort'],
					 		  			'date' 			=>$date,
					 		  			'addby'			=>$addby,
					 		  			'adddate' 		=>$adddate
					 		  		]);
					$confirm1	=1;
					$cari_id = DB::table('t_article')
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
	            $t_array['refresh'] 	=route('artikel_table');
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
