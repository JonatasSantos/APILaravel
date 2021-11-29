<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\Locale;

class LocaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents('database/base/weather.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            Locale::create(array(
                'name' => $obj->name,
                'state' => $obj->state,
                'latitude' => $obj->latitude,
                'longitude' => $obj->longitude,
            ));
        }
    }
}
