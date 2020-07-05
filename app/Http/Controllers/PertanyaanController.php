<?php

namespace App\Http\Controllers;

use App\Models\PertanyaanModel;
use App\Models\JawabanModel;
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

    public function edit($id){
        $items = PertanyaanModel::findById($id);
        return view('pertanyaan.edit', compact('items'));
    }

    public function destroy($id){
        PertanyaanModel::deleteDataById($id);
        JawabanModel::deleteDataByPertanyaanId($id);

        return redirect('/pertanyaan');
    }

    public function update(Request $request, $id){
        PertanyaanModel::updateDataById($request->all(), $id);

        $redirect = '/pertanyaan/' . $id;
        return redirect($redirect);
    }
}
