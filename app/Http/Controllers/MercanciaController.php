<?php

namespace App\Http\Controllers;

use App\Models\Mercancia;
use Illuminate\Http\Request;

class MercanciaController extends Controller
{

    public function indexm()
    {
        $datos = Mercancia::orderBy('nombre', 'asc')->paginate(3);
        return view('mercancia/inicio-mercancia', compact('datos'));
    }


    public function createm()
    {
        return view('mercancia/agregar-mercancia');
    }


    public function storem(Request $request)
    {
        //Sirve para guardar datos en la base de datos
        $mercancias = new Mercancia();
        $mercancias->codigo = $request->post('codigo');
        $mercancias->nombre = $request->post('nombre');
        $mercancias->id_tipo_mercancia = $request->post('id_tipo_mercancia');

        $mercancias->save();

        return redirect()->route("mercancias.indexm")->with("success", "Agregado con exito!");

    }


    public function showm($id)
    {
        //Servira para obtener un registro de nuestra tabla
        $mercancias = Mercancia::find($id);
        return view("mercancia/eliminar-mercancia", compact('mercancias'));
    }


    public function editm($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $mercancias = Mercancia::find($id);
        return view("mercancia/actualizar-mercancia", compact('mercancias'));
        //echo $id;
    }


    public function updatem(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $mercancias = Mercancia::find($id);
        $mercancias->codigo = $request->post('codigo');
        $mercancias->nombre = $request->post('nombre');
        $mercancias->id_tipo_mercancia = $request->post('id_tipo_mercancia');
//        $mercancias->fecha = $request->post('fecha');
        $mercancias->save();

        return redirect()->route("mercancias.indexm")->with("success", "Actualizado con exito!");

    }


    public function destroym($id)
    {
        //Elimina un registro
        $mercancias = Mercancia::find($id);
        $mercancias->delete();
        return redirect()->route("mercancias.indexm")->with("success", "Eliminado con exito!");

    }
}
