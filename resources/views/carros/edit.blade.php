@include('header')
<body>
    <div class="container">
      <h2>Editar</h2><br  />
        <form method="post" action="{{action('CarroController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Modelo">Modelo:</label>
            <input type="text" class="form-control" name="modelo" value="{{$carro->modelo}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Marca">Marca</label>
              <input type="text" class="form-control" name="marca" value="{{$carro->marca}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Año">año:</label>
              <input type="text" class="form-control" name="año" value="{{$carro->año}}">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="Precio">Precio:</label>
                <input type="text" class="form-control" name="precio" value="{{$carro->precio}}">
              </div>
            </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button>
          </div>
        </div>
      </form>
    </div>
  </body>
