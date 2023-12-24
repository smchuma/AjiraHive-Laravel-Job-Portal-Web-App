<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Register</title>
</head>
<body>
@extends('layouts.app')
@section('content')
 <main class="flex w-full h-  text-black mt-20 justify-center ">
 <div class=" flex justify-center items-center flex-col px-10 pb-20 ">
  <h1 class="text-3xl font-semibold mt-5 " >Create an account</h1>
 <div class="mt-5 " >
  <x-button.button class="mr-5 px-10 bg-blue-400 text-white border-blue-300 " >
    Job Seeker
</x-button.button>
  <x-button.button class="px-10" >
    Employer
</x-button.button>
 </div>
 <x-form.form />
 </div>
 </main>
</body>
@endsection
</html>