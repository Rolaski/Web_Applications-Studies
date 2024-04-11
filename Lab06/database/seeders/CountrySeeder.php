<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;


class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Country::truncate();
        });

        Country::insert(
            [
                [
                    'name' => 'USA', 'code' => 'US', 'currency' => 'dolar amerykański',
                    'area' => '9833520', 'language' => 'angielski',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Chiny', 'code' => 'CN', 'currency' => 'yuan',
                    'area' => '9596960', 'language' => 'mandaryński',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Austria', 'code' => 'AT', 'currency' => 'euro',
                    'area' => '83879', 'language' => 'niemiecki',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Tanzania', 'code' => 'TZ', 'currency' => 'szyling tanzański',
                    'area' => '947300', 'language' => 'suahili',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Polska', 'code' => 'PL', 'currency' => 'złoty',
                    'area' => '38179800', 'language' => 'polski',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Australia', 'code' => 'AU', 'currency' => 'dolar australijski',
                    'area' => '7686850', 'language' => 'angielski',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
    }
}
