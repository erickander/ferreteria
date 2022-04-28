<?php

namespace App\Http\Controllers;
use App\Transacciones;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Productos;
use App\Clientes;
use App\User;


class transaccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$Transacciones=Transacciones::all();
        $Transacciones=DB::select("
            SELECT * FROM Transacciones t 
            JOIN users u 
            ON t.usu_id=u.usu_id
             JOIN productos p 
            ON t.pro_id=p.pro_id
             JOIN clientes c 
            ON t.cli_id=c.cli_id
             ");
        return view('transacciones.index')
        ->with('transacciones',$Transacciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $User=User::all();
        $productos=productos::all();
        $clientes=clientes::all();
        return view ('transacciones.create')
        ->with('users',$User)
        ->with('productos',$productos)
        ->with('clientes',$clientes);
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
        $data['usu_id']=Auth::User()->usu_id;
        Transacciones::create($data);
        return redirect(route('transacciones'));
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
        $Transacciones=Transacciones::find($id);
        $User=User::all();
         return view("transacciones.edit")
         ->with('transacciones',$Transacciones);
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
        $tra=Transacciones::find($id);
        $tra->update($request->all());
        return redirect(route('transacciones'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transacciones::destroy($id);
        return redirect(route('transacciones'));
    }
}
