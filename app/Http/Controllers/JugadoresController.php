<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugadores;
use App\Models\Posiciones;
use Illuminate\Support\Facades\Storage;
class JugadoresController extends Controller
{
    public function index()
    {
        //
        $datos['Jugador']=Jugadores::paginate(5);
        return view('Jugador.index',$datos);
    }


    public function create()
    {
        //
        $posiciones = Posiciones::all();
        return view('Jugador.create', compact('posiciones'));
    }


    public function store(Request $request)
    {
        $datosJugador = request()->except('_token');
        
        if($request->hasFile('foto')){
            $datosJugador['foto']=$request->file('foto')->store('uploads','public');
        }

        Jugadores:: insert($datosJugador);

        //return response()->json($datosJugador);
        return redirect('Jugador')->with('mensaje','Jugador Registrado con Éxito');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
        $posiciones = Posiciones::all();
        $jugador=Jugadores::findOrFail($id);
        return view('Jugador.edit', compact('jugador', 'posiciones'));
    }


    public function update(Request $request, $id)
    {
        //
        $datosJugador = request()->except(['_token','_method']);
        $posiciones = Posiciones::all();
        
        if($request->hasFile('foto')){
            $jugador=Jugadores::findOrFail($id);
            Storage::delete('public/'.$jugador->foto);
            $datosJugador['foto']=$request->file('foto')->store('uploads','public');
        }       
        
        
        Jugadores::where('id','=',$id)->update($datosJugador);
        $jugador=Jugadores::findOrFail($id);
        return view('Jugador.edit', compact('jugador', 'posiciones'));
        //return redirect('Jugador.edit', compact('jugador'))-> with('mensaje','Se Actualizaron los datos Con Éxito');
         
    }

    public function destroy($id)
    {
        //
        $jugador=Jugadores::findOrFail($id);
        
        if(Storage::delete('public/'.$jugador->foto)){
        
            Jugadores::destroy($id);
        
        }

        return redirect('Jugador')->with('mensaje','Se ha Borrado Con Éxito');
    }
}
    

