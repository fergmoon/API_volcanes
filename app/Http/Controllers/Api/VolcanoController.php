<?php

namespace App\Http\Controllers\Api; //para copiar en api.php cabecera use

use App\Http\Controllers\Controller;  
use Illuminate\Http\Request;
use App\Models\Volcano;

class VolcanoController extends Controller
{    
    public function index(){

        return true;
    }

    public function create(Request $request){

        $volcano = new Volcano();

        $volcano->name = $request->input("name");
        $volcano->height = $request->input("height");
        $volcano->country = $request->input("country");
        $volcano->last_event = $request->input("last_event");

        $volcano->save();

        $message = ["message" => "Registro Exitoso!"];

        return response()->json($message);
    }


    public function read(Request $request){

        $volcanos = new Volcano();

        $data = $volcanos->all();

        return response()->json($data);
    }

    public function update(Request $request){

        $idVolcano = $request->query("id");

        $volcano = new Volcano();  // desde el modelo Volcano

        $volcanBusqueda = $volcano->find($idVolcano);

        $volcanBusqueda->name = $request->input("name");
        $volcanBusqueda->height = $request->input("height");
        $volcanBusqueda->country = $request->input("country");
        $volcanBusqueda->last_event = $request->input("last_event");

        $volcanBusqueda->save();

        $message = [
            "message"=>"Actualización Exitosa!",
            "idVolcano" =>$request->query("id"),
            "nameVolcano" => $volcanBusqueda->name, 
            "heightVolcano" => $volcanBusqueda->height,
            "countryVolcano" => $volcanBusqueda->country,
            "last_eventVolcano" => $volcanBusqueda->last_event   
    ];

        return $message;


        //OTRA OPCION PARA VER LO QUE SE VA A MODIFICAR

        // $updateVolcano = [
        //     "name" => $request->input("name"),
        //     "height" => $request->input("height"),
        //     "country" => $request->input("country"),
        //     "last_event" => $request->input("last_event"),
        // ];

        // return $updateVolcano;


    }

        public function delete(Request $request){

            $idVolcano = $request->query("id");

            $volcano = new Volcano();  // desde el modelo Volcano
    
            $volcanBusqueda = $volcano->find($idVolcano);

            $volcanBusqueda->delete();
    
            $message = [
            "message"=>"Eliminación Exitosa!",
            "idVolcano" =>$request->query("id"),
  
            ];  

        return $message;
    }












}


