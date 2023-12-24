<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>AjiraHive</title>
</head>
<body>
@extends('layouts.app')
@section('content')
 <h1 class="mt-20" >
  {{auth()->user()->email}} dashboard
 </h1>
</body>
@endsection
</html>