<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $a = new User;
        $a->name = "Shahab";
        $a->id = 1;
        $a->email = "2121495@swansea.ac.uk";
        $a->save();
    }
}
