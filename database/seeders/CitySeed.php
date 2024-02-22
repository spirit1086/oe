<?php

namespace Database\Seeders;

use App\Modules\Feedback\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $cities = [
           ['title' => 'Astana'],
           ['title' => 'Almaty'],
       ];

       foreach ($cities as $city) {
          City::updateOrCreate(['title' => $city['title']], $city);
       }
    }
}
