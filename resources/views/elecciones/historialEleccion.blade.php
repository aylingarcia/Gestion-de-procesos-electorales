@extends('layouts.header_footer');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historial</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        .header {
            background-color: white;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            color: rgba(4, 36, 60, 0.99);
            font-size: 25px;
            text-align: center;
            font-weight: 400;
        }
        .titulo h1 {
            /*margin-right: 1000px;*/
            text-align: center;
        }

        .contenedor {
            /*max-width: 1300px;*/
            margin: 20px;
            margin-top: 70px ;
            margin-bottom: 80px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column; 
            align-items: center; 
            text-align: center;
            /*height: 600px; */
        }
        .entradas{
            max-width: 1000px;
            display: flex;
            justify-content: space-between;
        }
        
        .input-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        
        label {
            margin-top: 5px;
            padding-top:10px;
            font-weight: bold;
            font-size: 18px;
            color: #555;
            margin-left: 10px
        }
        select {
            width: 300px;
            padding: 10px;
            margin-left: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }
        input[type="date"],
        input[type="text"]{
            width: 300px;
            padding: 10px;
            margin-left: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }
        .generar-reporte {
            width: 200px; 
            margin: 20px auto;
            padding: 10px;
            background-color: #003770;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .generar-reporte:hover {
            background-color: #00264d;
        }
        
        .container {
            display: flex;
            max-width: 1300px;
            overflow-x: auto;
            text-align: left;
            margin-left: 10px;
        }

        .table-column {
            flex: 1; /* Take up 50% of the container */
            padding: 10px;
        }

        /*tabla*/
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        /*Bordes*/
        table,th,td {
            color: #000000;
            border: 2px solid #003770;
        }
        /*Espaciado*/
        th,td {
            padding: 8px;
            text-align: center;

        }
        /*Encabezado*/
        th {
            background-color: #E30613;
            color: white;
        }
        /* Color de fondo para filas pares */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        /* Hover sobre las filas */
        tr:hover {
            background-color: #185a9f;
        }
        /* Estilo para la primera columna (si es necesario) */
        td:first-child {  
            background-color: #c4babada;
        }

        .buttons-dentro-tabla {
            /* background-color: #04243C; */
            color: #FFF;
            border: none;
            cursor: pointer;

            text-align: center;
        }

        .formato-imagen {
            width: 30px; /* Ajusta el ancho según tus necesidades */
            height: 30px; /* Ajusta la altura según tus necesidades */
        }

        .grafico {
            padding: 5px;
            background-color: #003770;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }


        @media only screen and (max-width: 706px) {
            th,
            td {
                padding: 4px;
                font-size: 14px;
            }
            .entradas {
                flex-direction: column;
            }
            #myChart {
                margin-left: 0;
                margin-top: 20px; /* Add margin to create space between table and chart */
            }

        }

        @media only screen and (max-width: 1024px) {
            .entradas {
                flex-direction: column;
            }
            
            #myChart {
                margin: auto;
            }

            .container {
                flex-direction: column; 
            }

            .contenedor{
                margin-bottom: 200px;
            }
        }

    </style>
</head>
<body>
    <div class="contenedor">
        
        @if(isset($elecciones) && count($elecciones) > 0)
            <div class="container">
                <div class="table-column">
                    <br><br>
                    <center>
                        <h1 style="font-weight:bold">Historial de elecciones</h1>
                    </center>
                    <br><br><br>
                    
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th>Motivo</th>
                                <th>Fecha</th>
                                <th>Tipo de elección</th>
                                <th>Tipo de votantes</th>
                                <th>Nro de votantes</th>
                                <th>Frente ganador</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($elecciones as $index => $eleccion)
                                <tr class="fila-resaltada">
                                    <td>{{ $eleccion->id }}</td>
                                    <td>{{ $eleccion->nombre }}</td>
                                    <td>{{ $eleccion->motivo }}</td>
                                    <td>{{ $eleccion->fecha }}</td>
                                    <td>{{ $eleccion->tipodeeleccion }}</td>
                                    <td>{{ $eleccion->tipodevotantes }}</td>
                                    <td>{{ $datosElecciones[$index]['nroVotantes'] }}</td>
                                    <td>{{ $datosElecciones[$index]['frenteGanador'] }}</td>
                                    <td>
                                        <button class="buttons-dentro-tabla" title="Imprimir Reporte">
                                            <a href="{{ asset('storage/pdfs/eleccion_' . $eleccion->id . '.pdf') }}" target="_blank">
                                                <img src="/images/imprimir.png" alt="Imprimir" class="formato-imagen" />
                                            </a>
                                        </button>                                                                            
                                    </td>
                                </tr>
                            @endforeach
                         </tbody>
                    </table> 
                    <br><br>
                </div>
            </div>
        @else
            <h3 style="color: #185a9f;; text-align: center; padding: 10px;">Resultados Actuales: 0</h3>
        @endif
    </div>  
</body>
</html>