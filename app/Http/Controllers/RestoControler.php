<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resto;

class RestoControler extends Controller
{
    //
    function index()
    {
  
    //return "all is well";
    return view('home');

    }

    function list()
    {
      //return "all is well";
    $data= Resto::all();
    return view('list',["data"=>$data]);

    }   

    function add(Request $request)
    {

      //return $request->input();
     $resto = new Resto;
     $resto -> name=$request->input('name');
     $resto -> email=$request->input('email');
     $resto -> address=$request->input('address');
     $resto -> ph=$request->input('ph');
     $resto -> save();
     $request ->session()->flash('status','Restu succusful');
     return redirect ('list');
     
    }
    
    function delete($id)
    {
    Resto::find($id)-delete();
    Session::flash('status','rest has been deleted sucessfully');
    return redirect ('list');

    }

    function edit($id){
      $data = Resto::find($id);
      return view('edit',['data'=>$data]);

    }

    function update(Request $req){
      $data = Resto::find($req->id);
      $data->name=$req->name;
      $data->email=$req->email;
      $data->address=$req->address;
      $data->ph=$req->ph;
      $data->save();
      return redirect('list');
      //return view('edit',['data'=>$data]);
      //return $req->input();

    }

}
