<!DOCTYPE html>
<html data-theme="light" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REVAMP TBN</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <link rel="shortcut icon" href="{{ asset('assets/logo-1.svg') }}" type="image/svg+xml" />
  </head>
  <body class="font-popins">
    <!-- NAVBAR --> 
    <nav
      id="navbar"
      class="px-8 py-2 md:py-3 fixed w-full font-jakarta z-50 shadow-lg backdrop-blur-lg bg-biru"
    >
      <div class="flex items-center justify-between">
        <span class="flex items-center space-x-2 md:ml-10 py-1 z-10 md:py-0">
          <a href="{{ route('home') }}"
            ><img
              src="/assets/logo nav.svg"
              alt="logo navbar"
              class="w-[100px]"
          /></a>
        </span>

        <div class="lg:flex hidden gap-6 mt-2 mb-2 mr-5">
          <ul
            class="hidden mt-2 item-center space-x-10 lg:mr-20 text-white font-semibold tracking-wide md:flex"
          >
            <a href="{{ route('home') }}"><li>Home</li></a>
            <a href="{{ route('about') }}"><li>About Us</li></a>
            <a href="{{ route('event') }}"><li>Event</li></a>
            <a href="{{ route('blog') }}"><li>Blog</li></a>
            <a href="{{ route('contact') }}"><li>Contact Us</li></a>
          </ul>
          <a href="{{ route('login') }}" class="border-2 px-8 py-2 rounded-lg font-bold font-xs text-hijau border-hijau">JOIN US</a
          >
        </div>
        <button class="w-16 lg:hidden block buttonToogle">
          <img
            src="/assets/menu1.svg"
            alt="Menu"
            class="w-[100px] md:w-0 h-"
          />
        </button>
      </div>
      <!-- MOBILE MENU -->
      <div class="Mobilemenu hidden">
        <ul class="text-sm font-bold gap-6 bg-background z-10">
          <a href="{{ route('home') }}"
            ><li
              class="py-4 px-10 cursor-pointer hover:bg-white ease-in duration-300 z-10"
            >
              Home
            </li></a
          >
          <a href="{{ route('about') }}"
            ><li
              class="py-4 px-10 cursor-pointer hover:bg-white ease-in duration-300"
            >
              About Us
            </li></a
          >
          <a href="{{ route('event') }}"
            ><li
              class="py-4 px-6 ml-4 md:ml-0 lg:px-20 cursor-pointer hover:bg-white ease-in duration-300"
            >
              Event
            </li></a
          >
          <a href="{{ route('blog') }}"
            ><li
              class="py-4 px-6 ml-4 md:ml-0 lg:px-20 cursor-pointer hover:bg-white ease-in duration-300"
            >
              Blog
            </li></a
          >
          <a href="{{ route('contact') }}"
            ><li
              class="py-4 px-10 cursor-pointer hover:bg-white ease-in duration-300"
            >
              Contact Us
            </li></a
          >
        </ul>

        <div class="gap-6 mt-2 mb-2">
          <a href="{{ route('login') }}">
            <button
              class="border px-1 py-3 rounded-md font-bold font-xs bg-hijau w-full"
            >
              LOGIN
            </button>
          </a>
        </div>
      </div>
    </nav>

    <script>
      window.addEventListener("scroll", function () {
        var navbar = document.getElementById("navbar");
        if (window.scrollY > 0) {
          navbar.classList.add("bg-blues");
        } else {
          navbar.classList.remove("bg-blues");
        }
      });
    </script>

    <!-- END NAVBAR -->

    <!-- Background Blog -->
    <section
      id="home"
      class="bg-[url('/assets/bg-feedback.svg')] bg-cover bg-center relative md:w-full h-[500px] md:h-[800px]"
    >
    </section>
    <!-- END Background Blog -->
<!-- TOP ARTICLES -->
<section class="mt-[100px] mx-20">
  <h1 class="font-popins text-[34px] font-semibold flex justify-center">Let Your Mind Explore New World</h1>
  <div class="flex justify-between items-start mt-20">
    <!-- Article 1 -->
    <div class="flex flex-col items-center w-[377px]">
      <img src="/assets/banner-event1.svg" alt="" class="w-full h-[444px]" />
      <h1 class="w-full text-[27px] font-semibold mt-3">
        Transformational Sales Conference 2023
      </h1>
      <p class="w-full text-[20px] font-normal mt-5">
        "Don't find customers for your products, find products for your customers." ~ Seth Godin
        It's crucial to adapt to the changing sales landscape in the digital age, and Seth Godin's quote emphasizes the importance of customer-centricity.
      </p>
      <a href="{{ route('blog-detail1') }}">
        <button class="border py-[14px] px-[98px] justify-center items-center rounded-3xl bg-biru text-white mt-5">
        Add Your feedback
        </button>
      </a>
    </div>
    <!-- END Article 1 -->

    <!-- Article 2 -->
    <div class="flex flex-col items-center w-[377px]">
      <img src="/assets/banner-event4.svg" alt="" class="w-full h-[444px]" />
      <h1 class="w-full text-[27px] font-semibold mt-3">The Future Of Education</h1>
      <p class="w-full text-[20px] font-normal mt-14">
        Universities have a unique role to play as catalysts for innovation among the next generation.
        But how do we turn “courses and classrooms” into powerful spaces for shaping the leaders of tomorrow?
      </p>
      <a href="{{ route('blog-detail2') }}">
        <button class="border py-[14px] px-[98px] justify-center items-center rounded-3xl bg-biru text-white mt-14">
        Add Your feedback
        </button>
      </a>
    </div>
    <!-- END Article 2 -->

    <!-- Article 3 -->
    <div class="flex flex-col items-center w-[377px]">
      <img src="/assets/banner-event3.svg" alt="" class="w-full h-[444px]" />
      <h1 class="w-full text-[23px] font-semibold mt-3">
      The Future For Social Enterprises</h1>
      <p class="w-full text-[20px] font-normal py-5">
      Traditionally, social enterprises have relied on market rate investments 
      or pure philanthropic grants for their funding. With the development of 
      innovative financial models like blended finance and risk adjusted market 
      rate return impact investing.</p>
      <a href="{{ route('blog-detail3') }}">
        <button class="border py-[14px] px-[98px] justify-center items-center rounded-3xl bg-biru text-white mt-5">
        Add Your feedback
        </button>
      </a>
    </div>
    <!-- END Article 3 -->
  </div>
</section>

<div class="flex justify-between items-start mx-20 mt-28">
    <!-- Article 4 -->
    <div class="flex flex-col items-center w-[377px]">
      <img src="/assets/banner-event7.svg" alt="" class="w-full h-[444px]" />
      <h1 class="w-full text-[27px] font-semibold mt-3">
      TBN Asia Conference 2023 </h1>
      <p class="w-full text-[20px] font-normal mt-5">
      In a world once plagued by environmental degradation and societal inequalities, 
      a transformative movement emerged, igniting a path towards a sustainable future.
      </p>
      <a href="{{ route('blog-detail1') }}">
        <button class="border py-[14px] px-[98px] justify-center items-center rounded-3xl bg-biru text-white mt-10">
        Add Your feedback
        </button>
      </a>
    </div>
    <!-- END Article 4 -->

    <!-- Article 5 -->
    <div class="flex flex-col items-center w-[377px]">
      <img src="/assets/banner-event5.svg" alt="" class="w-full h-[444px]" />
      <h1 class="w-full text-[27px] font-semibold mt-3">The Future Of The Creative Economy</h1>
      <p class="w-full text-[20px] font-normal">
      The creative economy is an emerging impact investing theme, as creativity and culture are recognized alongside economics and technology for our global development.
      </p>
      <a href="{{ route('blog-detail2') }}">
        <button class="border py-[14px] px-[98px] justify-center items-center rounded-3xl bg-biru text-white mt-5">
        Add Your feedback
        </button>
      </a>
    </div>
    <!-- END Article 5 -->

    <!-- Article 6 -->
    <div class="flex flex-col items-center w-[377px]">
      <img src="/assets/banner-event6.svg" alt="" class="w-full h-[444px]" />
      <h1 class="w-full text-[23px] font-semibold mt-3">
      The Future Of Agriculture</h1>
      <p class="w-full text-[20px] font-normal py-10">
      As the current state of agriculture is neither sufficient nor sustainable, 
      food security is front and center for many communities around Southeast Asia.</p>
      <a href="{{ route('blog-detail3') }}">
        <button class="border py-[14px] px-[98px] justify-center items-center rounded-3xl bg-biru text-white mt-5">
        Add Your feedback
        </button>
      </a>
    </div>
    <!-- END Article 6 -->
  </div>
    </section>
    <!-- END Article 6 -->
    <!-- END TOP ARTICLES -->

   <    <!-- FOOTER -->
    <section class="bg-white mt-10">
      <div class="flex flex-col md:flex-row md:p-10 justify-between mx-10">
        <div class="w-full md:w-[400px] mb-5 md:mb-0">
          <img src="/assets/logo footer.svg" alt="" />
          <p
            class="text-[14px] md:text-base font-semibold leading-normal text-justify my-3 font-popins"
          >
            TBN Indonesia adalah jaringan global wirausaha yang berorientasi pada
            tujuan, investor dampak, dan pembangun kapasitas yang mengambil
            pendekatan kewirausahaan untuk mengentaskan kemiskinan di masyarakat
            berpenghasilan rendah dan kurang terlayani.
          </p>
        </div>

        <div class="flex flex-col mt-5">
          <h1 class="text-[21px] md:text-lg font-semibold font-popins">
            LOKASI
          </h1>
          <p
            class="text-[18px] md:text-base font-normal font-popins mt-3 md:mt-5"
          >
            Jl. M.H.Thamrin No.20, Menteng
          </p>
          <p class="text-[18px] md:text-base font-normal font-popins">
            Jakarta Pusat 10350, Indonesia
          </p>
        </div>

        <div>
          <h1
            class="font-popins font font-semibold text-[21px] md:text-lg mt-2"
          >
            Perusahaan
          </h1>
          <div
            class="flex flex-col font-popins font-normal text-[18px] md:text-base mt-3 md:mt-5"
          >
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}"class="py-2">About Us</a>
            <a href="{{ route('event') }}">Event</a>
            <a href="{{ route('blog') }}"class="py-2">Blog</a>
            <a href="{{ route('contact') }}">Contact Us</a>
          </div>
        </div>

        <div>
          <h1 class="font-popins font-semibold text-[21px] md:text-lg">
            Ikuti Social Media Kami
          </h1>
          <div class="flex gap-3 md:gap-[20px] py-5">
            <a href="https://www.instagram.com/tbn.indonesia/"
              ><img src="/assets/nav-instagram.svg" alt=""
            /></a>
            <a href="https://www.youtube.com/@tbnindonesia902"
              ><img src="/assets/nav-youtube.svg" alt=""
            /></a>
            <a href="https://wa.me/+6282310001908"><img src="/assets/nav-whatsapp.svg" alt="" /></a>
            <a href=""><img src="/assets/nav-gmail.svg" alt="" /></a>
            <a href=""><img src="/assets/nav-link.svg" alt="" /></a>
          </div>
          <h1 class="font-popins font-semibold text-[21px] md:text-lg">
            Hubungi Kami
          </h1>
          <div class="flex gap-1 mt-2">
            <img
              src="/assets/icon email.svg"
              class="font-popins font-normal text-[17px]"
              alt=""
            />
            <a href="https://www.tbnIndonesia.org/">hello@tbnIndonesia.org</a>
          </div>
        </div>
      </div>
      <div class="bg-biru">
        <h1
          class="justify-center items-center text-center p-5 text-white w-[380px] md:w-full text-[16px] font-bold"
        >
          Copyright © 2023 - Transformational Business Network (TBN) Indonesia -
          All rights reserved.
        </h1>
      </div>
    </section>
    <!-- END FOOTR -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/scrollnavbar.js"></script>
    <script src="../js/humberger.js"></script>
    <script src="../js/caraousel.js"></script>
  </body>
</html>
