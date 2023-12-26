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
  <x-hero.hero-section />
  <x-heroCard.hero-card />
  <main class="mt-20">
    <h1>hello</h1>
  </main>
</body>
@endsection
</html>