<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>tareas</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Listado de Tareas</h1>
    </div>
    <div class="container">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    Agregar Tarea
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Tarea</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('tareas.store')}}" method="POST">

                @csrf
                <div class="form-group">
                  <label for="tarea">Tarea</label>
                  <input type="text" class="form-control" placeholder="agregar tarea" name="tarea" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Estado</label>
                    <select class="form-control" id="estado" placeholder="Estado" name="estado" required>
                      <option>Seleccionar</option>
                      <option>Visible</option>
                      <option>Oculto</option>

                    </select>
                  </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
    </div>
    <br>
    <div class="container">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Tarea</th>
                <th scope="col">Estado</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($tareas as $task)

              <tr>
                <th scope="row">{{$task->id}}</th>
                <td>{{$task->tarea}}</td>
                <td>{{$task->estado}}</td>
                <td>
                    <form action="{{ route('tareas.destroy',$task->id) }}" method="POST">

                       @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
              </tr>

              @endforeach
            </tbody>

          </table>
    </div>
   <div class="container">
    @yield('contenido')
   </div>
   <div class="container text-center">
    <a href="/" class="btn btn-outline-secondary">Salir</a>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
