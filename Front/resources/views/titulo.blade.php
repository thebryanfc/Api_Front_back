
<div class="table-responsive">
    <br>

    <div class="d-flex border-bottom mb-3">
        <div class="me-auto p-2">
            <h1 class="text-left fs-4">Lista Títulos registrados</h1>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">estado</th>
                <th scope="col">descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($titulo as $titu)
            <tr scope="row">
                <td>{{ $titu['id'] }}</td>
                <td>{{ $titu['nombre'] }}</td>
                <td>{{ $titu['estado'] }}</td>
                <td>{{ $titu['descripcion'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>