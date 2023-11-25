<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;
use Spatie\PdfToText\Pdf as PdfToText;
use Spatie\PdfToText\Pdf;

class BusquedaController extends Controller
{
    public function mostrarFormulario()
    {
        return view('elecciones.buscador');
    }

    public function buscar(Request $request)
    {
        $query = $request->input('query');
        $directorio = public_path('storage/pdfs');

        $archivosPDF = glob($directorio . '/*.pdf');

        $resultados = [];

        foreach ($archivosPDF as $archivoPDF) {
            $contenido = file_get_contents($archivoPDF);
            if (stripos($contenido, $query) !== false) {
                $resultados[] = $archivoPDF;
            }
            
        }

       

        return view('elecciones.buscador', ['resultados' => $resultados,'query'=>$query]);
    }

    public function verPdf($archivo, Request $request)
{
    $archivoPath = public_path('storage/pdfs/' . $archivo);

    if (file_exists($archivoPath)) {
        // Obtén el contenido del PDF
        $contenido = file_get_contents($archivoPath);

        // Devuelve el contenido modificado
        return Response::make($contenido, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $archivo . '"'
        ]);
    } else {
        return response('Archivo no encontrado', 404);
    }
}
    
}
