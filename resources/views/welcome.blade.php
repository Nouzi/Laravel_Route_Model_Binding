<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Laravel</title>

</head>


<body>

<div class="pt-10 gap-10 flex justify-center text-white">
<a class="border border-black p-4 bg-green-800 hover:bg-green-500" href="/lists/1"> Prejsť na list jedna </a>
<a class="border border-black p-4 bg-green-800 hover:bg-green-500" href="/lists/2"> Prejsť na list dva </a>
<a class="border border-black p-4 bg-green-800 hover:bg-green-500" href="/lists/3"> Prejsť na list tri </a>
</div>
</body>
</html>
