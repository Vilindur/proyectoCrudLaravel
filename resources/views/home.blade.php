<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina principal del CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="mt-3 mb-4 text-center">CRUD con Laravel de las mejores músicas</h1>
    <div class="container-fluid d-flex justify-content-center align-items-center "> 
      <a href="{{url('canciones/create')}}" class="btn btn-primary mb-4">Nuevo registro</a>
    </div>
    
    <div class="container-fluid d-flex justify-content-center align-items-center">
      <div class="table-responsive">
        <table class="table table-striped table-secondary text-white">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Artista</th>
              <th scope="col">Discografía</th>
              <th scope="col">Género</th>
              <th scope="col">Fecha de Lanzamiento</th>
              <th scope="col">Precio</th>
              <th scope="col">Puntuación</th>
              <th scope="col" colspan="2">Acciones</th>
              {{-- <th scope="col">Fecha de Creación</th>
              <th scope="col">Última modificación</th> --}}
            </tr>
          </thead>

          <!-- AQUI UN BUCLE CON TANTAS FILAS COMO REGISTROS DE LA TABLA -->
          <tbody>

            <!-- Bucle para rescatar valores de mi tabla canciones -->
            @foreach($canciones as $cancion)
            <tr>
              <td>{{ $cancion->id }}</td>
              <td>{{ $cancion->nombre }}</td>
              <td>{{ $cancion->artista }}</td>
              <td>{{ $cancion->discografia }}</td>
              <td>{{ $cancion->genero }}</td>
              <td>{{ $cancion->fecha_lanzamiento }}</td>
              <td>{{ $cancion->precio }} €</td>
              <td>{{ $cancion->puntuacion }} / 5.00 pts.</td>
              <td><a href="{{ url('canciones/'.$cancion->id.'/edit') }}" class="btn btn-primary btn-sm">Editar</a></td>
              <td>
                <form action="{{ url('canciones/'.$cancion->id) }}" method="post">
                  @method("DELETE")
                  @csrf
                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>