<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use App\Http\Requests\NewCarRequest;
use App\Http\Requests\EditCarRequest;

class CarrosController extends Controller
{
    public function index(){
        $carros = Carro::all();
        return view('carros',['carros'=>$carros]);
    }

    public function show($id){
        $carro = Carro::findOrFail($id);
        return view('detalhes',['carro'=>$carro]);
    }

    public function create(){
        return view('criarCarros');
    }

     public function store(NewCarRequest $request)
    {
        // $validateData= $request->validate([
        //   'matricula'=>'required',
        //   'marca'=>'required',
        //   'combustivel'=>'required',
        //   'lugares'=>'required',
        //   'portas'=>'required',
        //   'url'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        // ]);


        $matricula=request('matricula');
        $marca=request('marca');
        $combustivel=request('combustivel');
        $lugares=request('lugares');
        $portas=request('portas');

        $url="";
        if($request->has('url')){
            $image=$request->file('url');

            $iname='car'.'_'.time();
            $folder="/img/carros/";
            $fileName=$iname.'_'.$image->getClientOriginalExtension();
            $filePath=$folder.$fileName;

            $image->storeAs($folder,$fileName,'public');
            $url="/storage/".$filePath;
        }

        $carro = new Carro();

        $carro->matricula=$matricula;
        $carro->marca=$marca;
        $carro->combustivel=$combustivel;
        $carro->lugares=$lugares;
        $carro->portas=$portas;
        $carro->url=$url;

        $carro->save();

        return redirect('/carros/create')->with('mssg','Carro Adicionado');

    }

    public function destroy($id){
        $carro= Carro::findOrFail($id);
        $carro->delete();

        return redirect('/carros');
    }

    public function edit($id){
        $carro= Carro::findOrFail($id);
        return view('criarCarros',['carro'=>$carro]);
    }


    public function update($id,EditCarRequest $request){

        $matricula=request('matricula');
        $marca=request('marca');
        $combustivel=request('combustivel');
        $lugares=request('lugares');
        $portas=request('portas');


        $changed= (request('changed')=="true")?1:0;

        $carro=Carro::findOrFail($id);



        if($changed)
        {
            $url="";
            if($request->has('url'))
            {
                $image=$request->file('url');

                $iname='car'.'_'.time();
                $folder="/img/carros/";
                $fileName=$iname.'_'.$image->getClientOriginalExtension();
                $filePath=$folder.$fileName;

                $image->storeAs($folder,$fileName,'public');
                $url="/storage/".$filePath;
            }
            $carro->url=$url;
        }



        $carro->matricula=$matricula;
        $carro->marca=$marca;
        $carro->combustivel=$combustivel;
        $carro->lugares=$lugares;
        $carro->portas=$portas;



        $carro->save();

        return redirect("/carros/$id")->with('mssg','Carro Alterado');

    }
}
