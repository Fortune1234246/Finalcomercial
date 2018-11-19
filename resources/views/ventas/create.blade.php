@include('header')
  <body>
    <div class="container">
      <h2>Ingrese Nueva Venta</h2><br/>
      <form method="post" action="{{action('VentasController@index')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Cliente">Cliente:</label>
            <input type="text" class="form-control" name="cliente">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Fecha">Fecha:</label>
              <input type="text" class="form-control" name="date">
            </div>
          </div>
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-danger">Submit</button>
          </div>
      </form>
    </div>
  </body>
</html>
