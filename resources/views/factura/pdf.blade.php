<style >
	{
		font_family:sans_serif;
		forent_size: 12px;
	}
</style>
<h3>Factura No:{!!$factura->fac_numero_de_factura!!}</h3>
<h3>Cliente:{{$factura->cli_nombre}}</h3>
<h3>No Cedula:{{$factura->cli_cedula}}</h3>
<h3>Direccion:{{$factura->cli_direccion}}</h3>

<div style="background:#2BA0CC;text-align: :center;">Detallen Factura </div>
<table style="width:85%">
	<tr>
		<th>#</th>
		<th>Cantidad</th>
		<th>Productos</th>
		<th>Vu</th>
		<th>Vt</th>
	</tr>

@foreach($detalle as $dat)
<tr>
	<td>{{$loop->iteration }}</td>
	<td>{{$dat->dat_cantidad}}</td>
	<td>{{$dat->pro_descripcion}}</td>
	<td style="text-align: right;">{{ number_format($dat->dat_VU,2)}}</td>
	<td style="text-align: right;">{{ number_format($dat->dat_VT,2)}}</td>
	
</tr>
@endforeach
<tr>
	<td colspan="3" style="text-align: right;">Subt:</td>
</tr>
<tr>
	<td colspan="3" style="text-align:right;">Desc:</td>
</tr>
<tr>
	<td colspan="3" style="text-align:right;">Iva:</td>
</tr>
<tr>
	<td colspan="3" style="text-align:right;">Total:</td>
</tr>
</table>