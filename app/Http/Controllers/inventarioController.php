<?php

namespace App\Http\Controllers;
use App\inventario;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Proveedor;
use App\User;
use App\Productos;

class inventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $inventario=DB::select("
            SELECT * FROM inventarios i
            JOIN users u ON i.usu_id=u.usu_id
            JOIN proveedor p ON i.dor_id=p.dor_id
            JOIN productos t ON i.pro_id=t.pro_id
             ");
        return view('inventario.index')
        ->with('inventario',$inventario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $users
        // return view ('inventario.create'); 
          $User=User::all();
          $Productos=Productos::all();
          $Proveedor=Proveedor::all();
        return view ('inventario.create')
        ->with('User',$User)
        ->with('Productos',$Productos)
        ->with('Proveedor',$Proveedor);
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
        inventario::create($data);
        return redirect(route('inventario'));
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
        $inventario=inventario::find($id);
        $User=User::all();
        $Productos=Productos::all();
        $Proveedor=Proveedor::all();
         return view("inventario.edit")
        ->with('inventario',$inventario)
        ->with('User',$User)
        ->with('Productos',$Productos)
        ->with('Proveedor',$Proveedor);    
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
          $inv=inventario::find($id);
        $inv->update($request->all());
        return redirect(route('inventario')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        inventario::destroy($id);
        return redirect(route('inventario'));
    }
}
