<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingModels;
use Illuminate\Support\Facades\Validator;
use DB;
class TrainingController extends Controller
{
	// catagories Training
	public function training_catagories_table()
	{
		$table      =TrainingModels::get_catagories();
        return view('training_catagories/table', compact('table'));
	}

	public function training_catagories_form()
	{
		return view('training_catagories/form');
	}

	public function training_catagories_save()
	{
		return TrainingModels::save_catagories_ok();
	}

	public function training_catagories_edit()
	{
		$data['get'] 		= TrainingModels::get_catagories();
		return view('training_catagories/form',$data);
	}

	// sub Catagories Training
	public function sub_training_catagories_table()
	{
		return view('sub_training/table');
	}

	public function sub_training_catagories_list()
	{
		return TrainingModels::get_sub_list();
	}

	public function sub_training_catagories_form()
	{
		$data['katagori'] 	= TrainingModels::get_catagories();
		return view('sub_training/form',$data);
	}
}