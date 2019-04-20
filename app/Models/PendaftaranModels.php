<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DB;

class PendaftaranModels extends Model
{
	public static function get_prov()
	{
		$table 		= DB::table('provinsi')
					  ->select('*')
					  ->orderby('nama')
					  ->get();
		return $table;
	}
	public static function getkab_ok()
	{
		$id 		= request()->id;
		$json_data 	= array();
		$table 		= DB::table('kabupaten')
					  ->select('*')
					  ->where('id_prov',$id)
					  ->orderby('nama')
					  ->get();
		foreach ($table as $row) {
			$json_array = "<option value='".$row->id_kab."'>".$row->nama."</option>" ;
			array_push($json_data,$json_array);
		}
		return json_encode(str_replace('</option>','',$json_data));
	}

	public static function getkec_ok()
	{
		$id 		= request()->id;
		$json_data 	= array();
		$table 		= DB::table('kecamatan')
					  ->select('*')
					  ->where('id_kab',$id)
					  ->orderby('nama')
					  ->get();
		foreach ($table as $row) {
			$json_array = "<option value='".$row->id_kec."'>".$row->nama."</option>" ;
			array_push($json_data,$json_array);
		}
		return json_encode(str_replace('</option>','',$json_data));
	}

	public static function getkel_ok()
	{
		$id 		= request()->id;
		$json_data 	= array();
		$table 		= DB::table('kelurahan')
					  ->select('*')
					  ->where('id_kec',$id)
					  ->orderby('nama')
					  ->get();
		foreach ($table as $row) {
			$json_array = "<option value='".$row->id_kel."'>".$row->nama."</option>" ;
			array_push($json_data,$json_array);
		}
		return json_encode(str_replace('</option>','',$json_data));	
	}

	public static function get_kursus()
	{
		$table = DB::table('app_training_catagories')
				 ->select('*')
				 ->orderby('title')
				 ->get();
		return $table;
	}

	public static function getjadwal_ok()
	{
		$id 		= request()->id;
		$json_data 	= array();
		$table 		= DB::table('app_schedule_training')
					  ->select('*')
					  ->where('id_h',$id)
					  ->orderby('desc')
					  ->get();
		foreach ($table as $row) {
			$json_array = "<option value='".$row->id."'>".$row->desc."</option>" ;
			array_push($json_data,$json_array);
		}
		return json_encode(str_replace('</option>','',$json_data));
	}

	public static function register_ok()
	{
		
		$data       = request()->data;
		$adddate    = date("Y-m-d H:i:s");
		$json_array = json_decode($data, TRUE);
		foreach ($json_array as $key => $val){
			$insert = DB::table('users')
					  ->insert([
					  	'name' 			=>$val['nama'],
					  	'email' 		=>$val['email'],
					  	'phone' 		=>$val['phone'],
					  	'no_identitas' 	=>$val['no_identitas'],
					  	'id_provinsi' 	=>$val['prop'],
					  	'id_kota' 		=>$val['kota'],
					  	'id_kec' 		=>$val['kec'],
					  	'id_kel' 		=>$val['kel'],
					  	'alamat' 		=>$val['alamat'],
					  	'id_kursus' 	=>$val['id_kursus'],
					  	'id_jadwal' 	=>$val['id_jadwal'],
					  	'adddate' 		=>$adddate
					]);
			$confirm1	=1;
			$id 		= DB::table('users')->where('adddate',$adddate)->pluck('id')->first();
		}
		if ($confirm1==1){
			$t_array['sid'] 		= $id;
            $t_array['msg_type'] 	='success';
            $t_array['msg'] 		="Berhasil Mendaftar";
            $t_array['refresh'] 	=route('daftar');
        }
        return $t_array;
		
		
	}
}