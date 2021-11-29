<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\Weather;

class WeatherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('cast')->delete();
        $json = file_get_contents('database/base/weather.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            Weather::create(array(
                'date' => $obj->date,
                'text' => $obj->text,
                'temperature_min' => $obj->temperature->min,
                'temperature_max' => $obj->temperature->max,
                'rain_probability' => $obj->rain->probability,
                'rain_precipitation' => $obj->rain->precipitation
            ));
        }
    }
}
