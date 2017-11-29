<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
	protected $table ='lops';
	protected $fillable = ['id', 'ma_lop','ten_lop', 'created_at','updated_at',];

	public static function getadd($add){
		Lop::create($add);
		return true;
	}
	
	public static function updateTodo($id,$data){

		Lop::find($id)->update($data);


		return true;

	}

}
