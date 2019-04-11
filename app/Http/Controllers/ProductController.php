<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModels;
use Illuminate\Support\Facades\Validator;
use DB;
class ProductController extends Controller
{
	public function product_table()
	{
		$data['product'] 	= ProductModels::get_product();
		$data['desc'] 		= ProductModels::get_desc();
		return view('product/table',$data);
	}

	public function product_form()
	{
		return view('product/form');
	}

	public function product_edit()
	{
		$data['get'] 	= ProductModels::get_product();
		return view('product/form',$data);
	}

	public function product_add()
	{
		return ProductModels::product_add_ok();
	}

	public function update_product_h()
	{
		return ProductModels::update_product_h_ok();
	}
}
