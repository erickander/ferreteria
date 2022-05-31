<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;
use DB;
class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $productos=productos::all();
        return view('productos.index')
        ->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos=productos::all();
        return view ('productos.create');
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
        productos::create($data);
        return redirect(route('productos'));
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
        $productos=productos::find($id);
         return view("productos.edit")
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
        $p=productos::find($id);
        $p->update($request->all());
        return redirect(route('productos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factura=DB::select("SELECT * FROM detalle_facturas where pro_id=$id");
        if (empty($factura)) {
             $sms="Eliminado Correctamente";
             productos::destroy($id);

        }else{
           $sms="No se puede eliminar ya que tiene factura";
        }
         //Session::put('sms',$sms);
        echo "<h1 style='background:red;color:white'>
        $sms
        <a href='".route('productos')."'>Volver a Productos</a>

        </h1>";
        //return redirect(route('productos',1));
    }
}
