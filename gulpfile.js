var elixir = require('laravel-elixir');


elixir.config.assetsPath = 'public/themes/default/assets';
elixir.config.publicPath = elixir.config.assetsPath;

elixir.config.css.sass.pluginOptions.includePaths = [
	'node_modules/bootstrap-sass/assets/stylesheets',
	'node_modules/font-awesome/scss'
];

elixir(function(mix) {

	mix.copy('node_modules/bootstrap-sass/assets/fonts', elixir.config.publicPath+'/fonts');

	mix.copy('node_modules/jquery/dist/jquery.min.js', elixir.config.publicPath+'/js/jquery.js');

	mix.copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', elixir.config.publicPath+'/js/bootstarp.js');

	mix.copy('node_modules/moment/min/moment.min.js', elixir.config.publicPath+'/js/moment.js');

	mix.copy('node_modules/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', elixir.config.publicPath+'/js/datetimepicker.js');

	mix.copy('node_modules/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', elixir.config.publicPath+'/sass/datetimepicker.css');		

	mix.scripts([
		'jquery.js', 'bootstarp.js', 'essential-plugins.js', 'pace.js', 'moment.min.js', 'bootstrap-datepicker.min.js', 'main.js'
	]);

    
    mix.sass('backend.scss');
    
    mix.sass('frontend.scss');


});