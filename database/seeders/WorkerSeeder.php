<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workers')->insert([
            'is_admin' => 1,
            'first_name' => 'John',
            'last_name' => 'Hall',
            'age' => '35',
        ]);
        DB::table('workers')->insert([
            'is_admin' => 0,
            'first_name' => 'Robin',
            'last_name' => 'Schmidt',
            'age' => '40',
        ]);
        DB::table('workers')->insert([
            'first_name' => 'Sally',
            'last_name' => 'Murphy',
        ]);
    }
}
