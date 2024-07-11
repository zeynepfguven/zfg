<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOC Grup Hizmetleri</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-M12bge87CqTrP5qtUEoQRGmW1aO1SBzywDxytmu1s4G9pj5fG7f07To1XKyNdcG6MHHp6jjvG72t3V4K2FdE5Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.4.0/dist/cdn.min.js" defer></script>

    <style>
        
    </style>
</head>
<body>
<header class="bg-white shadow">
    <div class="w-fit mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        <div class="flex-shrink-0 ml-5"> 
            <img class="w-12 h-12" src="tocimg/logo1.png" alt="Logo">
        </div>
        <nav class="hidden sm:flex sm:ml-6 space-x-10">
            <a href="#" class="text-gray-900 inline-flex leading-5	 items-center text-sm font-medium hover:border-gray-300 hover:border-transparent">Ana Sayfa</a>
            <a href="#" class="text-gray-500 inline-flex leading-5 items-center text-sm font-medium hover:border-gray-300 hover:border-transparent">Kurumsal</a>
            
            <div class="relative inline-block text-left" x-data="{ isOpen: false, activeItem: null }" @mouseenter="isOpen = true" @mouseleave="isOpen = false">
        <div>
            <button type="button" class="text-gray-500 inline-flex  leading-5 items-center text-sm font-medium hover:border-gray-300 hover:border-transparent " id="menu-button" aria-expanded="true" aria-haspopup="true">
                Options
                <svg class="-mr-1 h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
                <div x-show="isOpen" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="py-1" role="none">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-0" @mouseenter="activeItem = 0" @mouseleave="activeItem = null" :class="{ 'bg-gray-100 text-gray-900': activeItem === 0 }">Hizmet 1</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-1" @mouseenter="activeItem = 1" @mouseleave="activeItem = null" :class="{ 'bg-gray-100 text-gray-900': activeItem === 1 }">Hizmet 2</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-2" @mouseenter="activeItem = 2" @mouseleave="activeItem = null" :class="{ 'bg-gray-100 text-gray-900': activeItem === 2 }">Hizmet 3</a>
               
            </div>
        </div>
            </div>
            <a href="#" class="text-gray-500 inline-flex leading-5 items-center text-sm font-medium hover:border-gray-300 hover:border-transparent">Blog</a>
            <a href="#" class="text-gray-500 inline-flex leading-5 items-center text-sm font-medium hover:border-gray-300 hover:border-transparent">İletişim</a>
        </nav>
        <div class="hidden sm:flex sm:items-center">
            <a href="#" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-400">İletişime Geç</a>
            <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400">
                <span>İletişime Geç</span>
            </button>
        </div>
    </div>
</header>

<section class="relative  w-full h-180 overflow-hidden">


   <video class="h-full w-full "  controls autoPlay muted>
    <source src="tocimg/wedding.mp4" type="video/mp4" />
    </video>
    <!--<img src="tocimg/wedbg.jpg" alt="bg" style="width:100%;">-->
     <img src="tocimg/gölge.png" alt="Shadow" style="position: absolute; top: 0; left: 0; width: 100%; height: auto;">



        <div class="absolute inset-0  flex items-center  left-10 top-56 bottom-112">
            <div class="text-white text-center">
            <div class="mt-2 text-2xl flex space-x-4   left-10	  tracking-wide "> 
                <p>Organizasyon</p>
                <div class="flex items-center justify-center">
                 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                  <path d="M5.84001 8.09598L3.95201 11.04L1.87201 9.53598L4.08001 6.84798L4.01601 6.59198L0.656006 5.69598L1.45601 3.26398L4.72001 4.57598L4.91201 4.41598L4.72001 0.927979H7.28001L7.05601 4.41598L7.28001 4.57598L10.544 3.29598L11.312 5.72798L7.92001 6.59198L7.82401 6.84798L10.064 9.53598L7.98401 11.072L6.12801 8.09598H5.84001Z" fill="#F2563A"/>
                 </svg>
                </div>
                <p>Etkinlik</p>
                <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M5.84001 8.09598L3.95201 11.04L1.87201 9.53598L4.08001 6.84798L4.01601 6.59198L0.656006 5.69598L1.45601 3.26398L4.72001 4.57598L4.91201 4.41598L4.72001 0.927979H7.28001L7.05601 4.41598L7.28001 4.57598L10.544 3.29598L11.312 5.72798L7.92001 6.59198L7.82401 6.84798L10.064 9.53598L7.98401 11.072L6.12801 8.09598H5.84001Z" fill="#F2563A"/>
                </svg>
                </div>
                <p>Hizmet</p>
            </div>
            
                <h1 class="text-6xl font-bold">TOC Grup Hizmetleri</h1>
                
                <button class="mt-4 flex w-60 px-6 py-3 items-center gap-10 rounded-full bg-white text-black">
                Hemen teklif al
                </button>
            </div>
            
            
        
        </div>
</section>


    <main>
    </main>
</body>
</html>
