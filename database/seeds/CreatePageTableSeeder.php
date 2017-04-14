<?php

use Illuminate\Database\Seeder;

class CreatePagesTableSeeder extends Seeder
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
    		// [
    		// 	'title'   => 'About',
    		// 	'uri'     => 'about',
    		// 	'body' => 'This is about page',
      //           'template' => 'home',
      //           'parent_id' => null,
      //           'lft' => 3,
      //           'rgt' => 8,
      //           'depth' => 0                 
    		// ],
    		// [
    		// 	'title'   => 'Contact',
    		// 	'uri'     => 'contact',
    		// 	'body' => 'This is contact page',
      //           'template' => 'blog',
      //           'parent_id' => 1,
      //           'lft' => 4,
      //           'rgt' => 5,
      //           'depth' => 1                  
    		// ],

      //       [
      //           'title'   => 'FAQ',
      //           'uri'     => 'faq',
      //           'body' => 'This is faq page' ,
      //           'template' => null,
      //           'parent_id' => 1,
      //           'lft' => 6,
      //           'rgt' => 7,
      //           'depth' => 1                 
      //       ],            
    		// [
    		// 	'title'   => 'Home',
    		// 	'uri'     => '/',
    		// 	'body' => 'This is home page',
      //           'template' => null,
      //           'parent_id' => null,
      //           'lft' => 1,
      //           'rgt' => 2,
      //           'depth' => 0 
    		// ],


            // [
            //     'title'   => 'Home',
            //     'uri'     => '/',
            //     'body' => 'This is character page',
            //     'template' => 'home',
            //     'parent_id' => null,
            //     'lft' => 9,
            //     'rgt' => 10,
            //     'depth' => 0                  
            // ]                       		

    	]);
        
    }
}
