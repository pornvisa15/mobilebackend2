<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Userder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert(
          [
            [
                "name"=>"pornvisa",
                'password'=> md5 ("45562"),
                "email"=>"po@tsu.ac.th",
                "address"=>"pornvisa",
                "telephone"=>"455565",
            ],
            [
                "name"=>"po",
                'password'=> md5 ("45562"),
                "email"=>"mo@tsu.ac.th",
                "address"=>"pornvisa",
                "telephone"=>"4555",
            ],
            [
                "name"=>"pmo",
                'password'=> md5 ("45562"),
                "email"=>"ds@tsu.ac.th",
                "address"=>"pornvisa",
                "telephone"=>"445",
            ],
          ]
        );
    }
}
