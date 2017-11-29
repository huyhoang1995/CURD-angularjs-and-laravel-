<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lop;
class LopController extends Controller
{
	public function index(){
		return view('sinh_vien/class');//trả về trang chính của page lớp
	}

	public function getlayout(){
		return view('sinh_vien.layout.layouts');// trả về layout
	}
	public function getlist(Request $request){

		return Lop::orderby('id')->get(); //lấy csdl qua phương thức get (id)

	}

	public function delete($id){

		$status = Lop::find($id)->delete();

		return response()->json(["status" => $status]);
	}

	public function getadd(Request $request){

		Lop::getadd($request->all());
	}

	public function update(Request $request,$id){ //request luôn đứng trước những giá trị khác

		$data = $request->all();
		Lop::updateTodo($id,$data);
	}
}
