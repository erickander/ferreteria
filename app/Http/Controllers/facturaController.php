<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\factura;
use App\Clientes;
use App\Productos;
use App\Detalle; 
use PDF;
use Auth;
class facturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //dd(Auth::user()->usu_id);
        //dd('ok');
        $data=$req->all();
        $desde=date('Y-m-d');
        $hasta=date('Y-m-d');

        if(isset($data['desde'])){ 
            $desde=$data['desde'];
            $hasta=$data['hasta'];
        }

        // $factura=DB::select("  
        //     SELECT * FROM Factura f 
        //      JOIN clientes c 
        //     ON f.cli_id=c.cli_id
        //      WHERE f.fac_fecha BETWEEN '$desde' AND '$hasta' 
        //      ");


        $factura=DB::select("
SELECT 
f.fac_numero_de_factura,
f.cli_id,
f.fac_fecha,
f.fac_id,
f.fac_iva,
f.fac_descuento,
f.fac_estado,
f.fac_observaciones,
SUM(fd.dat_VT) AS total,
c.*
FROM factura f 
JOIN clientes c ON f.cli_id=c.cli_id
JOIN detalle_facturas fd ON f.fac_id=fd.fac_id
WHERE f.fac_fecha BETWEEN '$desde' AND '$hasta' 
GROUP BY f.fac_numero_de_factura,f.cli_id,f.fac_fecha,f.fac_id,f.fac_estado

            ");

        if(isset($data['btn_pdf'])){
        $data=['factura'=>$factura];
        $pdf=PDF::loadView('factura.reporte',$data);
        return $pdf->stream('reporte.pdf');
        }
        
        return view('factura.index')
        ->with('factura',$factura)
        ->with('desde',$desde)
        ->with('hasta',$hasta)
        ;
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
        detalle::destroy($id);
         //dd($id);
        return redirect(route('factura.destroy'));
    }
    public function detalle(Request $request)
    {
        $datos=$request->all();
        $fac_id=$datos['fac_id'];
        if (isset($datos['btn_detalle'])=='btn_detalle') {
            //dd('etale');
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
    public function factura_anular ($fac_id){
        DB::update("UPDATE factura SET fac_estado=2 where fac_id=$fac_id");
        return redirect(route('factura.index'));
        }
}
