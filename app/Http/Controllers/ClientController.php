<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $client = Cliente::all();

        // return $client;

        if($request->ajax()){
            return Nota::where('id', auth()->id())->get(); //ESTA FUNCION RETORNA SOLO LOS USUARIOS QUE ESTEN REGISTRADOS
        }else{
            return view('home');
        }  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $client = new Cliente;

        // return view(' ', compact('client'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cliente $client)
    {
        //
        // $client = Cliente::create($request->all());

        // return $client;

        $client = new Cliente();
        $client->nit = $request->nit;
        $client->razon_social = $request->razon_social;
        $client->observaciones = $request->observaciones;
        $client->save();
    
        return $client;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        //Formulario

        $client = Cliente::FindOrFail($id);

        return $client;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $client)
    {
        //
        $client->fill($request->all());

        $client->save();

        return $client;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $client = Cliente::FindOrFail($id);

        $client->delete();

        return redirect()->route(' ')->with('info', 'Cliente Eliminada exitosamente');
        
    }
}
