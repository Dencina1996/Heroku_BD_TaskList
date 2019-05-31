<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
        	[	'task' => 'Anar a comprar',
        		'description' => 'Al Mercadona',
        		'status' => 1
        	],
        	[	'task' => 'Anar al gimnàs',
        		'description' => 'McFit',
        		'status' => 0
        	],
        	[	'task' => 'Anar a estudiar',
        		'description' => 'Esteve Terradas',
        		'status' => 0
        	],
        	[	'task' => 'Tornar a casa',
        		'description' => 'Esplugues',
        		'status' => 0
        	]
        ]);
    }
}
