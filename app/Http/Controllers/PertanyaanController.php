<?php

namespace App\Http\Controllers;

use App\Models\PertanyaanModel;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    //
    public function create(){
        return view('pertanyaan.form');
    }

    public function store(Request $request){
        $newItems = PertanyaanModel::insertData($request->all());
        return redirect('/pertanyaan');
    }

    public function index(){
        $items = PertanyaanModel::getAll();
        return view('pertanyaan.index',compact('items'));
    }

    public function show($id){
        $items = PertanyaanModel::findById($id);
        return view('pertanyaan.show', compact('items'));
    }
}
