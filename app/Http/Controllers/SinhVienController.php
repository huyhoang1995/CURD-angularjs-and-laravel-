<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sinh_vien;
use DB;
class SinhVienController extends Controller
{
	public function index(){

		// return sinh_vien::orderby('id')->get(); lấy csdl qua phương thức get
		// $sv = sinh_vien::get_sv();
		// $sinh_vien = DB::table('sinh_viens')->paginate(5);

  //       return view('sinh_vien/index', ['sinh_viens' => $sinh_vien]);
		 return view('sinh_vien/index');
	}

	public function getlist(Request $request){

		 
		return sinh_vien::orderby('id')->get(); //lấy csdl qua phương thức get (id)

	}

	public function getadd(Request $request){

		sinh_vien::getadd($request->all());
	}


	public function update(Request $request,$id){ //request luôn đứng trước những giá trị khác

		$data = $request->all();
		sinh_vien::updateTodo($id,$data);
	}


	public function delete($id){

		$status = sinh_vien::find($id)->delete();

		return response()->json(["status" => $status]);
	}	
}
