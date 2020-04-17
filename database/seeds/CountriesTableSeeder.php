<?php
namespace Database\Seeds;

use Illuminate\Database\Seeder;
use DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = base_path('database/seeds/sql/countries.sql');
        DB::unprepared(file_get_contents($sql));
    }
}
