<!-- Vista principal (blade.php) -->
<form action="{{ route('resultados') }}" method="GET">
    <input type="text" name="query" placeholder="Buscar en PDF">
    <button type="submit">Buscar</button>
</form>

@if(isset($resultados) && $resultados)
    <h2>Resultados de la búsqueda:</h2>
    <ul>
        @foreach($resultados as $resultado)
            <li>
                {{ $resultado }}
                <a href="#" onclick="buscarEnPDF('{{ $query }}', '{{ basename($resultado) }}')">Ver PDF</a>
            </li>
        @endforeach
    </ul>
    <script>
        function buscarEnPDF(query, archivo) {
            const base_url = '{{ url("/ver-pdf/") }}';
            const url = base_url + '/' + encodeURIComponent(archivo);
            const nuevaVentana = window.open(url, '_blank');

            // Espera a que la ventana se cargue antes de enviar la búsqueda
            nuevaVentana.onload = function() {
                // Envía un mensaje con la consulta al nuevo script en la ventana emergente
                nuevaVentana.postMessage({ query: query }, '*');
            };

            // Agrega un event listener para recibir mensajes de la nueva ventana
            window.addEventListener('message', function(event) {
                // Verifica si el mensaje contiene la respuesta de la búsqueda
                if (event.data.resultados) {
                    // Aquí puedes manejar la respuesta, por ejemplo, mostrar resultados en la ventana principal
                    console.log('Resultados de la búsqueda:', event.data.resultados);
                }
            });
        }
    </script>
@else
    <p>No se encontraron resultados.</p>
@endif
