<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Models\Weather;
use App\Models\Models\Locale;
use App\Models\Models\Period;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todosWeather = Weather::all();
        $todosLocale = Locale::all();
        
        $arrayJSON = array_merge(json_decode($todosLocale), json_decode($todosWeather));

        return $arrayJSON;
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $weather = DB::table('weather')
                    ->leftJoin('locales', 'weather.id', '=', 'locales.id')
                    ->where('locales.name', 'like', $name)
                    ->orderBy('date')
                    ->get();
        
        $locale = Locale::where('name', $name)
                    ->get();
        
        $arrayJSON = array_merge(json_decode($locale), json_decode($weather));
        
        return $arrayJSON;
    }

    
}
