<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Can;

class CrudController extends Controller
{
    //
    public function index()
    {
        $crud=Crud::all();
        return view('index',compact('crud'));
    }


    public function store(Request $request){

        Crud::create([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email

        ]);

        return redirect('/');
    }

  public function edit(Crud $crud){

    return view('update',['crud'=>$crud]);

  }

  public function update(Request $request, Crud $crud,$id){
    $crud=Crud::findorFail($id);
    $crud->update($request->all());
    return redirect('/');
  }

  public function show(Crud $crud){

    return view('show',['crud'=>$crud]);

  }

  public function destroy(Crud $crud,$id)
    {
        //
        $crud = Crud::findorFail($id);
        $crud->delete();


        return redirect()->back()->with('success','Delete item success');
    }


}
