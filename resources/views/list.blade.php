<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Laravel 1</title>

</head>


<body>

<h1 class="bg-green-500"> {{$DataList->message}}</h1>

</body>
</html>
