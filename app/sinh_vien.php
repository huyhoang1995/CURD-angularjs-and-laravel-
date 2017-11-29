<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class sinh_vien extends Model
{	
	protected $table ='sinh_viens';
	protected $fillable = [
	'id', 'ma_sv', 'ten_sv', 'email','nien_khoa','dia_chi','created_at','updated_at',
	];

	// public static function get_sv(){

	// 	return sinh_vien::get();

	// }

	public static function getadd($add){
		sinh_vien::create($add);
		
		return true;
	}

	public static function updateTodo($id,$data){

		sinh_vien::find($id)->update($data);


		return true;

	}


}
