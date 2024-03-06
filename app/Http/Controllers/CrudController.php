<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cancion;

class CrudController extends Controller
{
    //Método que muestra página principal
    public function index() {
        $canciones = Cancion::all();
        return view ('home', ['canciones' => $canciones]);
    }

    //Método que muestra el formulario para poder crear una canción
    public function create() {
        return view('create');
    }

    //Método que permite guardar implementando validacion de campos con validate
    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required|max:255',
            'artista' => 'required|max:255',
            'discografia' => 'required|max:255',
            'genero' => 'required|max:255',
            'fecha_lanzamiento' => 'required|date',
            'precio' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'puntuacion' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/']
        ]);

        $cancion = new Cancion();

        $cancion->nombre = $request->input('nombre');
        $cancion->artista = $request->input('artista');
        $cancion->discografia = $request->input('discografia');
        $cancion->genero = $request->input('genero');
        $cancion->fecha_lanzamiento = $request->input('fecha_lanzamiento');
        $cancion->precio = $request->input('precio');
        $cancion->puntuacion = $request->input('puntuacion');

        $cancion->save();
        
        return view("message", ['msg' => "Cancion agregada!"]);
    }


    //Método que muestra una canción en particular
    public function show(Cancion $cancion) {
        //
    }

    //Método para mostrar el formulario para editar
    public function edit($id) {
        $cancion = Cancion::find($id);
        return view('edit', ['cancion' => $cancion]);
    }

    //Método para guardar esta edición
    public function update(Request $request, $id) {
        $request->validate([
            'nombre' => 'required|max:255',
            'artista' => 'required|max:255',
            'discografia' => 'required|max:255',
            'genero' => 'required|max:255',
            'fecha_lanzamiento' => 'required|date',
            'precio' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'puntuacion' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/']
        ]);

        $cancion = Cancion::find($id);

        $cancion->nombre = $request->input('nombre');
        $cancion->artista = $request->input('artista');
        $cancion->discografia = $request->input('discografia');
        $cancion->genero = $request->input('genero');
        $cancion->fecha_lanzamiento = $request->input('fecha_lanzamiento');
        $cancion->precio = $request->input('precio');
        $cancion->puntuacion = $request->input('puntuacion');

        $cancion->save();
        
        return view("message", ['msg' => "Cancion modificada!"]);
    }

    //Método para eliminar el registro
    public function destroy($id) {
        $cancion = Cancion::find($id);
        $cancion->delete();

        return redirect("canciones");
    }
}
