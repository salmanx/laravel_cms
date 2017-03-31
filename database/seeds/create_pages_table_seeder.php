<?php

use Illuminate\Database\Seeder;

class create_pages_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('pages')->truncate();

    	DB::table('pages')->insert([
    		[
    			'title'   => 'About',
    			'uri'     => 'about',
    			'content' => 'This is about page' 
    		],
    		[
    			'title'   => 'FAQ',
    			'uri'     => 'faq',
    			'content' => 'This is faq page' 
    		],
    		    		    		[
    			'title'   => 'Contact',
    			'uri'     => 'contact',
    			'content' => 'This is contact page' 
    		],
    		[
    			'title'   => 'Media',
    			'uri'     => 'media',
    			'content' => 'This is media page' 
    		]    		

    	]);
        
    }
}
