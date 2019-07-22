<!DOCTYPE html>
<html>
    <head>
        <title>Web masjid</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/bs-stepper.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/helper.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery.dataTables.css')}}">
        <link rel="stylesheet" href="{{asset('css/summernote.css')}}">
        <link rel="stylesheet" href="{{asset('css/summernote.css')}}">
        <link rel="stylesheet" href="{{asset('css/gijgo.min.css')}}">
        <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
        <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('js/gijgo.min.js')}}"></script>
        <script src="{{asset('js/summernote-bs4.js')}}"></script>
        <script src="{{asset('js/bs-stepper.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('js/vue.min.js')}}"></script>
        <script src="{{asset('js/summernote.js')}}"></script>
        




        
    </head>
    <body>
        @include('components.navbar')
        @yield('content')
    </body>
        <script src="{{asset('js/main.js')}}"></script>
</html>