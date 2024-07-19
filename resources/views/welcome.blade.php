<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOC Grup Hizmetleri</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-M12bge87CqTrP5qtUEoQRGmW1aO1SBzywDxytmu1s4G9pj5fG7f07To1XKyNdcG6MHHp6jjvG72t3V4K2FdE5Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!--
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
-->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.4.0/dist/cdn.min.js" defer></script>

    <link rel="stylesheet" href="{{asset("font2/font.css")}}" >
    
    
</head>

<body class="font-clash-display">
<!-- font-clash-display -->
<header class="  bg-white shadow w-full  ">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        <!--LOGO-->
        <div class="flex-shrink-0 ml-5 left-10"> 
            <img class="w-12 h-12 mix-blend-exclusion" src="tocimg/logo1.svg" alt="Logo">
        </div>

        <!--NAVBAR-->
        <nav class="hidden sm:flex sm:ml-6 space-x-10">
            <a href="#" class="text-title-black inline-flex leading-5 items-center text-base tracking-wide font-medium hover:text-main-default hover:border-gray-300 hover:border-transparent">Ana Sayfa</a>
            <a href="#" class="text-title-black inline-flex leading-5 items-center text-base tracking-wide font-medium hover:text-main-default hover:border-gray-300 hover:border-transparent">Kurumsal</a>
            
            <div class="relative inline-block text-left" x-data="{ isOpen: false, activeItem: null }" @mouseenter="isOpen = true" @mouseleave="isOpen = false">
                <div>
                    <button type="button" class="text-title-black inline-flex leading-5 items-center text-base tracking-wide font-medium hover:text-main-default hover:border-gray-300 hover:border-transparent" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        Hizmetler
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10 14C9.41668 14 8.83335 13.775 8.39168 13.3334L2.95835 7.90003C2.71668 7.65837 2.71668 7.25837 2.95835 7.0167C3.20002 6.77503 3.60002 6.77503 3.84168 7.0167L9.27502 12.45C9.67502 12.85 10.325 12.85 10.725 12.45L16.1583 7.0167C16.4 6.77503 16.8 6.77503 17.0417 7.0167C17.2833 7.25837 17.2833 7.65837 17.0417 7.90003L11.6083 13.3334C11.1667 13.775 10.5833 14 10 14Z" fill="#1E1B39"/>
                        </svg>
                    </button>
                </div>
                <div x-show="isOpen" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-10 transform translate-x-1/2 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <a href="#" class="block px-4 py-3 text-base tracking-wide leading-5 text-title-black text-center hover:bg-main-default hover:text-white" role="menuitem" tabindex="-1" id="menu-item-0" @mouseenter="activeItem = 0" @mouseleave="activeItem = null" :class="{ 'bg-gray-100 text-gray-900': activeItem === 0 }">Organizasyon & Event</a>
                        <a href="#" class="block px-4 py-3 text-base tracking-wide leading-5 text-title-black text-center hover:bg-main-default hover:text-white" role="menuitem" tabindex="-1" id="menu-item-1" @mouseenter="activeItem = 1" @mouseleave="activeItem = null" :class="{ 'bg-gray-100 text-gray-900': activeItem === 1 }">Catering</a>
                        <a href="#" class="block px-4 py-3 text-base tracking-wide leading-5 text-title-black text-center hover:bg-main-default hover:text-white" role="menuitem" tabindex="-1" id="menu-item-2" @mouseenter="activeItem = 2" @mouseleave="activeItem = null" :class="{ 'bg-gray-100 text-gray-900': activeItem === 2 }">Temizlik</a>
                    </div>
                </div>
            </div>
            <a href="#" class="text-title-black inline-flex leading-5 items-center text-base tracking-wide font-medium hover:text-main-default hover:border-gray-300 hover:border-transparent">Blog</a>
            <a href="#" class="text-title-black inline-flex leading-5 items-center text-base tracking-wide font-medium hover:text-main-default hover:border-gray-300 hover:border-transparent">İletişim</a>
        </nav>

        <!--NAVBAR BUTON-->
        <div class="hidden sm:flex sm:items-center">
            <button class="inline-flex items-center justify-center px-4 py-2 border border-transparent right-10 text-base w-40 h-12 rounded-lg shadow-sm text-white bg-main-default hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                <span class="text-base text-center tracking-wide font-medium leading-5">İletişime Geç</span>
            </button>
        </div>
    </div>
</header>

<section class="relative box-border w-full h-[720px] overflow-hidden">
    <!--VIDEO BACKGROUND-->
    <video class="w-full object-cover" autoplay muted>
        <source src="tocimg/wedding.mp4" type="video/mp4" />
    </video>
    <img src="tocimg/gölge.png" alt="Shadow" class="absolute top-0 left-0 w-full h-auto">

    <!--CONTENT-->
    <div class="font-clash-display absolute inset-0 flex flex-col items-center justify-center">
    <div class="text-white text-center">
        <!--SUBTITLE-->
        <div class="mt-2 flex space-x-4 leading-6 text-xl tracking-wider justify-center">
            <p>Organizasyon</p>
            <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M5.84001 8.09598L3.95201 11.04L1.87201 9.53598L4.08001 6.84798L4.01601 6.59198L0.656006 5.69598L1.45601 3.26398L4.72001 4.57598L4.91201 4.41598L4.72001 0.927979H7.28001L7.05601 4.41598L7.28001 4.57598L10.544 3.29598L11.312 5.72798L7.92001 6.59198L7.82401 6.84798L10.064 9.53598L7.98401 11.072L6.12801 8.09598H5.84001Z" fill="#F2563A"/>
                </svg>
            </div>
            <p>Catering</p>
            <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M5.84001 8.09598L3.95201 11.04L1.87201 9.53598L4.08001 6.84798L4.01601 6.59198L0.656006 5.69598L1.45601 3.26398L4.72001 4.57598L4.91201 4.41598L4.72001 0.927979H7.28001L7.05601 4.41598L7.28001 4.57598L10.544 3.29598L11.312 5.72798L7.92001 6.59198L7.82401 6.84798L10.064 9.53598L7.98401 11.072L6.12801 8.09598H5.84001Z" fill="#F2563A"/>
                </svg>
            </div>
            <p>Temizlik</p>
        </div>

        <!--TITLE-->
        <h1 class="text-7xl font-medium leading-20 mt-4">TOC Grup Hizmetleri</h1>

        <!--BUTTON-->
        <div class="mt-6 flex justify-center">
            <button class="flex h-16 w-60 font-medium leading-5 text-base px-6 py-3 justify-center items-center gap-4 rounded-full bg-white text-black">
                Hemen teklif al
                <div class="w-10 h-10 ml-4 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <path d="M20 3.33337C10.8166 3.33337 3.33331 10.8167 3.33331 20C3.33331 29.1834 10.8166 36.6667 20 36.6667C29.1833 36.6667 36.6666 29.1834 36.6666 20C36.6666 10.8167 29.1833 3.33337 20 3.33337ZM24.65 20.8834L18.7666 26.7667C18.5166 27.0167 18.2 27.1334 17.8833 27.1334C17.5666 27.1334 17.25 27.0167 17 26.7667C16.5166 26.2834 16.5166 25.4834 17 25L22 20L17 15C16.5166 14.5167 16.5166 13.7167 17 13.2334C17.4833 12.75 18.2833 12.75 18.7666 13.2334L24.65 19.1167C25.15 19.6 25.15 20.4 24.65 20.8834Z" fill="#F2563A"/>
                    </svg>
                </div>
            </button>
        </div>
    </div>
</div>


        <!--CARDS-->
        <div class="absolute bottom-10 left-10 right-10 h-[90px] mt-40 mx-auto w-[calc(100% -80px)] box-border text-white font-normal flex justify-center items-center gap-16">
            <div class="flex flex-col items-center gap-7 w-1/3">
                <div class="flex w-90 h-10 pt-10 justify-center items-center">
                    <p class="tracking-wide text-center text-base font-normal leading-5 shrink-0 w-90">
                        Organizasyonlarımızda profesyonel personellerimiz ile hizmetinizdeyiz.
                    </p>
                </div>
                <div class="flex w-90 flex-col justify-center items-center gap-6">
                    <div class="w-80 h-0.5">
                        <div class="w-80 h-0.5 shrink-0 opacity-30 bg-white"></div>
                        <div class="w-px h-0.5 shrink-0 bg-white"></div>
                    </div>
                    <div class="flex h-5 justify-center items-center self-stretch">
                        <p class="text-white text-center text-base not-italic font-medium leading-5 tracking-[0.64] opacity-40">Organizasyon</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center gap-7 w-1/3">
                <div class="flex w-90 h-10 pt-10 justify-center items-center">
                    <p class="tracking-wide text-center text-base font-normal leading-5 shrink-0 w-90">
                        Özenle hazırlanan lezzetlerimizle her türlü etkinliğinize renk katıyoruz
                    </p>
                </div>
                <div class="flex w-90 flex-col justify-center items-center gap-6">
                    <div class="w-80 h-0.5">
                        <div class="w-80 h-0.5 shrink-0 opacity-30 bg-white"></div>
                        <div class="w-px h-0.5 shrink-0 bg-white"></div>
                    </div>
                    <div class="flex h-5 justify-center items-center self-stretch">
                        <p class="text-white text-center text-base not-italic font-medium leading-5 tracking-[0.64] opacity-40">Catering</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center gap-7 w-1/3">
                <div class="flex w-90 h-10 pt-10 justify-center items-center">
                    <p class="tracking-wide text-center text-base font-normal leading-5 shrink-0 w-90">
                        İşinizi temiz ve ferah bir ortamda sürdürmeniz için buradayız.
                    </p>
                </div>
                <div class="flex w-90 flex-col justify-center items-center gap-6">
                    <div class="w-80 h-0.5">
                        <div class="w-80 h-0.5 shrink-0 opacity-30 bg-white"></div>
                        <div class="w-px h-0.5 shrink-0 bg-white"></div>
                    </div>
                    <div class="flex h-5 justify-center items-center self-stretch">
                        <p class="text-white text-center text-base not-italic font-medium leading-5 tracking-[0.64] opacity-40">Temizlik</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--NUMBERS-->

<!-- bg-main-default -->

<section  class="box-border h-40 relative flex justify-between items-center w-full  overflow-hidden bg-main-default custom-background py-10 px-20">
    <div class="text-white text-center justify-center flex flex-col  h-full w-full">
        <div class="flex justify-between items-center text-4xl font-semibold leading-[3rem] tracking-wide w-full">
            <div class="flex-1">
                <p>1280</p>
            </div>
            <div class="flex-1">
                <p>350+</p>
            </div>
            <div class="flex-1">
                <p>40+</p>              
            </div>
            <div class="flex-1">
                <p>%99</p>
            </div>
       </div>

       <div class="flex justify-between items-center text-xl tracking-wide mt-2 w-full">
            <div class="flex-1">
                <p>V.I.P Personel</p>
            </div>
            <div class="flex-1">
                <p>V.I.P Personel</p>
            </div>
            <div class="flex-1">
                <p>V.I.P Personel</p>
            </div>
            <div class="flex-1">
                <p>V.I.P Personel</p>
            </div>
       </div>
    </div>
</section>

<!--ABOUT-->
<section class="max-w-7xl mx-auto flex justify-between py-20 px-10 pt-25 items-center  ">
    <div class="flex max-w-[1200px] justify-between items-center flex-[1_0_0] "  >

    


    <div class="flex max-w-[1200px] justify-between items-center flex-1 gap-20 ">
    
        <div class="w-1/2 flex items-center justify-center">
            <div class="relative   flex justify-center items-center">
                <img src="tocimg/img2bg.svg" alt="Description" class="w-[452.771px] h-[402.197px] rotate-[-7.067deg] flex-shrink-0" />
                <img src="tocimg/img2.svg" alt="Description" class="absolute w-11/12 h-11/12 object-contain" /> 
            </div>
        </div>
        
        

        <div class="w-1/2 flex flex-col justify-center gap-4">
            <div class="flex items-center	self-stretch		">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M5.84001 8.09598L3.95201 11.04L1.87201 9.53598L4.08001 6.84798L4.01601 6.59198L0.656006 5.69598L1.45601 3.26398L4.72001 4.57598L4.91201 4.41598L4.72001 0.927979H7.28001L7.05601 4.41598L7.28001 4.57598L10.544 3.29598L11.312 5.72798L7.92001 6.59198L7.82401 6.84798L10.064 9.53598L7.98401 11.072L6.12801 8.09598H5.84001Z" fill="#F2563A"/>
                </svg>
            <h2 class=" text-main-default  text-xl font-medium leading-8	tracking-wider	">Hakkımızda</h2>
            </div>
             
            <div class="text-title text-4xl font-medium leading-12 tracking-[0.4px]">
                <h3 class="text-title-black">İnsan kaynaklarındaki</h3>
                <h3 class="text-main-default mt-3">uzman çözüm ortağınız</h3>
            </div>
            <p class="text-custom-purple  text-base font-normal leading-5 tracking-[0.64px] self-stretch mt-4">
                TOC Grup olarak, iş dünyasının ihtiyaç duyduğu nitelikli insan kaynakları çözümlerini sunuyoruz. Müşteri odaklı yaklaşımımız ve uzman ekibimizle, iş gücü yönetimi konusundaki zorlukları aşmanıza yardımcı oluyoruz.
            </p>

            <div class="flex items-start gap-5 mt-10">
                <ul class="grid grid-cols-2 gap-y-3 text-title-black  text-lg font-medium leading-6 tracking-[0.2px]">
                <div class="flex items-center	self-stretch	gap-2	"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M5.84001 8.09598L3.95201 11.04L1.87201 9.53598L4.08001 6.84798L4.01601 6.59198L0.656006 5.69598L1.45601 3.26398L4.72001 4.57598L4.91201 4.41598L4.72001 0.927979H7.28001L7.05601 4.41598L7.28001 4.57598L10.544 3.29598L11.312 5.72798L7.92001 6.59198L7.82401 6.84798L10.064 9.53598L7.98401 11.072L6.12801 8.09598H5.84001Z" fill="#F2563A"/>
                </svg><li>İş Yeri</li></div>
                <div class="flex items-center	self-stretch	gap-2	"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M5.84001 8.09598L3.95201 11.04L1.87201 9.53598L4.08001 6.84798L4.01601 6.59198L0.656006 5.69598L1.45601 3.26398L4.72001 4.57598L4.91201 4.41598L4.72001 0.927979H7.28001L7.05601 4.41598L7.28001 4.57598L10.544 3.29598L11.312 5.72798L7.92001 6.59198L7.82401 6.84798L10.064 9.53598L7.98401 11.072L6.12801 8.09598H5.84001Z" fill="#F2563A"/>
                </svg><li>Düğün Organizasyonları</li></div>
                <div class="flex items-center	self-stretch	gap-2	"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M5.84001 8.09598L3.95201 11.04L1.87201 9.53598L4.08001 6.84798L4.01601 6.59198L0.656006 5.69598L1.45601 3.26398L4.72001 4.57598L4.91201 4.41598L4.72001 0.927979H7.28001L7.05601 4.41598L7.28001 4.57598L10.544 3.29598L11.312 5.72798L7.92001 6.59198L7.82401 6.84798L10.064 9.53598L7.98401 11.072L6.12801 8.09598H5.84001Z" fill="#F2563A"/>
                </svg> <li>Özel Etkinlik</li></div>
                <div class="flex items-center	self-stretch	gap-2	"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M5.84001 8.09598L3.95201 11.04L1.87201 9.53598L4.08001 6.84798L4.01601 6.59198L0.656006 5.69598L1.45601 3.26398L4.72001 4.57598L4.91201 4.41598L4.72001 0.927979H7.28001L7.05601 4.41598L7.28001 4.57598L10.544 3.29598L11.312 5.72798L7.92001 6.59198L7.82401 6.84798L10.064 9.53598L7.98401 11.072L6.12801 8.09598H5.84001Z" fill="#F2563A"/>
                </svg><li>Özel Kutlamalar</li></div>
                <div class="flex items-center	self-stretch	gap-2	"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M5.84001 8.09598L3.95201 11.04L1.87201 9.53598L4.08001 6.84798L4.01601 6.59198L0.656006 5.69598L1.45601 3.26398L4.72001 4.57598L4.91201 4.41598L4.72001 0.927979H7.28001L7.05601 4.41598L7.28001 4.57598L10.544 3.29598L11.312 5.72798L7.92001 6.59198L7.82401 6.84798L10.064 9.53598L7.98401 11.072L6.12801 8.09598H5.84001Z" fill="#F2563A"/>
                </svg><li>Genel Temizlik</li></div>
                <div class="flex items-center	self-stretch	gap-2	"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M5.84001 8.09598L3.95201 11.04L1.87201 9.53598L4.08001 6.84798L4.01601 6.59198L0.656006 5.69598L1.45601 3.26398L4.72001 4.57598L4.91201 4.41598L4.72001 0.927979H7.28001L7.05601 4.41598L7.28001 4.57598L10.544 3.29598L11.312 5.72798L7.92001 6.59198L7.82401 6.84798L10.064 9.53598L7.98401 11.072L6.12801 8.09598H5.84001Z" fill="#F2563A"/>
                </svg><li>Parti ve Davetler</li></div>

                    
                </ul>
            </div>
        </div>
    </div>
    </div>

</section>



<section class="box-border w-full flex flex-col items-center pt-20 pb-40 px-40 self-stretch">

<div class="flex flex-col items-center gap-3 self-stretch py-20 " >
    <div class="flex items-center  gap-2	">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <path d="M5.84001 8.09598L3.95201 11.04L1.87201 9.53598L4.08001 6.84798L4.01601 6.59198L0.656006 5.69598L1.45601 3.26398L4.72001 4.57598L4.91201 4.41598L4.72001 0.927979H7.28001L7.05601 4.41598L7.28001 4.57598L10.544 3.29598L11.312 5.72798L7.92001 6.59198L7.82401 6.84798L10.064 9.53598L7.98401 11.072L6.12801 8.09598H5.84001Z" fill="#F2563A"/>
                </svg>
                <p class="text-xl text-main-default	not-italic	font-medium	leading-8	tracking-wider">Neler yapıyoruz?
                </p>
                

    </div>
    <div class="flex items-center gap-2 ">
        <p class="text-center not-italic font-medium text-4xl leading-12 tracking-wide"> 
           <span> Profesyonel </span><br> hizmetler için <span class="text-main-default">teklif al</span>
        </p>
    </div>

</div>


<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="flex flex-col h-full w-90 gap-4 rounded-lg bg-white">
        <img class="w-full h-64 object-cover" src="tocimg/p1.svg" alt="p1">
        <div class="flex flex-col h-full justify-between p-4">
            <div class="flex flex-col gap-1">
                <p class="text-xl not-italic font-medium leading-8 tracking-wide">Organizasyon & Event</p>
                <p class="text-base max-h-12 not-italic font-normal leading-5 tracking-wide">Organizasyonlarımızda profesyonel personellerimiz ile hizmetinizdeyiz.</p>
            </div>
            <div class="flex items-center gap-1 px-1 py-2.5 rounded-lg">
                <span class="text-base not-italic leading-5 tracking-0.64 font-medium text-main-default">Detayları gör</span>
                <img src="tocimg/arrow.svg" alt="btn" class="w-4 h-4">
            </div>
        </div>
    </div>
    <div class="flex flex-col h-full w-90 gap-4 rounded-lg bg-white">
        <img class="w-full h-64 object-cover" src="tocimg/p2.svg" alt="p2">
        <div class="flex flex-col h-full justify-between p-4">
            <div class="flex flex-col gap-1">
                <p class="text-xl not-italic font-medium leading-8 tracking-wide">Catering</p>
                <p class="text-base max-h-12 not-italic font-normal leading-5 tracking-wide">Özenle hazırlanan lezzetlerimizle her türlü etkinliğinize renk katıyoruz</p>
            </div>
            <div class="flex items-center gap-1 px-1 py-2.5 rounded-lg">
                <span class="text-base not-italic leading-5 tracking-0.64 font-medium text-main-default">Detayları gör</span>
                <img src="tocimg/arrow.svg" alt="btn" class="w-4 h-4">
            </div>
        </div>
    </div>
    <div class="flex flex-col h-full w-90 gap-4 rounded-lg bg-white">
        <img class="w-full h-64 object-cover" src="tocimg/p3.svg" alt="p3">
        <div class="flex flex-col h-full justify-between p-4">
            <div class="flex flex-col gap-1">
                <p class="text-xl not-italic font-medium leading-8 tracking-wide">Temizlik</p>
                <p class="text-base max-h-12 not-italic font-normal leading-5 tracking-wide">İşinizi temiz ve ferah bir ortamda sürdürmeniz için buradayız.</p>
            </div>
            <div class="flex items-center gap-1 px-1 py-2.5 rounded-lg">
                <span class="text-base not-italic leading-5 tracking-0.64 font-medium text-main-default">Detayları gör</span>
                <img src="tocimg/arrow.svg" alt="btn" class="w-4 h-4">
            </div>
        </div>
    </div>
</div>



</div>


</section>

<!--FEEDBACK SECTION-->

<section class="flex flex-col  justify-center items-center self-stretch px-10 py-10 bg-white ">
    <div class="flex text-center flex-col  justify-center items-center gap-14 self-stretch">

    
    <h3 class="text-center not-italic font-medium text-4xl self-stretch tracking-tight leading-[3rem] text-main-default">Müşterilerin <span class=" text-gray-900"> tecrübeleri</span></h3>
   
    
        <div class="flex justify-center items-center content-center	gap-6 self-stretch flex-wrap mt-14">

        <div class="lg:w-6/12 xl:w-3/12 flex flex-col justify-center items-start gap-8 py-8 px-10  flex-basis-0 border-2 border-gray-100 bg-white-custom shadow-custom p-8">
            <p class="flex flex-col items-start gap-3 self-stretch">
                <p class="text-body font-medium not-italic tracking-wider text-xl	 leading-8 self-stretch ">“Profesyonel ekip”</p>
                <p class="text-body text-base not-italic font-normal leading-5 tracking-[0.64] self-stretch ">Firmanın catering hizmeti gerçekten harika! Etkinliğimizde sunulan yemekler hem lezzetli hem de görsel açıdan muhteşemdi. Misafirlerimizden çok olumlu geri dönüşler aldık. Teşekkür ederiz!</p>
                
            </p>
            <div class="flex items-center gap-4">
            <div class="flex w-14 h-14 justify-center items-center ">  <img src="tocimg/pp1.svg" alt="pp" class="w-14 h-14 shrink-0"></div>
            <div class="flex flex-col items-start">
    
            <p class="text-body text-base not-italic font-medium leading-5 tracking-[0.64]">Ayşe K.</p>
       
            <p class="text-body text-base not-italic font-medium leading-5 tracking-[0.64]">MFE Teknoloji</p>
            </div>
          
           
            </div>
        </div>

        <div class="lg:w-6/12 xl:w-3/12 flex flex-col justify-center items-start gap-8 py-8 px-10  flex-basis-0 border-2 border-gray-100 bg-white-custom shadow-custom p-8">
        <p class="flex flex-col items-start gap-3 self-stretch">
                <p class="text-body font-medium not-italic tracking-wider text-xl	 leading-8 self-stretch ">“Çok profesyonel”</p>
                <p class="text-body text-base not-italic font-normal leading-5 tracking-[0.64] self-stretch ">Organizasyon hizmetleri konusunda bu kadar profesyonel ve esnek bir ekip bulmak gerçekten zordu! İsteklerimize hızlıca yanıt verdiler ve etkinliğimizi kusursuz bir şekilde planladılar.</p>
                
            </p>
            <div class="flex items-center gap-4">
            <div class="flex w-14 h-14 justify-center items-center ">  <img src="tocimg/pp2.svg" alt="pp" class="w-14 h-14 shrink-0"></div>
            <div class="flex flex-col items-start">
    
            <p class="text-body text-base not-italic font-medium leading-5 tracking-[0.64]">Mehmet T.</p>
       
            <p class="text-body text-base not-italic font-medium leading-5 tracking-[0.64]">Demirtaş Sistemler</p>
            </div>
          
           
            </div>
        </div>

        <div class="lg:w-6/12 xl:w-3/12 flex flex-col justify-center items-start gap-8 py-8 px-10  flex-basis-0 border-2 border-gray-100 bg-white-custom shadow-custom p-8">
        <p class="flex flex-col items-start gap-3 self-stretch">
                <p class="text-body font-medium not-italic tracking-wider text-xl	 leading-8 self-stretch ">“Profesyonel ekip”</p>
                <p class="text-body text-base not-italic font-normal leading-5 tracking-[0.64] self-stretch ">Firmanın catering hizmeti gerçekten harika! Etkinliğimizde sunulan yemekler hem lezzetli hem de görsel açıdan muhteşemdi. Misafirlerimizden çok olumlu geri dönüşler aldık. Teşekkür ederiz!</p>
                
            </p>
            <div class="flex items-center gap-4">
            <div class="flex w-14 h-14 justify-center items-center ">  <img src="tocimg/pp3.svg" alt="pp" class="w-14 h-14 shrink-0"></div>
            <div class="flex flex-col items-start">
    
            <p class="text-body text-base not-italic font-medium leading-5 tracking-[0.64]">Fatma Y.</p>
       
            <p class="text-body text-base not-italic font-medium leading-5 tracking-[0.64]">İK İstanbul</p>
            </div>
          
           
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center gap-4 mt-8">
       
       <img src="tocimg/arrow1.svg" alt="pre" class="flex w-6 h-6 justify-center items-center ">
       <img src="tocimg/arrow2.svg" alt="next" class="flex w-6 h-6 justify-center items-center ">

        </div>
    </div>

</section>

<!--footer-->
<footer class=" text-white pt-10 pr-5 pl-5 pb-5 bg-footer-gray "> 
  <div class="flex justify-between items-start self-stretch  px-0  ml-10 mr-10">
    <div class="flex flex-col items-start gap-4 w-[294px]"> 
      <div class="flex items-center">
        <img src="tocimg/logo2.svg" alt="TOCGRUP Logo" class="h-12 w-12">
        <span class="ml-2 text-3xl font-bold">TOCGRUP</span>
      </div>
      <p class="mt-2 text-footer-text text-sm text-body font-normal  leading-tight">İşinizin başarısı için doğru hizmetleri almanın zamanı geldi.</p>
      


    </div>  
    <div class="flex flex-col ">  
  <p class="mt-2  text-base font-medium text-white">Hızlı Erişim</p>
  <ul class="mt-4 grid grid-cols-2 gap-x-8 gap-y-4 text-footer-text items-center">
    <li><a href="#" class="hover:text-gray-300 mt-4">Ana Sayfa</a></li>
    <li><a href="#" class="hover:text-gray-300">Organizasyon & Event</a></li>
    <li><a href="#" class="hover:text-gray-300">Kurumsal</a></li>
    <li><a href="#" class="hover:text-gray-300">Catering</a></li>
    <li><a href="#" class="hover:text-gray-300">İletişim</a></li>
    <li><a href="#" class="hover:text-gray-300">Temizlik</a></li>
    <li><a href="#" class="hover:text-gray-300">Blog</a></li>
  </ul>
</div>


<div class="flex flex-col items-end gap-2">
  <div class="flex flex-col items-start">
    <div class="flex items-center">
      <img src="tocimg/mail.svg" alt="Logo" class="w-16 h-16 mr-4 "> 
      <div class="flex flex-col">
        <p class="text-sm">Bize e-posta gönder</p>
        <a href="mailto:info@tocgrup.com" class="hover:footer-text">info@tocgrup.com</a>
      </div>
    </div>
    <address class="mt-6 not-italic footer-text"> 
      Atakent, Mithatpaşa Cd. Çağla Plaza<br>
      NO:16 IC Kap NO:18, 34670<br>
      Ümraniye/Istanbul
    </address>
  </div>
</div>
  </div>
  <div class="flex justify-between ml-10 mr-10">
    <div class="mt-10 flex justify-start gap-2 items-center">
        <img src="tocimg/ig.svg" alt="ig" class="h-10 w-10">
        <img src="tocimg/in.svg" alt="ig" class="h-10 w-10">

    </div>
  <div class="mt-10 flex justify-end items-center">
    <p>&copy; 2024 TOC Grup</p>
  </div>
  </div>
</footer>




</body>
</html>