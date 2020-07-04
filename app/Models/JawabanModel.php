<?php

namespace App\Models; // tanda '\' menunjuk class bukan directory file
use Illuminate\Support\Facades\DB; // tanda '\' menunjuk class bukan directory file
use Carbon\Carbon;

class JawabanModel {

    public static function getAll(){
        $items = DB::table('jawaban')->get();
        return $items;
    }

    //array associative [key][value]
    public static function insertData($data, $pertanyaan_id){
        unset($data["_token"]);
        $data['created_at'] = Carbon::now(); //->toDateString() Equivalent: ->format('Y-m-d');
        $data['pertanyaan_id'] = $pertanyaan_id;
        $newItem = DB::table('jawaban')->insert($data);
        return $newItem;
    }

    public static function findById($id){
        $item = DB::table('jawaban')->where('pertanyaan_id', '=', $id)->get();
        return $item;
    }
}
