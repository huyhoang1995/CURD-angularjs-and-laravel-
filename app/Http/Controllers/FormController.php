<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function getlayout(){
		return view('sinh_vien/layout/layouts');// trả về layout
	}
	public function modal_add(){
		return view('sinh_vien/svInfoModal');
	}
	
}
