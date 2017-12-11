<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
        	[
        		'content' => 'hom nay la thu 2',
        		'created_at' =>  date('Y-m-d H:i:s'),
        		'updated_at' =>  date('Y-m-d H:i:s')
        	],
        	[
        		'content' => 'ngay mai la thu 3',
        		'created_at' =>  date('Y-m-d H:i:s'),
        		'updated_at' =>  date('Y-m-d H:i:s')
        	],
        	[
        		'content' => 'ngay kia la thu 4',
        		'created_at' =>  date('Y-m-d H:i:s'),
        		'updated_at' =>  date('Y-m-d H:i:s')
        	]
        ]);
    }
}
