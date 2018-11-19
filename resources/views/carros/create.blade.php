@include('header')
  <body>
    <div class="container">
      <h2>Ingreso Nuevo Carro</h2><br/>
      <form method="post" action="{{url('carros')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Modelo:</label>
            <input type="text" class="form-control" name="modelo">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Marca:</label>
              <input type="text" class="form-control" name="marca">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Año:</label>
              <input type="text" class="form-control" name="año">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Precio: </strong>
            <input class="form-control"  type="text" name="precio">
            </input>
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
