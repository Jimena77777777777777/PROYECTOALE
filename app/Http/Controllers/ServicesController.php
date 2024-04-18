<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;


class ServicesController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth'); 
    }
    public function index(){

        $services =Services::all();
        return view('services.index', compact('services'));
    }

    public function create(){
        return view('services.create');
    }
   
    public function sendData(Request $request){

        $rules =[
            'name' =>'required|min:3'
        ];
        $messages =[
            'name.required'=> 'el nombre de sel servicio es nesesario.',
            'name.min'=> 'Deve tener mas de 3 caracteres.'
        ];

        $this->validate($request,$rules,$messages);

        $services= new Services();
        $services->name= $request->input('name');
        $services->description= $request->input('description');
        $services->save();
        $notification ='El servicio se ha creado';

        return redirect('/servicios')->with(compact('notification'));
    }

    public function edit(services $services){
        return view('services.edit',compact('services'));
    }
    public function update(Request $request, Services $services){
    $rules =[
        'name' =>'required|min:3'
    ];
    $messages =[
        'name.required'=> 'el nombre de sel servicio es nesesario.',
        'name.min'=> 'Deve tener mas de 3 caracteres.'
    ];

    $this->validate($request,$rules,$messages);

    $services->name= $request->imput('name');
    $services->description= $request->imput('description');
    $services->save();

    $notification ='EL servicio se ha actualizado';

    return redirect('/servicios')->with(compact('notification'));
    }

    public function destroy(services $services){
        $deleteName =$services->name;
        $services->delete();
        $notification ='El servicio '.$deleteName.'se ha Eliminado';

        return redirect('/servicios')->with(compact('notification'));

}
}