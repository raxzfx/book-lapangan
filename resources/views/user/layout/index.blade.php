<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-white">
    
<!-- Navbar -->
<nav class="bg-green-600 shadow-md dark:bg-gray-900 fixed w-full z-20 top-0 start-0 text-slate-200  px-5">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5 ">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">Sportify</span>
        </a>
        
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-normal border md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
                <div class="flex items-center ">
                       <li>
                    <button class="text-white mr-5" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                        about us
                        </button>
                </li>
                <li>
                    <a href="#" class="block py-1 px-7  border-2 border-slate-200 text-slate-200 rounded-lg hover:bg-slate-200 hover:text-green-600 transition ease-in-out">login</a>
                </li>
                </div>
             
            </ul>
        </div>
    </div>
</nav>
<!-- end Navbar -->
 
 <!-- drawer component -->
 <div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
     <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
     <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
       <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
       </svg>
       <span class="sr-only">Close menu</span>
    </button>
    <hr class="border-gray-300 dark:border-gray-600 my-4">

    <div class="flex items-center">
       <img src="{{asset('image/logo.png')}}" alt="" class="w-10 h-10">
    <h1>raxzFx</h1> 
    </div>
    

    <hr class="border-gray-300 dark:border-gray-600 my-4">


   <div class="py-4 overflow-y-auto">
       <ul class="space-y-2 font-medium">
        <li class="mb-4">
            web ini dibuat untuk memenuhi kelulusan pkl, dibuat oleh rasya nazraditya. website ini juga dibuat bertujuan untuk kebutuhan para atlit atau para pencinta olahraga
            memudahkan dalam melakukan booking lapangan tanpa harus mengantri di tempat, untuk full dokumentasinya bisa cek repository/raxzfx
        </li>

        <hr class="border-gray-300 dark:border-gray-600 my-4">

          <li>
             <a href="https://github.com/raxzfx" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <i class="fa-brands fa-github"></i>
                <span class="ms-3">github</span>
             </a>
          </li>
        
          <li>
             <a href="https://www.instagram.com/rasyaaanaz/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <i class="fa-brands fa-instagram"></i>
                <span class="flex-1 ms-3 whitespace-nowrap">instagram</span>
             </a>
          </li>
          <li>
             <a href="https://x.com/RaxzFx" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <i class="fa-brands fa-x-twitter"></i>
                <span class="flex-1 ms-3 whitespace-nowrap">twitter</span>
             </a>
          </li>
          <li>
             <a href="https://www.youtube.com/@rasyaajg" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <i class="fa-brands fa-youtube"></i>
                <span class="flex-1 ms-3 whitespace-nowrap">youtube</span>
             </a>
          </li>
       </ul>
    </div>
 </div>

 @yield('content')

<!-- Footer -->

<footer class="bg-green-800 text-white">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="https://flowbite.com/" class="flex items-center">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">sporify</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Resources</h2>
                  <ul class="text-white dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Follow us</h2>
                  <ul class="text-white dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                      </li>
                      <li>
                          <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Legal</h2>
                  <ul class="text-white dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
          </span>
         
      </div>
    </div>
</footer>

<!-- End Footer -->


</body>
</html>
