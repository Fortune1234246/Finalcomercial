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
        <th>Modelo</th>
        <th>Marca</th>
        <th>Año</th>
        <th>Precio</th>
      </tr>
    </thead>
    <tbody>

      @foreach($carros as $carro)
      @php
        $date=date('Y-m-d', $carro['date']);
        @endphp
      <tr>
        <td>{{$carro['id']}}</td>
        <td>{{$carro['modelo']}}</td>
        <td>{{$carro['marca']}}</td>
        <td>{{$carro['año']}}</td>
        <td>{{$carro['precio']}}</td>

        <td><a href="{{action('CarroController@edit', $carro['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('CarroController@destroy', $carro['id'])}}" method="post">
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
