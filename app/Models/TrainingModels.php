<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DB;

class TrainingModels extends Model
{
	public static function get_catagories()
	{
		$id 			= request()->id;
		if ($id>0){ $sql2="id=".$id;}else{$sql2="id>0";}		
		$data1 = DB::table('app_training_catagories')
				->select('*')
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['title']= $row->title;
			$json_array['desc'] = $row->desc;
			$json_array['img'] 	= $row->img;
			$json_array['price']= $row->price;
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
	}

	public static function save_catagories_ok()
	{
		$data       = request()->data;
		$adddate    = date("Y-m-d H:i:s");
		$user       = auth()->user();
		$addby     	= $user->id;
		$id 		= request()->id;
		$json_array = json_decode($data, TRUE);
		if ($id>0){
			foreach ($json_array as $key => $val){
				$update = DB::table('app_training_catagories')
						  ->where('id',$id)
						  ->update([
						  	'title' 	=>$val['title'],
						  	'desc' 		=>$val['desc'],
						  	'price' 	=>str_replace(' ','',$val['price']),
						  	'adddate' 	=>$adddate,
						  	'addby' 	=>$addby
						]);
				$confirm1	=1;
				$id 		= $id;
			}
		}else{
			foreach ($json_array as $key => $val){
				$update = DB::table('app_training_catagories')
						  ->insert([
						  	'title' 	=>$val['title'],
						  	'desc' 		=>$val['desc'],
						  	'price' 	=>str_replace(' ','',$val['price']),
						  	'adddate' 	=>$adddate,
						  	'addby' 	=>$addby
						]);
				$confirm1	=1;
				$id 		= DB::table('app_training_catagories')->where('adddate',$adddate)->pluck('id')->first();
			}

		}
		if ($confirm1==1){
			$t_array['sid'] 		= $id;
            $t_array['msg_type'] 	='success';
            $t_array['msg'] 		="Simpan data berhasil..";
            $t_array['refresh'] 	=route('training_catagories_table');
        }
        return $t_array;
	}

	public static function materi_list($id,$tbl)
	{
		$json_data 		=array();
		$json_array 	='';
		$rows 			=DB::table('app_training_single')
						 ->select('*')
						 ->where('id_h',$id)
						 ->get();
		$no 			=1;
		foreach ($rows as $k) {
			if($tbl=='get'){
				$json_array = '<li>'.$no++.'.'.$k->header_materi.'</li>';
			}
			if($tbl=='row'){
				return $rows;
			}
			array_push($json_data,$json_array);
		}
		return $json_data;
	}

	public static function sub_materi_list($id,$tbl)
	{
		$json_data 		=array();
		$json_array 	='';
		$rows 			=DB::table('app_training_single')
						 ->select('*')
						 ->where('id_h',$id)
						 ->get();
		$no = 1;
		foreach ($rows as $k) {
			if($tbl=='get'){
				$json_array = '<li>'.$no++.'.'.$k->sub_materi.'</li>';
			}
			if($tbl=='row'){
				return $rows;
			}
			array_push($json_data,$json_array);
		}
		return $json_data;
	}

	public static function get_sub_list()
	{
		$id 			=request()->id;
		$json_data 		=array();
		$json_array 	=array();
		if ($id>0){$sql2="id=".$id;}else{$sql2="id>0";}
		$data1 = DB::table('app_training_catagories')
				 ->select('*')
				 ->whereRaw($sql2)
				 ->get();
		foreach ($data1 as $row) {
			$ids 							= $row->id;
			$d1 							= TrainingModels::materi_list($ids,'get');
			$d2 							= TrainingModels::sub_materi_list($ids,'get');
			$materi 						= implode(",", $d1);
			$sub_materi 					= implode(",", $d2);
			$json_array['id'] 				= $row->id;
			$json_array['judul'] 			= $row->title;
			$json_array['materi'] 			= '<ul class="fa-ul">'.str_replace(',','',$materi).'</ul>';
			$json_array['sub_materi'] 		= '<ul class="fa-ul">'.str_replace(',','',$sub_materi).'</ul>';
			$json_array['row_materi'] 		= TrainingModels::materi_list($ids,'row');
			$json_array['row_sub_materi'] 	= TrainingModels::sub_materi_list($ids,'row');
			array_push($json_data,$json_array);
		}
		if($id>0){
			$list_array 			= $json_array;
		}else{
			return '{"data":'.json_encode($json_data).'}';
		}
		return $list_array;
	}
}
