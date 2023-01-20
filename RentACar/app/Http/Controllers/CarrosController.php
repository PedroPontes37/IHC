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

        $matricula=request('matricula');
        $marca=request('marca');
        $combustivel=request('combustivel');
        $lugares=request('lugares');
        $portas=request('portas');
        $preco=request('preco');

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
        $carro->preco=$preco;

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
        $preco=request('preco');


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
        $carro->preco=$preco;



        $carro->save();

        return redirect("/carros/$id")->with('mssg','Carro Alterado');

    }


    public function carrosByFiltros(Request $request)
    {

        $marcaR =request('marca');
        $combustivelR =request('combustivel');
        $lugaresR =request('lugares');
        $portasR =request('portas');
        $SearchX = Carro::where('marca', $marcaR)->where('lugares', $lugaresR)->where('portas', $portasR)->where('combustivel',$combustivelR)->get();

        $carros= $SearchX;
        if(isset($SearchX) && count($SearchX) > 0)
        {

            $carros= $SearchX;
        }
        else{
            echo '<script>alert("Nenhum carro encontrado")</script>';
        }

        return view('carros',['carros'=>$carros]);
    }


    public function oneCar(){
        $carro = Carro::inRandomOrder()->limit(1)->get();
        return view('alugueres',['carro'=>$carro]);
    }


}
