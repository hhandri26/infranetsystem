<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class HomePage extends Model
{
    public static function tableinfo()
    {
    	$table = DB::table('t_info')
    			 ->select('*')
    			 ->where('id', 1)
    			 ->get();
    	foreach ($table as $row) {
    		$json_array['logo'] 		= $row->logo;
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

    public static function slideshow()
    {
    	$table = DB::table('t_slideshow')
    			 ->select('*')
    			 ->get();

    	$json_array['slider'] 	= $table;
    	return $json_array;

    }

    public static function section1()
    {
    	$json_array['sect1'] 	= 	DB::table('t_desc as a')
									->select('a.description as d_description','a.img','a.icon','a.title as d_title','b.title','b.desc as h_description')
									->leftjoin('t_desc_h as b','a.id_h','=','b.id')
									->where('a.id_h','1')
									->orderby('a.id')
									->get();
		$json_array['sect2'] 	= 	DB::table('t_desc as a')
									->select('a.description as d_description','a.img','a.icon','a.title as d_title','b.title','b.desc as h_description')
									->leftjoin('t_desc_h as b','a.id_h','=','b.id')
									->where('a.id_h','2')
									->orderby('a.id')
									->get();

		$json_array['sect3'] 	= 	DB::table('t_desc as a')
									->select('a.description as d_description','a.img','a.icon','a.title as d_title','b.title','b.desc as h_description')
									->leftjoin('t_desc_h as b','a.id_h','=','b.id')
									->where('a.id_h','3')
									->orderby('a.id')
									->get();
		$json_array['sect4'] 	= 	DB::table('t_desc as a')
									->select('a.description as d_description','a.img','a.icon','a.title as d_title','b.title','b.desc as h_description')
									->leftjoin('t_desc_h as b','a.id_h','=','b.id')
									->where('a.id_h','4')
									->orderby('a.id')
									->get();

		$json_array['gallery'] 	= 	DB::table('t_gallery')
									->select('*')
									->orderby('id')
									->get();

		return $json_array;
    }

    public static function aboutus()
    {
    	$data 	= 	DB::table('t_about_us')
					->select('*')
					->where('id','1')
					->get();
		foreach ($data as $row) {
    		$json_array['img'] 			= $row->img;
    		$json_array['title'] 		= $row->title;
    		$json_array['description'] 	= $row->decription;
    	}
		return $json_array;
    }

    public static function product()
    {
    	$json_array['product'] 	= 	DB::table('t_product as a')
									->select('a.description as d_description','a.icon','a.title as d_title','a.price','b.title','b.desc as h_description')
									->leftjoin('t_desc_h as b','a.id_h','=','b.id')
									->where('a.id_h','5')
									->orderby('a.id')
									->get();
		return $json_array;
    }
}
