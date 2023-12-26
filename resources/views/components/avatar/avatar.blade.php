<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpine.js Test</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
</head>
<body>
    <div x-data="{ open: false }" @click="open = !open"  = true" class="relative">
    <div class="flex items-center gap-2 hover:text-blue-900  ">
     <div class="flex items-center rounded-full w-8 h-8 overflow-hidden bg-gray-200 shadow-sm">
        @if ($user->profile_pic == null)
        <span class="text-xl font-bol bg-gray-500 text-white rounded-full flex items-center justify-center w-full" > {{ $user->full_name[0] }}</span>
        @else
        <img src="{{ $user->profile_pic }}" alt="User Avatar" class="w-8 h-8 rounded-full cursor-pointer"> 

        @endif
     </div>
     <p class="" >{{$user->user_type == 'employer' ? $user->full_name : $user->username}}</p>   
     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 " >
        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
      </svg>
       
    </div>    
        <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
            <div class="py-1" role="none">
                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dashboard</a>
                <form action="{{route('logout')}}" method="post" id="form-logout"  >@csrf
                    <a id="logout" href="#"  class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Logout</a>
                </form>
            </div>
        </div>
    </div>

</body>
<script>
    let logout = document.getElementById('logout'); 
    let form = document.getElementById('form-logout');
 
    logout.addEventListener('click', function () {
       form.submit();
    })
 </script>
</html>
