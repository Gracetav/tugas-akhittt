<?php


?>

<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />

    <!-- <link rel="logo" type="icon" href="..//picture/logo.jpg"> -->
    <!-- alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- <script src="..//src/app.js"></script> -->
    <link rel="" href="style.css">
    <style>
        #countdown {
            display: flex;
            background-color: rgb(68, 200, 68);
            color: white;
            margin-right: 25px;
            padding: 5px 20px;
            border-radius: 10px;
            text-align: center;
            line-height: 37px;
            gap: 1px;
            justify-content: space-evenly;

        }

        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: sans-serif;
            background-color: white;
            overflow-x: hidden;
        }
        #judul {
            text-align: center;
            font-size: 24px;
            margin-right: 15px;

        }

        .footer {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
*{
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 400;
}
body{
  min-height: 100vh;
  background: url('laptop.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
nav{
  background-color: white;
  box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1);
}
nav ul{
  width: 100%;
  list-style: none;
  display: flex;
  justify-content: center;
  align-items: center;
}
nav li{
  height: 75px;
}
nav a{
  height: 100%;
  padding: 0 60px;
  text-decoration: none;
  display: flex;
  align-items: center;
  color: black;
}
nav a:hover{
  background-color: #f0f0f0;
}
nav li:first-child{
  margin-right: auto;
}
.sidebar{
  position: fixed;
  top: 0; 
  right: 0;
  height: 25vh;
  width: 250px;
  background-color: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(12px);
  box-shadow: -10px 0 10px rgba(0, 0, 0, 0.1);
  list-style: none;
  display: none;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.sidebar li{
  width: 100%;
}
.sidebar a{
  width: 100%;
}
.menu-button{
  display: none;
}
@media(max-width: 800px){
  .hideOnMobile{
    display: none;
  }
  .menu-button{
    display: block;
  }
}
@media(max-width: 400px){
  .sidebar{
    width: 100%;
  }
}
    </style>
</head>

<body class="bg-gray-100">

    <!-- Navbar Start -->
    <nav class="fixed top-0 w-[100%] shadow-xl">
        <ul class="sidebar">
          <li onclick="hideSidebar()">
            <a href="#"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                height="26"
                viewBox="0 96 960 960"
                width="26"
              >
                <path
                  d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"
                /></svg
            ></a>
          </li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Cart</a></li>
          <li><a href="#">Login</a></li>
        </ul>
        <ul>
          <li><a href="#"><img src="..//Image/dunx..png" alt="" style="width:100px; height:100px;"></a></li>
          <li class="hideOnMobile"><a href="#" class="hover:text-green-500">Blog</a></li>
          <li class="hideOnMobile"><a href="#" class="hover:text-green-500">Products</a></li>
          <li class="hideOnMobile"><a href="#" class="hover:text-green-500">About</a></li>
          <li class="hideOnMobile"><a href="/TUGAS AKHIR/checkout/keranjang-belanja.php"><img src="..//picture/shopping-cart.png" alt="" class="w-8 h-8 mt-0"></a></li>
          <li class="hideOnMobile"><img src="..//Image/account_circle_24dp_FILL0_wght400_GRAD0_opsz24.png" alt="" class="w-10 h-10 mt-5 ml-16 mr-20"></li>
          <li class="menu-button" onclick="showSidebar()">
            <a href="#"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                height="26"
                viewBox="0 96 960 960"
                width="26"
              >
                <path
                  d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"
                /></svg
            ></a>
          </li>
        </ul>
      </nav>
  
      <script>
        function showSidebar() {
          const sidebar = document.querySelector(".sidebar");
          sidebar.style.display = "flex";
        }
        function hideSidebar() {
          const sidebar = document.querySelector(".sidebar");
          sidebar.style.display = "none";
        }
      </script>
 
    <!-- Navbar End -->
    <!-- component -->

    <div class="max-w-[90%] mx-auto mt-24 rounded-md">

        <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span
                        class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
                        Slide</span>
                    <img src="..//Image/banner/Carousel (3)/1.png"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="..//Image/banner/Carousel (3)/2.png"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="..//Image/banner/Carousel (3)/3.png"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-900" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button"
                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-900" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>

    <!--Favorit Produk-->

    <div class="flex justify-evenly w-[90%] mx-auto mb-44">
        <div class="w-[25%] h-52 mt-5 border border-3 border-slate-600 hover:border-green-500 transition-all hover:rounded-2xl">
            <img src="..//Image/Nike/nike4-removebg-preview.png" alt="" class="transition-all duration-300 hover:scale-95 ml-5 mt-[-90px]">
            <div class="flex mt-16 ml-16">
                <img src="..//picture/star.png" alt="" class="w-5">
                <img src="..//picture/star.png" alt="" class="w-5 ml-2">
                <img src="..//picture/star.png" alt="" class="w-5 ml-2">
                <img src="..//picture/star.png" alt="" class="w-5 ml-2">
                <img src="..//picture/star(none).png" alt="" class="w-5 ml-2">
            </div>
            <h1 class="text-xl font-bold font-serif mt-2">Air Jordan 1 mid Union <span class="ml-20">black toe</span></h1>
        </div>
        <div class="w-[25%] h-52 mt-5 border border-3 border-slate-600 hover:border-green-500 transition-all hover:rounded-2xl">
            <img src="..//Image/boots/Favorit2-removebg-preview (1).png" alt="" class="transition-all duration-300 hover:scale-95 ml-2 mt-[-0px]">
            <div class="flex mt-7 ml-16">
                <img src="..//picture/star.png" alt="" class="w-5">
                <img src="..//picture/star.png" alt="" class="w-5 ml-2">
                <img src="..//picture/star.png" alt="" class="w-5 ml-2">
                <img src="..//picture/star.png" alt="" class="w-5 ml-2">
                <img src="..//picture/star(none).png" alt="" class="w-5 ml-2">
            </div>
            <h1 class="text-xl font-bold font-serif mt-2 ml-16">Arizona Captain <span class="ml-16">Boots</span></h1>
        </div>
        <div class="w-[25%] h-52 mt-5 border border-3 border-slate-600 hover:border-green-500 transition-all hover:rounded-2xl">
            <img src="..//Image/domino-164_6wVEHfI-unsplash-removebg-preview.png" alt="" class="transition-all duration-300 hover:scale-95 ml-5 mt-[-5px]">
            <div class="flex mt-16 ml-16">
                <img src="..//picture/star.png" alt="" class="w-5">
                <img src="..//picture/star.png" alt="" class="w-5 ml-2">
                <img src="..//picture/star.png" alt="" class="w-5 ml-2">
                <img src="..//picture/star.png" alt="" class="w-5 ml-2">
                <img src="..//picture/star(none).png" alt="" class="w-5 ml-2">
            </div>
            <h1 class="text-xl font-bold font-serif mt-2">Air Jordan 1 mid Union <span class="ml-20">black toe</span></h1>
        </div>

    </div>

    <!--Favorit Produk end-->

    <!-- diskon -->
    <div class="flex ml-14 mt-3 sm:justify-center md:justify-normal">
        <h1 class="text-2xl mr-5 mt-5">Diskon spesial</h1>
        <div class="" id="countdown-container">
            <div class="flex mt-1 mr-7" id="countdown">
            </div>
        </div>
        <div>
            <a href="..//detail/detail.html"><img src="..//Image/next.png" alt=""
                    class="w-9 h-9 mt-3 mr-28 ml-[-15px]"></a>
        </div>
    </div>

    <script>
        // Tanggal dan waktu pembukaan toko
        const openingDate = new Date('2024-06-20T09:00:00').getTime();

        // Update hitungan mundur setiap 1 detik
        const countdown = setInterval(function () {
            // Dapatkan tanggal dan waktu saat ini
            const now = new Date().getTime();

            // Hitung selisih waktu antara sekarang dan tanggal pembukaan
            const distance = openingDate - now;

            // Hitung hari, jam, menit, dan detik
            const days = Math.floor(distance / (1200 * 70 * 60 * 24));
            const hours = Math.floor((distance % (1200 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1200 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1200 * 60)) / 1000);

            // Tampilkan hitungan mundur
            document.getElementById('countdown').innerHTML = `${days}    : &nbsp ${hours} : &nbsp ${minutes} : &nbsp ${seconds} `;

            // Jika hitungan mundur sudah selesai, hentikan hitungan mundur
            if (distance < 0) {
                clearInterval(countdown);
                document.getElementById('countdown').innerHTML = 'Diskon sudah habis !';
            }
        }, 1000);

    </script>

    <!-- coba -->
    <div class="flex justify-evenly mb-40 mr-2 sm:flex-wrap md:flex-wrap xl:justify-evenly mx-14 mt-5 ">
        <div
            class="w-32 h-96 bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <a href="..//detail/detail copy.php"><img src="..//Image/Nike/nike-1.jpg" alt=""
                    class="h-52 mx-auto rounded-lg sm:w-full"></a>
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3 mt-1">
                        <p class="text-slate-400 text-sm mt-2">4.9 | 500+ terjual</p>
                        <a href="#"
                            class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px] hidden hover:">whre</a>
                    </div>

                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px] hidden hover:">whre</a>
                </div>
            </div>
        </div>
        <div
            class="w-32 h-96 bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <img src="..//Image/Nike/nike-5.jpg" alt="" class="h-52 mx-auto rounded-lg sm:w-full">
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3">
                        <p class="text-slate-400 text-sm">4.9 | 500+ terjual</p>

                    </div>
                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px]">...</a>
                </div>
            </div>
        </div>
        <div
            class="w-32 h-96 bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <img src="..//Image/boots/Favorit2-removebg-preview (1).png" alt=""
                class="h-52 mx-auto rounded-lg sm:w-full">
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3">
                        <p class="text-slate-400 text-sm">4.9 | 500+ terjual</p>

                    </div>
                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px]">...</a>
                </div>
            </div>
        </div>
        <div
            class="w-32 h-96 bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <img src="..//Image/Nike/nike3-removebg-preview.png" alt="" class="h-52 mx-auto rounded-lg sm:w-full">
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3">
                        <p class="text-slate-400 text-sm">4.9 | 500+ terjual</p>

                    </div>
                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px]">...</a>
                </div>
            </div>
        </div>
        <div
            class="w-32 h-[380px] bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <img src="..//Image/Nike/nike9-removebg-preview.png" alt="" class="h-52 mx-auto rounded-lg sm:w-full">
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3">
                        <p class="text-slate-400 text-sm">4.9 | 500+ terjual</p>

                    </div>
                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px]">...</a>
                </div>
            </div>
        </div>
        <div
            class="w-32 h-[380px] bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <img src="..//Image/canvas/Favorit3-removebg-preview (1).png" alt=""
                class="h-52 mx-auto rounded-lg sm:w-full">
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3">
                        <p class="text-slate-400 text-sm">4.9 | 500+ terjual</p>

                    </div>
                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px]">...</a>
                </div>
            </div>
        </div>
        <div
            class="w-32 h-[380px] bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <img src="..//Image/canvas/canvas2.png" alt="" class="h-52 mx-auto rounded-lg sm:w-full">
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3">
                        <p class="text-slate-400 text-sm">4.9 | 500+ terjual</p>

                    </div>
                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px]">...</a>
                </div>
            </div>
        </div>
        <div
            class="w-32 h-[380px] bg-white mb-5 shadow-lg rounded-lg md:mr-5 sm:w-64 md:w-42 cursor-pointer active:scale-95 transition ease-in">
            <img src="..//Image/canvas/canvas3.png" alt="" class="h-52 mx-auto rounded-lg sm:w-full">
            <div class="box-title w-full h-full p-2">
                <h4 class="text-md text-slate-600 font-bold font-serif">Sneaker Man</h4>
                <h3 class="text-slate-900 text-xl font-semibold py-1">Rp365.000</h3>
                <p class="font-bold text-sm"> ̶ ̶R̶p̶.̶ ̶1̶2̶4̶.̶1̶0̶0̶<span class="text-red-600 pl-2">34%</span></p>
                <p class="px-2 w-28 bg-red-100 rounded-md my-2 cursor-pointer">
                    <span class="text-xs text-red-500 font-semibold">cashback 42,7rb</span>
                </p>
                <div class="sub-kota flex items-center gap-1 mb-3">
                    <img src="..//picture/location.png" alt="" class="w-3 h-3 ">
                    <p class="text-slate-400 text-sm">Jakarta Pusat</p>
                </div>
                <div class="sub-rating flex items-center justify-between">
                    <div class="box-rating flex items-center gap-1 mt-[-15px]">
                        <img src="..//picture/star.png" alt="" class="w-3 h-3">
                        <p class="text-slate-400 text-sm">4.9 | 500+ terjual</p>

                    </div>
                    <a href="#"
                        class="text-lg font-bold text-slate-500 pb-1 px-2 hover:bg-slate-100 transition-all ease-in rounded-full mt-[-15px]">...</a>
                </div>
            </div>
        </div>
    </div>

    <h1 class="font-bold font-serif text-center mt-[-50px] mb-20 text-2xl">Our Favorit Brand</h1>

    <div class="flex justify-evenly mb-48 mx-20 ">
        <div class="px-5 py-3 transition-all ease-in-out hover:shadow-md hover:scale-105 hover:rounded-md">
            <a href="https://www.adidas.co.id/all-products.html?gad_source=1&gclid=CjwKCAjw9cCyBhBzEiwAJTUWNaDKQTSL7Dj5dMh6f3nXprqM4pF3HN--tq6_TbLpB6cSUZ8Xv7w6-xoCynEQAvD_BwE&gclsrc=aw.ds"><img src="..//Image/banner/ADIDAS.jpg" alt="" class="md:rounded-full lg:h-40 lg:w-40 sm:w-48 sm:h-28"></a>
        </div>
        <div class="px-5 py-3 transition-all ease-in-out hover:shadow-md hover:scale-105 hover:rounded-md">
            <a href="https://www.ventela.com/"><img src="..//Image/banner/VENTELA.jpg" alt="" class="md:rounded-full lg:h-40 lg:w-40 sm:w-48 sm:h-28"></a> 
        </div>
        <div class="px-5 py-3 transition-all ease-in-out hover:shadow-md hover:scale-105 hover:rounded-md">
            <a href="https://www.nike.com/id/"><img src="..//Image/banner/nike-com.jpg" alt="" class="md:rounded-full lg:h-40 lg:w-40 sm:w-48 sm:h-28"></a>
        </div>
        <div class="px-5 py-3 transition-all ease-in-out hover:shadow-md hover:scale-105 hover:rounded-md">
            <a href="https://johnson.id/"><img src="..//Image/banner/JHONSON.png" alt="" class="md:rounded-full lg:h-40 lg:w-40 sm:w-48 sm:h-28"></a>
        </div>
        
    </div> 

    <div class="flex bg-white w-[80%] h-[80%] mx-auto mb-10">
        <div>
            <img src="..//Image/sneakers/5.jpg.jpg" alt="" class="rounded-lg w-64 ml-10 mt-7">
        </div>
        <div class="ml-10">
            <h1 class="text-2xl font-semibold pt-14 pl-10 font-serif">Why Choose our website</h1>
            <div class="flex ml-10 mt-10">
                <img src="..//Image/check.png" alt="" class="w-5 h-5 mr-3">
                <h3>UX yang mudah </h3>
            </div>
            <div class="flex ml-10 mt-3">
                <img src="..//Image/check.png" alt="" class="w-5 h-5 mr-3">
                <h3>Pengguna dapat membeli produk kami dimanapun dan kapanpun</h3>
            </div>
            <div class="flex ml-10 mt-3">
                <img src="..//Image/check.png" alt="" class="w-5 h-5 mr-3">
                <h3>Pembayaran yang mudah</h3>
            </div>
            <div class="flex ml-10 mt-3">
                <img src="..//Image/check.png" alt="" class="w-5 h-5 mr-3">
                <h3>Harga terjangkau tetapi memiliki kualitas tinggi</h3>
            </div>
        </div>

    </div>

        <a href="#">
            <img src="..//Image/up-arrow (1).png" alt="" class="fixed right-3 bottom-2 w-10">
        </a>

    <!-- footer -->
    <footer class="flex sm:flex-wrap md:flex-nowrap">
        <div class="bg-green-500 w-[500px] 2xl:w-full xl:w-full sm:w-full">
            <img src="..//Image/logo.jpg" alt="" class="w-30 h-20 rounded-full ml-10 mt-20">
            <h3 class="ml-10 mt-5 text-white sm:text-red-500 md:text-white">Our startup must provide easy access and
                <br> user-friendly interface and will accept criticism &
                suggestions.
            </h3>
            <div class="flex ml-10 mt-5 text-white">
                <img src="..//picture/telephone.png" alt="" class="'w-5 h-5 bg-transparent">
                <p class="ml-3 mt-[-3px]">0895 3960 83939</p>
            </div>
            <div class="flex ml-10 mt-3 text-white mb-64">
                <img src="..//picture/mail.png" alt="" class="'w-5 h-5">
                <p class="ml-3 mt-[-3px]">dwiezy1509@gmail.com</p>
            </div>
        </div>
        <div class="bg-zinc-200 2xl:w-full xl:w-full sm:w-full">
            <h1 class="mt-28 text-2xl font-bold ml-10">Address</h1>
            <h3 class="ml-10 mt-10 text-gray-500">Jl. Abdul Muis No.44 1, RT.1/RW.8, Petojo Sel., <br> Kecamatan Gambir,
                Kota Jakarta Pusat, Daerah Khusus
                Ibukota Jakarta 10160</h3>
            <div class="flex ml-10 mt-5 text-gray-500 ">
                <img src="..//picture/calendar.png" alt="" class="'w-5 h-5">
                <p class="ml-3 mt-[-3px]">Open Monday-Saturday</p>
            </div>
            <div class="flex ml-10 mt-3 text-gray-500">
                <img src="..//picture/clock.png" alt="" class="'w-5 h-5">
                <p class="ml-3 mt-[-3px]">09:00 AM - 16:00 PM</p>
            </div>
           
        </div>
        <div class="block bg-zinc-200 w-72 2xl:w-full xl:w-full sm:w-full">
            <h1 class="mt-28 text-2xl font-bold ml-10">Contact US</h1>
            <div class="flex hover:bg-gray-700">
                <img src="..//picture/facebook.png" alt="" class="'w-8 h-8 ml-10 mt-12 cursor-pointer">
                <img src="..//picture/instagram.png" alt="" class="'w-8 h-8 ml-10 mt-12 cursor-pointer">
                <img src="..//picture/youtube.png" alt="" class="'w-8 h-8 ml-10 mt-12 cursor-pointer">
            </div>
            <section class="mt-80 flex justify-center items-center md:mr-50 ">
                <p class="hover:text-green-500">© duxx.All Rights Reserved</p>
            </section>
        </div>
       
    </footer>

    <script>
        AOS.init();
      </script>
</body>

</html>