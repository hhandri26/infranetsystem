<?php

namespace App\Http\Controllers;
use App\Models\SlideshowModels;
use App\Models\ArticleModels;
use Illuminate\Http\Request;
use DB;
class SlideshowController extends Controller
{
	public function slideshow_table()
	{
		$data = SlideshowModels::get_slideshow();
		return view('slideshow/table',compact('data'));
	}

	public function slideshow_form()
	{
		$article = ArticleModels::all();
		return view('slideshow/form',compact('article'));
	}

	public function slideshow_edit()
	{
		$data['article'] 	= ArticleModels::all();
		$data['get'] 		= SlideshowModels::get_slideshow();
		return view('slideshow/form',$data);
	}

	public function slideshow_add()
	{
		return SlideshowModels::slideshow_save_ok();
	}
}