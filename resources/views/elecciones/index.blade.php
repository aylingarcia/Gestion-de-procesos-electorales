mostrar lista de elecciones
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>Nombre de eleccion</th>
            <th>Cargo de Autoridad</th>
            <th>Gestion</th>

            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $eleccionescreadas as $elecciones)
        <tr>
            <td>{{ $elecciones->id }}</td>
            <td>{{ $elecciones->nombre }}</td>
            <td>{{ $elecciones->cargodeautoridad }}</td>
            <td>{{ $elecciones->gestion }}</td>
            <td>
                
            <a href="{{ url('/elecciones/'.$elecciones->id.'/edit') }}">
                Editar 
                <a href="{{ url('/elecciones/'.$elecciones->id.'/archivar') }}"> | Archivar</a>
        </tr>
        @endforeach
    </tbody>

</table>