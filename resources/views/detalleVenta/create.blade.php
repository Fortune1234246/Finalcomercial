@include('header')

							<section id="content" class="main">

								@if (Auth::guest())
								<script>alert('Ingrese Credenciales')</script>
								@else
								<h1>Nuevo detalle venta</h1>
								<form method="POST" action="{{route('detalleVenta.store')}}">
									{!!csrf_field()!!}
									<p><label for="fecha">Fecha de compra
									<input type="text" name="fecha" value="{{old('fecha')}}">
									{!!$errors->first('fecha','<span class=error>:message</span>')!!}
									</label>
									</p>

									<select name="idcliente" >
										@foreach ($venta as $ventas)
										  <option  value="{{ $ventas->id }}">{{ $ventas->cliente }}</option>
										@endforeach
									</select>

									<br>
									<br>


									@foreach ($carro as $car)
										<input type="checkbox" name="category_id[]" value="{{ $car->id }}">{{ $car->modelo }}
									@endforeach
									<br>
									<br>

									<input  class="btn btn-primary" type="submit" value="Enviar">
								</form>
								@endif
</section>
