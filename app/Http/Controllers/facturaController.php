<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\factura;
use App\Clientes;
use App\Productos;
class facturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factura=DB::select("
            SELECT * FROM Factura f 
             JOIN clientes c 
            ON f.cli_id=c.cli_id
             ");
        return view('factura.index')
        ->with('factura',$factura);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $factura=DB::select("
            SELECT * FROM Factura f 
             JOIN clientes c 
            ON f.cli_id=c.cli_id
             ");

        $clientes=clientes::all();
        $productos=productos::all();
        return view ('factura.create')
        ->with('clientes',$clientes)
        ->with('productos',$productos);
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
        $factura=factura::create($data);
        return redirect(route('factura.edit',$factura->fac_id));
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
        $factura=factura::find($id);
        $clientes=clientes::all();
         $productos=productos::all();
         return view("factura.edit")
         ->with('factura',$factura)
         ->with('clientes',$clientes)
          ->with('productos',$productos);
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
         $fac=factura::find($id);
        $fac->update($request->all());
        return redirect(route('factura.update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        factura::destroy($id);
        return redirect(route('factura.destroy'));
    }
}
