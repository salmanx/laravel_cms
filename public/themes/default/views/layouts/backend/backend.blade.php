<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="{{ theme('css/backend.css') }}">   
    <script type="text/javascript" src="{{ theme('js/all.js') }}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
       @include('layouts.backend.partials.header') 
      <!-- Side-Nav-->
       @include('layouts.backend.partials.sidebar') 

      <div class="content-wrapper">
          @yield('content')    
      </div>
    </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
    
        CKEDITOR.replace( 'body', {
            filebrowserBrowseUrl: '{!! url('filemanager/index.html') !!}'
        }); 
     

    </script>
  
  </body>
</html>