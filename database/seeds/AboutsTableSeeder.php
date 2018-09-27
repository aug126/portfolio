<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'title' => 'titre 1',
            'text'  => 'lorem ipsum ...qsmdlkfj qmsldkfj qmsldkfj qmslkdf jmqsldkf j',
            'icon'  => 'fa-trash'
        ]);
        DB::table('abouts')->insert([
            'title' => 'titre 1',
            'text'  => 'lorem ipsum ...qsmdlkfj qmsldkfj qmsldkfj qmslkdf jmqsldkf j',
            'icon'  => 'fa-trash'
        ]);
        DB::table('abouts')->insert([
            'title' => 'titre 1',
            'text'  => 'lorem ipsum ...qsmdlkfj qmsldkfj qmsldkfj qmslkdf jmqsldkf j',
            'icon'  => 'fa-trash'
        ]);
        DB::table('abouts')->insert([
            'title' => 'titre 1',
            'text'  => 'lorem ipsum ...qsmdlkfj qmsldkfj qmsldkfj qmslkdf jmqsldkf j',
            'icon'  => 'fa-trash'
        ]);
        DB::table('abouts')->insert([
            'title' => 'titre 1',
            'text'  => 'lorem ipsum ...qsmdlkfj qmsldkfj qmsldkfj qmslkdf jmqsldkf j',
            'icon'  => 'fa-trash'
        ]);
    }
}
