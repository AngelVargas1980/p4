<?php

namespace App\Http\Controllers;

use App\Models\Tipo_mercancia;
use Illuminate\Http\Request;

class TipoMercanciaController extends Controller
{

    public function indextm()
    {
        $datos = Tipo_mercancia::orderBy('id', 'asc')->paginate(3);
        return view('tipoMercancia/inicio-tipo_mercancia', compact('datos'));
    }


    public function createtm()
    {
        return view('tipoMercancia/agregar-tipo_mercancia');
    }


    public function storetm(Request $request)
    {
        //Sirve para guardar datos en la base de datos
        $tmercancias = new Tipo_mercancia();
        $tmercancias->id = $request->post('id');
        $tmercancias->descripcion = $request->post('descripcion');
//        $tmercancias->direccion = $request->post('direccion');

        $tmercancias->save();

        return redirect()->route("tmercancias.indextm")->with("success", "Agregado con exito!");

    }


    public function showtm($id)
    {
        //Servira para obtener un registro de nuestra tabla
        $tmercancias = Tipo_mercancia::find($id);
        return view("tipoMercancia/eliminar-tipo_mercancia", compact('tmercancias'));
    }


    public function edittm($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $tmercancias = Tipo_mercancia::find($id);
        return view("tipoMercancia/actualizar-tipo_mercancia", compact('tmercancias'));
        //echo $id;
    }


    public function updatetm(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $tmercancias = Tipo_mercancia::find($id);
        $tmercancias->id = $request->post('id');
        $tmercancias->descripcion = $request->post('descripcion');
//        $tmercancias->direccion = $request->post('direccion');
//        $predios->fecha = $request->post('fecha');
        $tmercancias->save();

        return redirect()->route("tmercancias.indextm")->with("success", "Actualizado con exito!");

    }

    public function destroytm($id)
    {
        //Elimina un registro
        $tmercancias = Tipo_mercancia::find($id);
        $tmercancias->delete();
        return redirect()->route("tmercancias.indextm")->with("success", "Eliminado con exito!");
    }
}
