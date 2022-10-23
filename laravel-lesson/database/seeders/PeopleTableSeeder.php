<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro1',
            'mail' => 'taro1@example.com',
            'age' => 11,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'taro2',
            'mail' => 'taro2@example.com',
            'age' => 22,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'taro3',
            'mail' => 'taro3@example.com',
            'age' => 33,
        ];
        DB::table('people')->insert($param);
    }
}
