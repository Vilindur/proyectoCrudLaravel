<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de formulario del CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- TITULO DE PAGINA -->
    <h1 class="text-center mt-3 mb-5">Registrar canciones</h1>

    <!-- FORMULARIO DE DATOS -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card bg-secondary text-white border-0 rounded-3">
                    <div class="card-header bg-dark">AGREGAR NUEVA CANCIÓN</div>
                    <div class="card-body">

                        @if($errors->any())
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <p>
                                    @foreach($errors->all() as $error)
                                        <p>{{$error}}</p>
                                    @endforeach
                                </p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ url('canciones') }}" method="post">
                            @csrf
    
                            <!-- Nombre de la canción -->
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre')}}">
                            </div>
    
                            <!-- Nombre del artista -->
                            <div class="mb-3">
                                <label for="artista" class="form-label">Artista</label>
                                <input type="text" class="form-control" name="artista" id="artista" value="{{ old('artista')}}">
                            </div>
    
                            <!-- Nombre de la discografía -->
                            <div class="mb-3">
                                <label for="discografia" class="form-label">Discografía</label>
                                <input type="text" class="form-control" name="discografia" id="discografia" value="{{ old('discografia')}}">
                            </div>
    
                            <!-- Género musical -->
                            <div class="mb-3">
                                <label for="genero" class="form-label">Género musical</label>
                                <input type="text" class="form-control" name="genero" id="genero" value="{{ old('genero')}}">
                            </div>
    
                            <!-- Fecha de lanzamiento -->
                            <div class="mb-3">
                                <label for="fecha_lanzamiento" class="form-label">Fecha de lanzamiento</label>
                                <input type="date" class="form-control" name="fecha_lanzamiento" id="fecha_lanzamiento" value="{{ old('fecha_lanzamiento')}}">
                            </div>
    
                            <!-- Precio de la canción -->
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="number" step="0.01" min="0.01" class="form-control" name="precio" id="precio" value="{{ old('precio')}}">
                            </div>
    
                            <!-- Puntuación de la canción -->
                            <div class="mb-3">
                                <label for="puntuacion" class="form-label">Puntuación</label>
                                <input type="number" step="0.01" min="0.00" class="form-control" name="puntuacion" id="puntuacion" value="{{ old('puntuacion')}}">
                            </div>

                            <!-- Botón de volver -->
                            <div class="mb-3 d-inline">
                                <a href="{{ url('canciones')}}" class="btn btn-primary">Volver</a>
                            </div>

                            <!-- Botón de enviar -->
                            <div class="mb-3 d-inline">
                                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>