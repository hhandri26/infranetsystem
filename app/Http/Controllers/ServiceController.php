<?php

namespace App\Http\Controllers;
use App\Models\ServiceModels;
use Illuminate\Http\Request;
use DB;
class ServiceController extends Controller
{
	public function service1_table()
	{
		$data['service1'] 	= ServiceModels::get_service1();
		$data['desc1'] 		= ServiceModels::get_desc1();
		return view('service1/table',$data);
	}

	public function service1_form()
	{
		return view('service1/form');
	}

	public function service1_edit()
	{
		$data['get'] 	= ServiceModels::get_service1();
		return view('service1/form',$data);
	}

	public function service1_add()
	{
		return ServiceModels::service1_add_ok();
	}

	public function update_service_h1()
	{
		return ServiceModels::update_service_h1_ok();
	}

	public function service2_table()
	{
		$data['service2'] 	= ServiceModels::get_service2();
		return view('service2/table',$data);
	}

	public function service2_edit()
	{
		$data['get'] 	= ServiceModels::get_service2();
		return view('service2/form',$data);
	}

	public function service2_add()
	{
		return ServiceModels::service2_add_ok();
	}

	public function service3_table()
	{
		$data['service1'] 	= ServiceModels::get_service3();
		$data['desc1'] 		= ServiceModels::get_desc3();
		return view('service3/table',$data);
	}

	public function service3_form()
	{
		return view('service3/form');
	}

	public function service3_add()
	{
		return ServiceModels::service3_add_ok();
	}

	public function service3_edit()
	{
		$data['get'] 	= ServiceModels::get_service3();
		return view('service3/form',$data);
	}

	public function update_service_h3()
	{
		return ServiceModels::update_service_h3_ok();
	}

	public function service4_table()
	{
		$data['service2'] 	= ServiceModels::get_service4();
		return view('service4/table',$data);
	}

	public function service4_edit()
	{
		$data['get'] 	= ServiceModels::get_service4();
		return view('service4/form',$data);
	}

	public function service4_add()
	{
		return ServiceModels::service4_add_ok();
	}

	public function aboutus_table()
	{
		$data['service2'] 	= ServiceModels::get_aboutus();
		return view('aboutus/table',$data);
	}

	public function aboutus_edit()
	{
		$data['get'] 	= ServiceModels::get_aboutus();
		return view('aboutus/form',$data);
	}

	public function aboutus_add()
	{
		return ServiceModels::aboutus_add_ok();
	}

}