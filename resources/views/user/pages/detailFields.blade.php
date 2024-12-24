@extends('user.layout.index')
@section('title','detail lapangan')
@section('content')


<div id="sticky-banner" tabindex="-1" class="fixed top-[75px] start-0 z-50 flex justify-between w-full py-2 shadow-md  bg-gray-200 dark:bg-gray-700">
    <div class="flex items-center mx-auto">
        <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
            <span class="inline-flex p-1 me-3 bg-gray-300 rounded-full dark:bg-gray-600 w-6 h-6 items-center justify-center flex-shrink-0">
                <i class="fa-solid fa-bell"></i>
            </span>
            <span> yang booking lapang ganteng <a href="https://flowbite.com" class="inline font-medium text-blue-600 underline dark:text-blue-500 underline-offset-2 decoration-600 dark:decoration-500 decoration-solid hover:no-underline">sportify</a></span>
        </p>
    </div>
    <div class="flex items-center">
        <button data-dismiss-target="#sticky-banner" type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">Close banner</span>
        </button>
    </div>
</div>


<section class="min-h-screen bg-white ">
    <div class="container relative pt-44 flex justify-center">
        <div class="grid grid-cols-2 gap-10 px-6 mb-10">
            <!-- Bagian Gambar -->
            <div class="-mt-9">
                <!-- Breadcrumb -->
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="{{ route('user.pages.index') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-green-600">
                                <i class="fa-solid fa-house mr-1"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-green-600">Lapangan</a>
                            </div>
                        </li>
                    </ol>
                </nav>
                <!-- Gambar Utama -->
                <img class="h-80 max-w-full rounded-t-lg" src="{{ asset('image/grass.jpg') }}" alt="image description">
            </div>
    
            <!-- Bagian Detail -->
            <div>
                <h1 class="font-bold text-4xl mb-2">Lapangan Saparua</h1>
                <p class="text-gray-600 mb-2">Basketball</p>
                <h2 class="font-bold text-2xl text-red-600 mb-4">IDR 500,000.00</h2>
                <!-- Deskripsi -->
                <div class="bg-gray-100 p-4 rounded-xl border border-gray-300">
                    <p class="text-gray-700 text-justify leading-relaxed">
                       Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores perspiciatis ab repellat consequatur quod rerum impedit magni, pariatur, laborum vitae doloribus mollitia necessitatibus maiores accusamus! Enim unde, asperiores adipisci a aspernatur assumenda ut excepturi odit! Magni quaerat esse blanditiis alias expedita, quis tempora? Dolore, est. Animi vero doloremque quae repellendus obcaecati non aut totam reiciendis corrupti amet ipsum distinctio maxime enim magnam explicabo vitae reprehenderit a harum sapiente, recusandae illum!
                    </p>
                </div>
                <!-- Tombol -->
                <button class="mt-4 bg-red-600 text-white py-2 px-6 rounded-lg hover:bg-red-700 transition">
                    Cek Ketersediaan
                </button>
            </div>
            <div class="grid grid-cols-2 gap-4 -mt-32 mb-40">
                <div>
                    <img src="{{ asset('image/grass.jpg') }}" alt="" class="rounded-b-lg">
                </div>
                <div>
                    <img src="{{ asset('image/grass.jpg') }}" alt="" class="rounded-b-lg">
                </div>
                </div>
        </div>
    </div>
    
</section>
@endsection
