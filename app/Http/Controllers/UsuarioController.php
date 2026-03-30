<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use View;

class UsuarioController extends Controller
{
    function lista()
    {
        $datos=array();
        $datos['lista']=Usuario::all();
        return view('usuario.listado',$datos);
    }

    function formulario($id=0)
    {
        $datos=array();
        $datos['idrol']=Rol::all();
        if ($id==0){
            $datos['usuario']= new Usuario();
            $datos['operacion']='Agregar';
        }
        else{
            $datos['usuario']=Usuario::find($id);
            $datos['operacion']='Modificar';
        }


        //recupero la informacion del jugador a partir del id
        //$c=Jugador::find($id);
        return view('usuario.formulario')->with($datos);
    }

        function autoregistro_form(){
        $datos=array();
        return view('usuario.autoregistro')->with($datos);
    }   

    function autoregistro(Request $r){
        $context= $r->all();

        //1.-Registrar un usuario
        $Usuario=new Usuario();
                $Usuario->email=$context['email'];
                if ($context['password'] != '')
                    $Usuario->password=bcrypt($context['password']);
                
        
                $Usuario->telefono=$context['telefono'];
                $Usuario->nombre=$context['nombre'];
                $Usuario->puntos=0;
               
                
               
                $Usuario->save();
                
     

     //iniciar sesion automaticamente
     Auth ::loginUsingId($Usuario->id);
     return redirect()->route('extra');
    }

    function guardar(Request $datos)
    {
        //Recoge todos los datos del formulario
        $contex=$datos->all();
        switch($datos['operacion']){
            case 'Agregar':
                $usuario=new Usuario();
                $usuario->email=$datos['email'];
                if(($datos['password'])) {
                    $usuario->password=bcrypt($datos['password']);
                }
                $usuario->idrol=$datos['idrol'];
                $usuario->save();
            break;
            case 'Modificar':
                $usuario=Usuario::find($datos['id']);
                $usuario->email=$datos['email'];
                if($datos['password']!=''){
                    $usuario->password=bcrypt($datos['password']);
                }
                $usuario->idrol=$datos['idrol'];
                $usuario->save();
            break;
            case 'Eliminar':
                $usuario=Usuario::find($datos['id']);
                $usuario->delete();
            break;
        }

        return redirect()->route('lista_usuario');
        
       
    }
}