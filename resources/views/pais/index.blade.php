<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Países</title>
  </head>

  <body>
    <div class="container mt-5">
        <h1 class="text-primary">Lista de Países</h1>
        <a href="{{ route('paises.create') }}" class="btn btn-success mb-3">Add</a>

        <div class="table-responsive shadow-sm rounded">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre del País</th>
                        <th scope="col">Nombre del Municipio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paises as $pais)
                    <tr>
                        <th scope="row">{{ $pais->pais_codi }}</th>
                        <td>{{ $pais->pais_nomb }}</td>
                        <td>{{ $pais->muni_nomb }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('paises.edit', ['pais' => $pais->pais_codi]) }}" class="btn btn-info btn-sm">Edit</a>

                                <form action="{{ route('paises.destroy', ['pais' => $pais->pais_codi]) }}" method="POST" style="display: inline;">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
