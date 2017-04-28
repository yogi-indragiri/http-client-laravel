<!DOCTYPE html>
    <html>
        <head>
        <meta charset="UTF-8">
            <title>Http client</title>

            <link href="{{mix('css/app.css')}}" type="text/css" rel="stylesheet">
        </head>
        <body>

        <div class="page-header">
            <a href="{{url('/')}}"><h1>Http<small>Client</small></h1></a>
        </div>

        @include('components.success')

        <div class="container-fluid">
            @yield('content')
        </div>

        <script src="{{mix('js/app.js')}}"></script>

     </body>
 </html>