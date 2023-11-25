<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reportes</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        .contenedor {
            max-width: 780px;
            background-color: #fff;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            /*align-items: center; /* Centrar horizontalmente */
            justify-content: center; /* Centrar verticalmente */
        }


        .outputs{
            font-weight: 100;
        }

        .comite{
            margin-left: 100px;
            margin-bottom: 0px;
        }

        #myChart {
            max-width: 300px;
            max-height: 300px;
            width: 100%; /* Asegura que ocupa el ancho máximo permitido */
            height: auto; /* Ajusta la altura automáticamente */
            display: block; /* Asegura que sea un elemento de bloque */
            margin: auto; /* Centra horizontal y verticalmente */
        }


        h2{
            text-align: center;
        }

        h4, .subs{
            margin: 3px;
        }

        .table-column {
            flex: 1; /* Take up 50% of the container */
        }

        /*tabla*/
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px auto;
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        /*Bordes*/
        table,th,td {
            color: #000000;
            border: 2px solid  #000000;
        }
        /*Espaciado*/
        th,td {
            padding: 2px;
            text-align: left;
        }
        /*Encabezado*/
        th {
            background-color: #c4babada;
            color: black;
        }
        /* Color de fondo para filas pares */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        /* Estilo para la primera columna (si es necesario) */
        td:first-child {  
            background-color: #c4babada;
        }

        #graf{
            text-align: center;
        }

        .subs {
            margin-left: 70px;
            margin-bottom: 2px;
        }

        input[type="submit"] {
                background-color: #04243C;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 3px;
                cursor: pointer;
                margin-bottom: 10px;
                z-index: 999;
                position: fixed;
                top: 350px;
                right: 100px;
                border: none;
                border-radius: 3px;
                cursor: pointer;
        }
        


    </style>
</head>
<body>
    <div class="contenedor">

        <h2>Reporte de la elección</h2>
        <br><br>

        <h4 >Datos la elección</h4>

        <h4 class="subs">Título de la elección: <label class="outputs">{{$registro->nombre}}</label></h4 class="subs">
        
        <h4 class="subs">Fecha de la elección: <label class="outputs">{{ date('d/m/Y', strtotime($registro->fecha)) }}</label></h4 class="subs">
        
        <h4 class="subs">Motivo de la elección: <label class="outputs">{{$registro->motivo}}</label></h4 class="subs">
        
        <h4 class="subs">Cargo de autoridad: <label class="outputs">{{$registro->cargodeautoridad}}</label></h4 class="subs">
        
        <h4 class="subs">Gestión: <label class="outputs">{{$registro->gestioninicio}} - {{$registro->gestionfin}}</label></h4 class="subs">
        
        <h4 class="subs">Tipo de elección: <label class="outputs">{{ $registro->tipodeeleccion }}</label></h4 class="subs">
        
        <h4 class="subs">Descripción: <label class="outputs">{{$registro->descripcion}}</label></h4>

        <br>
        <h4>Datos de votantes y mesas</h4>

        <h4 class="subs">Tipo de votantes: <label class="outputs">{{ $registro->tipodevotantes }}</label></h4 class="subs">
        <h4 class="subs">Número de votantes habilitados: <label class="outputs">{{$nroVotantes}}</label></h4 class="subs">
        <h4 class="subs">Número de mesas habilitadas: <label class="outputs">{{ $mesas }}</label></h4 class="subs">


        <h4 style="font-weight: bold">Resultados</h4>

        <h4 class="subs">Número de votos: <label class="outputs">{{$suma}}</label></h4 class="subs">
        {{--<h4 class="subs">Número de No votantes: <label class="outputs">{{$nroVotantes-$suma}}</label></h4 class="subs">--}}
        <h4 class="subs">Frente Ganador: <label class="outputs">{{$frenteGanador}}</label></h4 class="subs">

        <div class="container">
            <div class="table-column">
                <table style="font-size: smaller;">
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Nombre del frente</th>
                            <th>Nro de votos</th>
                            <th>Porcentaje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($registro->nombrefrente1)
                            <tr>
                                <td>1</td>
                                <td>{{ $registro->nombrefrente1 }}</td>
                                <td>{{ $suma != 0 ? $registro->votosfrente1: 0 }}</td>
                                <td>{{ $suma != 0 ? $registro->votosfrente1 / $suma * 100 : 0 }}%</td>
                            </tr>
                        @endif
                
                        @if($registro->nombrefrente2)
                            <tr>
                                <td>2</td>
                                <td>{{ $registro->nombrefrente2 }}</td>
                                <td>{{ $suma != 0 ? $registro->votosfrente2 : 0 }}</td>
                                <td>{{ $suma != 0 ? $registro->votosfrente2 / $suma * 100 : 0 }} %</td>
                            </tr>
                        @endif
                
                        @if($registro->nombrefrente3)
                            <tr>
                                <td>3</td>
                                <td>{{ $registro->nombrefrente3 }}</td>
                                <td>{{ $suma != 0 ? $registro->votosfrente3 : 0}}</td>
                                <td>{{ $suma != 0 ? $registro->votosfrente3 / $suma * 100 : 0 }} %</td>
                            </tr>
                        @endif
                
                        @if($registro->nombrefrente4)
                            <tr>
                                <td>4</td>
                                <td>{{ $registro->nombrefrente4 }}</td>
                                <td>{{ $suma != 0 ? $registro->votosfrente4 : 0}}</td>
                                <td>{{ $suma != 0 ? $registro->votosfrente4 / $suma * 100 : 0 }} %</td>
                            </tr>
                        @endif

                        <tr>
                            <td>Total</td>
                            <td></td>
                            <td>{{$suma}}</td>
                            <td>{{ $suma != 0 ? $suma / $suma * 100 : 0 }} %</td>
                        </tr>

                    </tbody>
                </table>
                
            </div>
        </div>

        <h4 id="graf">Gráfico de frentes</h4>
        <br>
        
        <canvas id="myChart"></canvas>

        <h4>Comité Electoral</h4>
    
        <div class="container">
            <div class="table-column">
                <table>
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>CI</th>
                            <th>Cargo en el comité:</th>
                            <th>Profesión</th>
                            <th>Cargo en la UMSS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comites as $comite)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $comite->apellidoPaterno }} {{ $comite->apellidoMaterno }}</td>
                                <td>{{ $comite->nombreMiembro }}</td>
                                <td>{{ $comite->CI }}</td>
                                <td>{{ $comite->cargoComite }}</td>
                                <td>{{ $comite->profesion }}</td>
                                <td>{{ isset($comite->cargoUMSS) ? $comite->cargoUMSS : 'Sin dato' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>

        <h4>Lista de votantes</h4>
        <br>

        <h4 >Número de votantes habilitados: <label class="outputs">{{$nroVotantes}}</label></h4>

        <div class="container">
            <div class="table-column">
                <table>
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Código Sis</th>
                            <th>CI</th>
                            <th>Facultad</th>
                            <th>Carrera</th>
                            <th>Celular</th>
                            <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($votantes as $votante)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $votante->apellidoPaterno }} {{ $votante->apellidoMaterno }}</td>
                                <td>{{ $votante->nombres }}</td>
                                <td>{{ $votante->codSis }}</td>
                                <td>{{ $votante->CI}}</td>
                                <td>{{ $votante->facultad }}</td>
                                <td>{{ $votante->carrera }}</td>
                                <td>{{ $votante->celular }}</td>
                                <td>{{ $votante->tipoVotante }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>


        <h4>Lista de frentes</h4>

        <div class="container">
            <div class="table-column">
                <table>
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Nombre de Frente</th>
                            <th>1er Candidato</th>
                            <th>2do Candidato</th>
                            <th>3er Candidato</th>
                            <th>4to Candidato </th>
                            <th>Cargo de Postulación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($frentes as $frente)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $frente->nombrefrente }}</td>
                                <td>{{ $frente->nombrecandidato1 }}</td>
                                <td>{{ $frente->nombrecandidato2 }}</td>
                                <td>{{ $frente->nombrecandidato3 }}</td>
                                <td>{{ $frente->nombrecandidato4 }}</td>
                                <td>{{ $frente->cargopostulacion }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>

        

        

    </div>  

    {{--<div class="botonImprimir">
        <input type="submit" value="{{ 'Imprimir' }}" onclick="imprimirBoleta()" id="botonImprimir">
    </div>--}}
    
    <script>
        function imprimirBoleta() {
            document.getElementById('botonImprimir').style.display = 'none';
            window.print();

            setTimeout(function() {
                document.getElementById('botonImprimir').style.display = 'block';
            }, 1000);
        }
    </script>

    

    
    
</body>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var data = @json($data);

        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: data.labels,
                datasets: [{
                    data: data.values,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(255, 255, 0, 0.8)',  
                        'rgba(169, 169, 169, 0.8)',
                    ],
                }]
            },
            options: {
                responsive: false,
                maintainAspectRatio: false,
                width: 300,
                height: 300,
            }
        });
    </script>


</html>



