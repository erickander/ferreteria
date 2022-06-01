<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\permisos;
use DB;

class permisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $permisos=permisos::all();
        return view('permisos.index')
        ->with('permisos',$permisos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('permisos.create');
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
        //dd($data);
        permisos::create($data);
        return redirect(route('permisos'));
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
        $permisos=permisos::find($id);
         return view("permisos.edit")
         ->with('permisos',$permisos);
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
          $Per=permisos::find($id);
        $Per->update($request->all());
        return redirect(route('permisos'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $factura=DB::select("SELECT * FROM clientes where per_id=$id");
        if (empty($factura)) {
             $sms="Eliminado Correctamente";
             permisos::destroy($id);

        }else{
           $sms="No se puede eliminar ya que tiene factura";
        }
         //Session::put('sms',$sms);
        echo "<h1 style='background:red;color:white'>
        $sms
        <a href='".route('permisos')."'>Volver a permisos</a>

        </h1>";
    }
}
 