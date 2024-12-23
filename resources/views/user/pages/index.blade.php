@extends('user.layout.index')
@section('title','homepage')
@section('content')

<!-- Main Section -->
<section class="min-h-screen bg-gray-50 dark:bg-gray-900 relative flex items-center justify-center">
 
    <div class="container mx-auto text-center relative z-10">
        <h1 class="text-5xl font-bold mb-6 text-white uppercase">the best field booking <br> platform in your area</h1>
        <p class="text-lg text-gray-300 mb-8 font-normal">
            website that provides field booking services without having to come to the location
        </p>
       
<form class="max-w-md mx-auto">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 py-5 ps-10 text-sm text-gray-900 border border-gray-300 rounded-xl bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="looking for a fields..." required />
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-green-500  hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm px-5 py-3 transition ease-in-out"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
</form>

    </div>
    <img src="{{asset('image/grass.jpg')}}" alt="" class="absolute top-0 left-0 object-cover w-full h-full z-0">
</section>


<!--bawah kolo, search-->
<section class="min-h-screen bg-gray-50 dark:bg-gray-900 relative flex items-center justify-center px-28 pt-10">
 
    <div class="container mx-auto  relative z-10 mt-20">
        <div class="flex items-center justify-between">
            <div class="capitalize font-bold text-2xl">
                 <h1>
                   sportify recomendation
                 </h1>
            </div>
            <div class="text-sm">
                <a href="" class="flex items-center text-sm">
                     <h1 class="mr-3">
                    load more
                 </h1>
                 <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
       
        </div>

       <div class="grid grid-cols-3 gap-6 mt-5 mb-28">

        @for ($i = 0; $i < 6; $i++)
        <!--card-->
        <div class="relative max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('image/ground.webp') }}" alt="" />
            </a>
            <div class="p-5">
                <p class="mb-4 text-xs">
                    IDR 50.000,00/h
                </p>
                <a href="{{route('user.pages.detailLapang')}}">
                    <h5 class="mb-2 text-xl font-medium tracking-tight text-gray-900 dark:text-white">
                        Lapangan kece madep
                    </h5>
                </a>
                <p class="mb-3 font-sm text-gray-700 dark:text-gray-400 opacity-75 truncate capitalize">
                    ini adalah lapngan yang lapangan juga <br />
                    lapangan semua lapangan lapngan lapnga
                </p>
            </div>
    
            <!-- Span Location -->
            <span
                class="absolute flex items-center justify-center bg-white text-slate-900 px-1 w-32 py-2 text-xs font-medium rounded-full shadow-md hover:bg-sky-700 transition duration-200 top-4 left-4">
                <i class="fa-solid fa-location-dot mr-2 text-base"></i>
                <p>Bandung</p>
            </span>
        </div>
        <!--end card-->
    @endfor
    


        
       </div>
    </div>
</section>

<!--bawah card-->
<section class="h-80 bg-green-500 dark:bg-gray-900 relative flex items-center justify-center ">
  <div class="container mx-auto text-left absolute top-0 left-0 p-4 z-10 px-28 py-6">
    <div class="capitalize font-bold mb-10 text-2xl mt-3">
      sportify category
    </div>
    
    <!--card category-->
<div class="grid grid-cols-4 gap-4">
    <!--card 1-->
    <div class="max-w-sm p-4 bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700 ">
        <div class="px-3">
            <img src="{{asset('image/basketball.png')}}" alt="" class="w-12 h-12 mb-5">
            <a href="">
                 <div class="flex items-center justify-between">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">basketball</h5>
    <i class="fa-solid fa-turn-up -rotate-270"></i>   
    </div>
            </a>
        </div> 
</div>
<!--card 2-->
    <div class="max-w-sm p-4 bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700 ">
        <div class="px-3">
            <img src="{{asset('image/football.png')}}" alt="" class="w-12 h-12 mb-5">
            <a href="">
                 <div class="flex items-center justify-between">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">football</h5>
    <i class="fa-solid fa-turn-up -rotate-270"></i>   
    </div>
            </a>
        </div> 
        <!--card 3-->
</div>
    <div class="max-w-sm p-4 bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700 ">
        <div class="px-3">
            <img src="{{asset('image/football (1).png')}}" alt="" class="w-12 h-12 mb-5">
            <a href="">
                 <div class="flex items-center justify-between">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">futsal</h5>
    <i class="fa-solid fa-turn-up -rotate-270"></i>   
    </div>
            </a>
        </div> 
</div>
<!--card 4-->
    <div class="max-w-sm p-4 bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700 ">
        <div class="px-3">
            <img src="{{asset('image/shuttlecock.png')}}" alt="" class="w-12 h-12 mb-5">
            <a href="">
                 <div class="flex items-center justify-between">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">badminton</h5>
    <i class="fa-solid fa-turn-up -rotate-270"></i>   
    </div>
            </a>
        </div> 
</div>
</div>
<!--end card category-->
  </div>
</section>


  <!--bawah card-->
<section class="min-h-screen bg-gray-50 dark:bg-gray-900 relative flex items-center justify-center">
    <div class="container mx-auto text-center relative z-10">
      <div class="relative inline-block">
        <img src="{{asset('image/grass.jpg')}}" alt="Grass" class="rounded-3xl h-52 w-custom object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white space-y-4">
          <h1 class="text-4xl font-bold mb-7">
            Register with us
          </h1>
          <button class="bg-green-500 hover:bg-green-800 transition ease-in-out px-8 py-2 rounded-lg font-normal text-sm">
            Register
          </button>
        </div>
      </div>
    </div>
  </section>
  
<!--end Main Section-->

@endsection