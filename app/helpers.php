<?php 

if (!function_exists('theme')) {
	
	function theme($path){

		$config = app('config')->get('rocket.theme');
		
		return url($config['folder'].'/'.$config['active'].'/assets/'.$path);
	}
}