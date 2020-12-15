<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class me extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mes')->insert([
            'firstname' => 'Jérémie',
            'lastname' => 'Cyrille',
            'email' => 'jeremie.cyrille@icloud.com',
            'phone' => '+33 07 64 84 56 88',
            'adress' => '2bis rur lamé',
            'city' => 'Saint Germains en Lay',
            'country' => 'France',
            'birth_date' => '2000/12/07',
            'description' => '
            Hello, my name is Jérémie CYRILLE, I have just turned 20, and I am passionate about computers.<br><br>
            I am from Martinique, and I decided at the start of my high school to take a bac S (obtained with honors) to pursue studies in computer science, internationally.<br>

            At the age of 17, I joined the University of Quebec and Trois-Rivières to obtain a diploma in Computer Science (Electrical and Computer Engineering, then bachelors degree in Computer Science). The crisis engendered by COVID-19 disrupted the Quebec university, which led me to look for another course to complete the 2 years of studies validated in Quebec.<br><br>
            
            I chose ETNA, which won me over with the combination of robust theoretical training and professional, immediate and intensive application of this training. So I joined ETNA to finalize my Bachelor in Computing Science, which I will complete with a Master in the same field.'
        ]);
    }
}
