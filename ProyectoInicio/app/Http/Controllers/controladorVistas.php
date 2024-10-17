<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{

    public function home(){
         return view('inicio');
    }

    public function insert(){
        return view('formulario');
    }
    
    public function select(){
        return view('clientes');
    }
        
    public function procesarCliente(Request $peticion){

        //respuesta a la peticion POST
        //return 'la info del cliente llego al controlador';
        
        //regresamos todo lo que envia la peticion
       return $peticion->all();

       //muestra la URL De la informacion
        //return $peticion->url();

       //muestra la ip de la peticion
       //return $peticion->ip(); 

       //muestra la ruta de la peticion
       //return $peticion->path(); 

       

    }


}
