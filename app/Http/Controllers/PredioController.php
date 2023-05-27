<?php

namespace App\Http\Controllers;

use App\Models\Predio;
use Illuminate\Http\Request;

class PredioController extends Controller
{
    public function indexp()
    {
        $datos = Predio::orderBy('nombre_predio', 'asc')->paginate(5);
        return view('predio/inicio-predio', compact('datos'));
    }

    public function createp()
    {
        return view('predio/agregar-predio');
    }

    public function storep(Request $request)
    {
        //Sirve para guardar datos en la base de datos
        $predios = new Predio();
        $predios->codigo_predio = $request->post('codigo_predio');
        $predios->nombre_predio = $request->post('nombre_predio');
        $predios->direccion = $request->post('direccion');

        $predios->save();

        return redirect()->route("predios.indexp")->with("success", "Agregado con exito!");

    }

    public function showp($id)
    {
        //Servira para obtener un registro de nuestra tabla
        $predios = Predio::find($id);
        return view("predio/eliminar-predio", compact('predios'));
    }

    public function editp($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $predios = Predio::find($id);
        return view("predio/actualizar-predio", compact('predios'));
        //echo $id;
    }

    public function updatep(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $predios = Predio::find($id);
        $predios->codigo_predio = $request->post('codigo_predio');
        $predios->nombre_predio = $request->post('nombre_predio');
        $predios->direccion = $request->post('direccion');
//        $predios->fecha = $request->post('fecha');
        $predios->save();

        return redirect()->route("predios.indexp")->with("success", "Actualizado con exito!");
    }

    public function destroyp($id)
    {
        //Elimina un registro
        $predios = Predio::find($id);
        $predios->delete();
        return redirect()->route("predios.indexp")->with("success", "Eliminado con exito!");
    }
}
