<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'worker_id' => 1,
            'city' => 'Budapest',
            'street' => 'Kossuth',
            'number' => 15,
        ]);
        DB::table('addresses')->insert([
            'worker_id' => 2,
            'city' => 'Kecskemét',
            'street' => 'Izsáki',
            'number' => 10,
        ]);
        DB::table('addresses')->insert([
            'worker_id' => 3,
            'city' => 'Debrecen',
            'street' => 'Petőfi',
            'number' => 22,
        ]);
        DB::table('addresses')->insert([
            'worker_id' => 1,
            'city' => 'Szeged',
            'street' => 'Tisza',
            'number' => 34,
        ]);
    }
}
