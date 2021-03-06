<?php

namespace App\Http\Controllers;
use App\Models\ArticleModels;
use Illuminate\Http\Request;
use DB;
class ArticleController extends Controller
{

	public function artikel_table()
	{
		$data = ArticleModels::get_article();
		return view('artikel/table',compact('data'));
	}

	public function artikel_form()
	{
		return view('artikel/form');
	}

	public function artikel_edit()
	{
		$data['get'] = ArticleModels::get_article();
		return view('artikel/form',$data);
	}

	public function article_add()
	{
		return ArticleModels::artikel_save_ok();
	}
}