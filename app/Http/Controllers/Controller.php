<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\api\WeatherController;

class Controller extends BaseController
{
    public function index() {
        // 

        $response = array(
            'date' => 'date',
            'text' => 'text',
            'min' => 'min',
            'max' => 'max',
            'probability' => 'probability',
            'precipitation' => 'precipitation',
            'state' => 'state'
        );

        return view('index', $response); //$response;
    }

    public function consumirApi() {
        
        $json = Http::get('http://127.0.0.1:8000/api/weather');

        $data = json_decode($json);
        foreach ($data as $obj) {
            $response = array(
                'date' => $obj->date,
                'text' => $obj->text,
                'min' => $obj->min,
                'max' => $obj->max,
                'probability' => $obj->probability,
                'precipitation' => $obj->precipitation,
                'state' => $obj->state
            );
        }

        return $response;
    }

}
