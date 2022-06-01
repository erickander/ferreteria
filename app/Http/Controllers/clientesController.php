<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\permisos;
use DB;
class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$clientes=clientes::all();
        $clientes=DB::select("
            SELECT * FROM clientes c JOIN permisos p 
            ON c.per_id=p.per_id ");
        return view('clientes.index')
        ->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        clientes::create($data);
        return redirect(route('clientes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $clientes=clientes::find($id);
         return view("clientes.edit")
         ->with('clientes',$clientes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           $c=clientes::find($id);
        $c->update($request->all());
        return redirect(route('clientes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factura=DB::select("SELECT * FROM factura where cli_id=$id");
        if (empty($factura)) {
             $sms="Eliminado Correctamente";
             clientes::destroy($id);

        }else{
           $sms="No se puede eliminar ya que tiene factura";
        }
         //Session::put('sms',$sms);
        echo "<h1 style='background:red;color:white'>
        $sms
        <a href='".route('clientes')."'>Volver a Clientes</a>

        </h1>";
    }
} 
