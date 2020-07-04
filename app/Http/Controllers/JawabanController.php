<?php

namespace App\Http\Controllers;

use App\Models\JawabanModel;
use Illuminate\Http\Request;


class JawabanController extends Controller
{

    public function store(Request $request, $id){
        $newItems = JawabanModel::insertData($request->all(), $id);
        $redirect = '/jawaban/' . $id;
        return redirect($redirect);
    }

    public function index($id){
        $items = JawabanModel::findById($id);
        $items= [$items, $id];

        return view('jawaban.index', compact('items'));

    }

}
