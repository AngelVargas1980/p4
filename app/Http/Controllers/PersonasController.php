<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        //pagina de inicio
        //$datos = Personas::all();
        //$datos = Personas::orderBy('id', 'desc')->paginate(3);
        $datos = Personas::orderBy('paterno', 'asc')->paginate(25);
        return view('piloto/inicio', compact('datos'));

    }

    public function create()
    {
        //el formulario donde nosotros agregamos datos

        return view('piloto/agregar');
    }

    public function store(Request $request)
    {
        //Sirve para guardar datos en la base de datos
        $personas = new Personas();
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "Agregado con exito!");
    }

    public function show($id)
    {
        //Servira para obtener un registro de nuestra tabla
        $personas = Personas::find($id);
        return view("piloto/eliminar", compact('personas'));
    }

    public function edit($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $personas = Personas::find($id);
        return view("piloto/actualizar", compact('personas'));
        //echo $id;
    }

    public function update(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $personas = Personas::find($id);
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "Actualizado con exito!");
    }

    public function destroy($id)
    {
        //Elimina un registro
       $personas = Personas::find($id);
       $personas->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con exito!");

    }
}
