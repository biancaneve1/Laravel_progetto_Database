<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog di ricette</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

    @if(session('Denied'))
    <div class="alert alert-success text-center m-5">
        {{session('Denied')}}
    </div>
    @endif
    

    <x-navbar/>
{{-- <div class="vh-100"> --}}
    {{$slot}} 
{{-- </div> --}}
   

</body>
</html>