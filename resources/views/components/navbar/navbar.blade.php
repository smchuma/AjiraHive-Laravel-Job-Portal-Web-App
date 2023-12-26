<nav class=" fixed w-full top-0 flex justify-between p-5 bg-[#F1FAFA] px-10 border-b-2  ">
   <div class="logo">
      <a href="{{auth()->check() ? route('dashboard') : route('home')}}" class="text-2xl text-black cursor-pointer " >AjiraHive</a>
   </div>
 <div class="flex items-center gap-5 cursor-pointer " >

@if(!Auth::check())
<a href="{{route('login')}}">Login</a>
  <a href="{{route('create.seeker')}}">
   <x-button.button>
      Register
     </x-button.button>
</a> 
@endif
@if (Auth::check()) 
<x-avatar.avatar />
@endif
 </div>
</nav>

