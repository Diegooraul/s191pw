<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class controladorVistas extends Controller
{

    public function home(){
         return view('inicio');
    }

    
    
    public function select(){
        return view('clientes');
    }
        
    public function procesarCliente(validadorCliente $peticion){
    

        //respuesta a la peticion POST
        //return 'la info del cliente llego al controlador';
        
        //redireccion mas basica
       //return redirect('/');

       //redireccion usando el apodo de la ruta
       //return redirect()->route('rutaconsultar');

       //redireccion al origen de la peticion
       //return back();

       //redireccion con valores adjuntos (variables, arreglos, etc...)
       /* $id=[['usuario'=>'1'],['usuario'=>'2']];
       return view('formulario', compact('id')); */

       //redireccion enviando msj en session (es un lugar de almacenamiento donde puedes guardar variables globales)
         $usuario= $peticion->input('txtnombre','txtapellido');
         session()->flash('exito','Se guardo el usuario: '.$usuario);
         
         return to_route('rutacacas');
        //regresamos todo lo que envia la peticion
        //return $peticion->all();
       //muestra la URL De la informacion
        //return $peticion->url();

       //muestra la ip de la peticion
       //return $peticion->ip(); 

       //muestra la ruta de la peticion
       //return $peticion->path(); 

       

    }


}
