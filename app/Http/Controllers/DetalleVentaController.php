<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalleVenta;
use App\Carro;
use App\Venta;
use DB;

class DetalleVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $carro=Carro::all();
      $venta=Venta::all();
      $consulta = DB::table('detalle_ventas')
          ->leftJoin('carros', 'detalle_ventas.id_carro', '=', 'carros.id')
          ->leftJoin('ventas', 'detalle_ventas.id_ventas', '=', 'ventas.id')
          ->select('detalle_ventas.*','carros.*','ventas.*', 'carros.marca as marca', 'ventas.cliente as cliente')
          ->get();

          return view('detalleVenta.create', compact('consulta','venta', 'carro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $idcarro = $request->get('category_id');
      $idventa = $request->get("idcliente");
      $cont = 0;
      while($cont < count($idcarro)){
        $detalle = new detalleVenta();
        $detalle->idcliente = $idventa;
        $detalle->idcarro = $idcarro[$cont];
        $detalle->fecha = $request->get('fecha');
        $detalle->save();
        $cont=$cont+1;
    }
    return redirect()->route('DetalleController.index');
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
        //
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
        //
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
    }
}
