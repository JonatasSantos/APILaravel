<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\Period;

class PeriodTableSeeder extends Seeder
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
            Period::create(array(
                'begin' => $obj->begin,
                'end' => $obj->end,
            ));
        }
    }
}
