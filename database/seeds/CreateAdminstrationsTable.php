<?php

use Illuminate\Database\Seeder;

class CreateAdminstrationsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// DB::table('adminstrations')->truncate();

    	DB::table('adminstrations')->insert([
    		[
    			'name'   => 'About',
    			'status'     => 'about',
          'parent_id' => null,
          'lft' => 3,
          'rgt' => 8,
          'depth' => 0                 
    		],
    		[
    			'name'   => 'Contact',
    			'status'     => 'contact',
          'parent_id' => 1,
          'lft' => 4,
          'rgt' => 5,
          'depth' => 1                  
    		],
        [
          'name'   => 'FAQ',
          'status'     => 'faq',
          'parent_id' => 1,
          'lft' => 6,
          'rgt' => 7,
          'depth' => 1                 
        ],            
    		[
    			'name'   => 'Home',
    			'status'     => 'home',
          'parent_id' => null,
          'lft' => 1,
          'rgt' => 2,
          'depth' => 0 
    		],
        [
            'name'   => 'Home',
            'status'     => 'home',
            'parent_id' => null,
            'lft' => 9,
            'rgt' => 10,
            'depth' => 0                  
        ]                    		
    	]);       
    }
}
