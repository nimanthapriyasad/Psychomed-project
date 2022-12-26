<nav x-data="{show:false}" class="w-full bg-white shadow-md">
<div class="grid grid-cols-3 gap-4 py-5 pl-10">
  
  <div class="col-span-2 ">
    <div class=" grid grid-cols-12">
        <div><img class="img-fluid object-contain h-12 w-12" src="/img/logo.jpg" alt="Icon"  /></div>
        <div><span class=" uppercase font-bold text-md md:text-xl text-purple-900 " >Psychomed</span></div>
  </div>
  </div>
  
  <div class="flex justify-end items-center rounded-lg shadow-lg m-4 bg-white md:shadow-none md:m-0  mt-6 md:mt-0">
        <div x-bind:class="show?'mr-12 md:flex md:justify-around md:visible' : 'mr-12 md:flex md:justify-around hidden md:visible'">
            <span class="block my-2 uppercase font-bold text-purple-900 rounded-md hover:bg-gray-200 md:mx-4 md:hover:text-gray-400 md:hover:bg-opacity-0">
                <a href="/">Home</a>
            </span>
            <span class="block my-2 uppercase font-bold text-purple-900 rounded-md hover:bg-gray-200 md:mx-4 md:hover:text-gray-400 md:hover:bg-opacity-0">
                <a href="{{url('aboutus')}}">About us</a>
            </span>
            
            <span class="block my-2 uppercase font-bold text-purple-900 rounded-md hover:bg-gray-200 md:mx-4 md:hover:text-gray-400 md:hover:bg-opacity-0">
                <a href="{{url('services')}}">Services</a>
            </span>
            <span class="block my-2 uppercase font-bold text-purple-900 rounded-md hover:bg-gray-200 md:mx-4 md:hover:text-gray-400 md:hover:bg-opacity-0">
                <a href="{{route('login')}}">
                    Log in
                </a>
            </span>
            <span class="block my-2 uppercase font-bold text-purple-900 rounded-md hover:bg-gray-200 md:mx-4 md:hover:text-gray-400 md:hover:bg-opacity-0">
                <a href="{{route('register.patient')}}">
                    Register
                </a>
            </span>
        </div>
    </div>

  
</div>
   
</nav>
