<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PertanyaanModel {

    public static function getAll(){
        return DB::table('pertanyaan')->get();
    }

    //array associative [key][value]
    public static function insertData($data){
        unset($data["_token"]);
        $data['created_at'] = Carbon::now(); //->toDateString() Equivalent: ->format('Y-m-d');
        $new_item = DB::table('pertanyaan')->insert($data);
        return $new_item;
    }

    public static function findById($id){

        $item = DB::table('pertanyaan')->where('id', '=', $id)->first();
        return $item;
    }

    public static function deleteDataById($id){
        $item = DB::table('pertanyaan')->where('id', '=', $id)->delete();
        return $item;
    }

    public static function updateDataById($data, $id){
        $data['updated_at'] = Carbon::now();
        $item = DB::table('pertanyaan')->where('id', '=', $id)->update(['judul' => $data['judul'], 'isi' => $data['isi'], 'updated_at' => $data['updated_at']]);

        return $item;
    }
}
