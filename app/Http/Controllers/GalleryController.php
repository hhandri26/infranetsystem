<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryModels;
use Illuminate\Support\Facades\Validator;
use DB;
class GalleryController extends Controller
{
	public function gallery_table()
	{
		$data = GalleryModels::get_gallery();
		return view('gallery/table',compact('data'));
	}

	public function gallery_form()
	{
		return view('gallery/form');
	}

	public function gallery_add()
	{
		return GalleryModels::gallery_add_ok();
	}

	public function gallery_edit()
	{
		$data['get'] 		= GalleryModels::get_gallery();
		return view('gallery/form',$data);
	}
}
