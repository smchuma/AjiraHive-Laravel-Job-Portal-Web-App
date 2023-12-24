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
 <div class="w-full flex justify-center items-center flex-col px-10 pb-20 ">
    <div class="logo mt-10">
        <h1 class="text-2xl text-black cursor-pointer ">AjiraHive</h1>
     </div>

  <form class="w-full max-w-lg mt-10" action="" method="post" >
    @csrf
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block tracking-wide text-black text-xs font-bold mb-2" for="grid-password">
            Email
          </label>
          <input class=" placeholder:text-gray-500 appearance-none block w-full bg-gray-100 {{$errors->has('email')  ? 'border-red-500' : ''}}  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" name="email" placeholder="Enter Email">
          @if ($errors->has('email'))     
          <p class="text-red-500 text-xs italic mt-2 mb-3">{{$errors->first('email')}}</p>          
          @endif
          <label class="block tracking-wide text-black text-xs font-bold mb-2" for="grid-password">
            Password
          </label>
          <input class="appearance-none block w-full bg-gray-100 text-black border border-gray-200 rounded {{$errors->has('password')  ? 'border-red-500' : ''}}  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 placeholder:text-gray-500 " id="grid-password" type="password" name="password"  placeholder="Enter Password">
          @if ($errors->has('password'))     
          <p class="text-red-500 text-xs italic mt-2">{{$errors->first('password')}}</p>          
          @endif
        </div>
      </div>
    <x-button.button class="w-full bg-blue-400 border-0 text-white " >
      Login
    </x-button.button>
  
    <p class="text-gray-900 text-sm mt-5 text-center font-semibold ">Don't have an account <span class="ml-2 text-blue-700 underline cursor-pointer  " >
    <a href="{{route('create.seeker')}}">Register</a>  
    </span> </p>
  
    
    </form>







 </div>
 </main>
</body>
@endsection
</html>