<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\factura;
use App\Clientes;
use App\Productos;
use App\Detalle;
use PDF;
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
        ->with('productos',$productos)
        ;
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
         $detalle=DB::select("
            SELECT * FROM detalle_facturas fd 
             JOIN productos p 
            ON fd.pro_id=p.pro_id
            WHERE fd.fac_id=$id
             ");
         return view("factura.edit")
         ->with('factura',$factura)
         ->with('clientes',$clientes)
          ->with('productos',$productos)
          ->with('detalle',$detalle);
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
    public function detalle(Request $request)
    {
        $datos=$request->all();
        $fac_id=$datos['fac_id'];
        if (isset($datos['btn_detalle'])=='btn_detalle') {
            //dd('etale');
        $datos['dat_VT']=0;
        Detalle::create($datos);
        }
        if (isset($datos['btn_eliminar'])>0 ) {
            //dd('eliminar');
            $det_id=$datos['btn_eliminar'];
            Detalle::destroy($det_id);

         }
        return redirect(route('factura.edit',$fac_id));
    }
    public function factura_pdf ($fac_id)
    {
        $factura=DB::select("
            SELECT * FROM factura f
            JOIN clientes c ON c.cli_id=f.cli_id

            WHERE f.fac_id=$fac_id
            ");
        $detalle=DB::select("
            SELECT * FROM detalle_facturas d 
            JOIN productos p ON p.pro_id=d.pro_id
            WHERE d.fac_id=$fac_id
            ");
        //dd($factura);
        $pdf=PDF::loadView('factura.pdf',['factura'=>$factura[0],'detalle'=>$detalle]);
        return $pdf->stream('factura.pdf');
    }
}
