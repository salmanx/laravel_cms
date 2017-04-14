<?php 

return [
	
	'theme' => [
		'folder' => 'themes',
		'active' => 'default'
	],

	'templates' => [
		'home'          => Rocket\Templates\HomeTemplate::class,
		'blog' 		    => Rocket\Templates\BlogTemplate::class,
		'single_post'   => Rocket\Templates\SinglePostTemplate::class,
		'single_notice' => Rocket\Templates\SingleNoticeTemplate::class,
		'single_news'   => Rocket\Templates\SingleNewsTemplate::class,		
		'all_news'      => Rocket\Templates\AllNewsTemplate::class,		
		'all_notices'   => Rocket\Templates\AllNoticesTemplate::class,		

	]
	
];