<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Tamanio;
use App\Models\Extra;
use App\Models\CategoriaExtra;

class CoffeshopController extends Controller
{
    function venta(){
        $datos = array();

        //$c1=new \StdClass();
        //$c1->id=1;
        //$c1->nombre="Espresso Drinks";
        
        //$c2=new \StdClass();
        //$c2->id=2;
        //$c2->nombre="Brewd Coffe";

        //$c3=new \StdClass();
        //$c3->id=3;
        //$c3->nombre="Teas";

        //$datos['categorias']=array();
        //$datos['categorias'][]=$c1;
        //$datos['categorias'][]=$c2;
        //$datos['categorias'][]=$c3;

        $datos['categorias']=Categoria::all();
        $datos['extras']=Extra::all();
        $datos['categoria_extras']=CategoriaExtra::all();

        return view('venta')->with ($datos);
    }
    function productos(){
        $productos = array();
        //$p1=new \StdClass();
        //$p1->id=1;
        //$p1->nombre="Latte";
        //$p1->precio=70;
        //$p1->descripcion="Delicious milky coffee";
        //$p1->categoria=1;
        //$p1->tamanio=1;
        //$p1->foto="";

        //$p2=new \StdClass();
        //$p2->id=2;
        //$p2->nombre="Cappuccino";
        //$p2->precio=80;
        //$p2->descripcion="Rich and creamy coffee";
        //$p2->categoria=2;
        //$p2->tamanio=1;
        //$p2->foto="";

        //$p3=new \StdClass();
        //$p3->id=3;
       //$p3->nombre="Americano";
        //$p3->precio=60;
        //$p3->descripcion="Classic brewed coffee";
        //$p3->categoria=2;
        //$p3->tamanio=1;
        //$p3->foto="";

        //$p4=new \StdClass();
        //$p4->id=4;
        //$p4->nombre="Black Tea";
        //$p4->precio=50;
        //$p4->descripcion="Strong black tea";
        //$p4->categoria=3;
        //$p4->tamanio=1;
        //$p4->foto="";

        //$productos[]=$p1;
        //$productos[]=$p2;
        //$productos[]=$p3;
        //$productos[]=$p4;

        $productos=Producto::all();

        return response ()->json($productos);
    }

    function tamanios(){
        $tamanios = array();

        //$c1=new \StdClass();
        //$c1->id=1;
        //$c1->nombre="Mediano";
        
        //$c2=new \StdClass();
        //$c2->id=2;
        //$c2->nombre="Large";

        //$c3=new \StdClass();
        //$c3->id=3;
        //$c3->nombre="Venti";

        //$tamanios[]=$c1;
        //$tamanios[]=$c2;
        //$tamanios[]=$c3;

        $tamanios=Tamanio::all();

        return response()->json($tamanios);
    }

    public function guardar_orden(Request $r)
{
    return response()->json([
        'ok' => true,
        'data' => $r->all()
    ]);
}
}