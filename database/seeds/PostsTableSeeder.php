<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();

        Db::table('posts')->insert([
        	[
	        	'author_id' => 1,
	        	'title' => 'Example post 1',
	        	'slug' => 'example-post-1',
	        	'body' => 'Exmple post body',
	        	'published_at' => date('y-m-d H:i:s', strtotime('now'))
        	],

        	[
	        	'author_id' => 2,
	        	'title' => 'Example post 2',
	        	'slug' => 'example-post-2',
	        	'body' => 'Exmple post body',
	        	'published_at' => date('y-m-d H:i:s', strtotime('+ 2 weeks'))
        	],

        	[
	        	'author_id' => 3,
	        	'title' => 'Example post 3',
	        	'slug' => 'example-post-3',
	        	'body' => 'Exmple post body',
	        	'published_at' => null
        	] 
        ]);
    }
}
