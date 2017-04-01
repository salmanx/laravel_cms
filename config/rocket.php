<?php 

return [
	
	'theme' => [
		'folder' => 'themes',
		'active' => 'default'
	],

	'templates' => [
		'home'        => Rocket\Templates\HomeTemplate::class,
		'blog' 		  => Rocket\Templates\BlogTemplate::class,
		'single_post' => Rocket\Templates\SinglePostTemplate::class,		

	]
	
];