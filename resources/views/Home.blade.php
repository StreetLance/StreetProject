<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Scripts -->
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script>
        $(document).ready(function(){
            $('#example-1').click(function(e){
                e.preventDefault();
                $.ajax({
                    type: 'get',
                    url: 'viewer/1',
                    success: function(data){
                        $("#content").html(data)-appendTo('tab2');
                          }});

                });
            });
        $(document).ready(function(){
            $('#example-2').click(function(e){
                e.preventDefault();
                $.ajax({
                    type: 'get',
                    url: 'viewer/2',
                    success: function(data){
                        $("#content").html(data);
                    }
                });
            });
        });
    </script>



</head>
<body>
<div id="app">
<div class="container">
    <div class="row">
        <div class="col-12 " >
            <ul class="nav nav-tabs justify-content-around">

                <li class="nav-item">
                    <button id="example-1" class="btn btn-success"  role="btn"  href="viewer/1">№1</button>
                </li>
                <li class="nav-item ">
                    <button  id="example-2" role="btn"class="btn btn-success" href="viewer/2">№2</button>
                </li>
            </ul>
            <div id="content"></div>
        </div>
    </div>
</div>


</div>
</body>
</html>
