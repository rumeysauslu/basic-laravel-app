<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class infoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('info')->insert([
          'user_id'=>1,
          'school'=>'OMU',
          'job'=>'Computer Engineer'

        ]);
    }
}
