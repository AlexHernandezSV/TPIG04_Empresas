<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ApiController extends Controller
{
    public function getData($ofertaId)
{
    $client = new Client([
        'verify' => false,
    ]);

    try {
        // Obtener todos los datos
        $response = $client->get('https://deploytpi-fce1a5511732.herokuapp.com/apicurriculum');
        $data = json_decode($response->getBody(), true);

        // Filtrar los datos por el id de la oferta
        $filteredData = array_filter($data, function ($item) use ($ofertaId) {
            return $item['ofertaaplicada'] == $ofertaId;
        });

        // Retorna la vista con los datos filtrados
        return view('postulados.postulados_consulta', ['postfact' => $filteredData]);
    } catch (RequestException $e) {
        if (view()->exists('error')) {
            return view('error', ['message' => $e->getMessage()]);
        } else {
            return $e->getMessage();
        }
    }
}

    public function revisar($id)
    {
        $client = new Client([
            'verify' => false, // Ignorar la verificación del certificado SSL
        ]);

        try {
            $response = $client->get("https://deploytpi-fce1a5511732.herokuapp.com/apicurriculum");
            $data = json_decode($response->getBody(), true);
            $ofertas = collect($data)->firstWhere('id', $id);
            return view('postulados.postulado_datos', ['ofertas' => $ofertas]);

        } catch (\Exception $e) {
            if (view()->exists('error')) {
                return view('error', ['message' => $e->getMessage()]);
            } else {
                return $e->getMessage();
            }
        }
    }

}
