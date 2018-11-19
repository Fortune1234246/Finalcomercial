@include('header')
<body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Fecha</th>
      </tr>
    </thead>
    <tbody>

      @foreach($ventas as $venta)

      <tr>
        <td>{{$venta['id']}}</td>
        <td>{{$venta['cliente']}}</td>
        <td>{{$venta['date']}}</td>

        <td><a href="{{action('VentasController@edit', $venta['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('VentasController@destroy', $venta['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Elliminar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
