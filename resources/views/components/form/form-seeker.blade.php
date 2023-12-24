<form class="w-full max-w-lg mt-10" action="{{route('store.seeker')}}" method="post" >
  @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
         Name
        </label>
        <input class="placeholder:text-gray-500 appearance-none block w-full bg-gray-100 text-black border {{$errors->has('full_name')  ? 'border-red-500' : ''}} rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="full_name" placeholder="Fullname">
        @if ($errors->has('full_name'))     
        <p class="text-red-500 text-xs italic">{{$errors->first('full_name')}}</p>          
        @endif
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block tracking-wide text-black text-xs font-bold mb-2" for="grid-last-name">
          Username
        </label>
        <input class="placeholder:text-gray-500 appearance-none block w-full bg-gray-100 {{$errors->has('full_name')  ? 'border-red-500' : ''}}  text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" name="username" placeholder="Username">
      
      </div>
      
    </div>
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
    Register
  </x-button.button>

  <p class="text-gray-900 text-sm mt-5 text-center font-semibold ">Already have an account <span class="ml-2 text-blue-700 underline cursor-pointer  " >
  <a href="{{route('login')}}">Login</a>  
  </span> </p>

  
  </form>