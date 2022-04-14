<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class pessoasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoas')->insert([
            'nome' => Str::random(10),
            'sobrenome' => Str::random(10),
            'idade' =>rand(1,99),
            'altura' =>rand(1.0,2.0),
            'sexo' => Str::random(10),
            'foto' => Str::random(10),
              ]);
    }
}
