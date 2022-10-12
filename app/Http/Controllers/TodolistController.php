<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function showData(){
        $shows = Todolist::paginate(5);
        return view('show', compact('shows'));
    }
    public function addData(){
        return view('add');
    }

    public function store(Request $request){
        $list = Todolist::create([
            "name" => $request->name,
            "status" => $request->status
        ]);

        return redirect()->route('show.data');
    }

    public function edit($id){
        $editData = Todolist::find($id);
        return view('edit_data', compact('editData'));
    }

    public function update(Request $request, Todolist $list){
        $list->update([
            "name" => $request->name,
            "status" => $request->status
        ]);

        return redirect()->route('show.data');
    }

    public function delete($id){
        $editData = Todolist::find($id);
        $editData->delete();
        return redirect('/');
    }

}
