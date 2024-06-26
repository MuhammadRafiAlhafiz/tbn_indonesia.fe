<!DOCTYPE html>
<html data-theme="light" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBN Indonesia</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/logo-1.svg') }}" type="image/svg+xml" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
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

<!-- Page Banner -->
<!-- content banner -->
<section
  id="home"
  class="bg-[url('/assets/bg-event.svg')] bg-cover bg-center relative w-full h-[600px] md:h-[600px]"
>
  <div
    class="max-w-[1200px] min-h-[600px] flex flex-col justify-center items-end mx-auto px-4 text-white"
  >
    <h1 class="w-full md:w-[443px] font-popins text-[28px] md:text-[34px] font-semibold mt-20 md:mt-36 text-center md:text-right">
      TRANSFORMATIONAL SALES CONFERENCE
    </h1>
    <h1 class="w-full md:w-[443px] font-popins text-[14px] md:text-[17px] font-normal text-center md:text-right">
      "Don't find customers for your products, find products for your customers." ~ Seth Godin
    </h1>
    <span class="flex flex-col md:flex-row justify-center md:justify-end mr-0 md:mr-24 gap-3 md:gap-10 mt-10">
      <a href="{{ route('event-detail1') }}">
        <p
          class="w-full md:w-[139px] p-[10px] border rounded-2xl flex items-center justify-center bg-hijau text-[14px] md:text-[17px] font-popins font-normal"
        >
          Get a Ticket
        </p>
      </a>
      <a href="{{ route('event') }}">
        <p
          class="w-full md:w-[139px] p-[10px] border rounded-2xl flex items-center justify-center text-[14px] md:text-[17px] font-popins font-normal"
        >
          Learn More
        </p>
      </a>
    </span>
  </div>

  <!-- SEARCH BAR -->
  <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 w-full md:w-[1086px] px-4 md:px-0 mt-24">
    <div class="border py-5 px-5 md:px-20 bg-biru rounded-3xl w-full h-auto md:h-[140px] flex flex-col md:flex-row justify-center items-center">
      <div class="flex flex-col md:flex-row gap-4 md:gap-3 w-full">
        <span class="w-full md:w-auto flex flex-col items-start">
          <h1 class="font-popins text-[14px] md:text-[17px] font-normal text-white">Search Event</h1>
          <input
            type="text"
            id="Business"
            name="Business"
            placeholder="Business"
            class="mt-1 block w-full p-3 shadow-sm sm:text-sm rounded-md bg-transparent font-popins text-[18px] md:text-[21px] font-semibold text-white"
          />
          <img src="/assets/garis-event.svg" alt="" class="w-full md:w-auto mt-2">
        </span>
        <span class="w-full md:w-auto flex flex-col items-start">
          <h1 class="font-popins text-[14px] md:text-[17px] font-normal text-white">Place</h1>
          <input
            type="text"
            id="Place"
            name="Place"
            placeholder="Place"
            class="mt-1 block w-full p-3 shadow-sm sm:text-sm rounded-md bg-transparent font-popins text-[18px] md:text-[21px] font-semibold text-white"
          />
          <img src="/assets/garis-event.svg" alt="" class="w-full md:w-auto mt-2">
        </span>
        <span class="w-full md:w-auto flex flex-col items-start">
          <h1 class="font-popins text-[14px] md:text-[17px] font-normal text-white">Time</h1>
          <select class="mt-1 block w-full p-3 shadow-sm sm:text-sm rounded-md bg-transparent text-gray-400 font-popins text-[18px] md:text-[21px] font-semibold">
            <option>Any Date</option>
            <option>Monday</option>
            <option>Tuesday</option>
            <option>Wednesday</option>
          </select>
          <img src="/assets/garis-event.svg" alt="" class="w-full md:w-auto mt-2">
        </span>
      </div>
    </div>
  </div>
</section>
<!-- END SEARCH BAR -->
<!-- END Page Banner -->


    <!-- LIST EVENT -->
    <!-- EVENT 1 -->
    <div id="event" class="min-h-[600px] flex flex-col md:flex-row justify-center items-center gap-14 text-white mt-44 md:mt-0">
        <img src="/assets/banner-event1.svg" alt="" class="w-[300px] h-[375px]" />
        <div class="flex flex-col items-center md:items-start text-center md:text-left">
          <p class="text-hijau">[About Conference]</p>
          <h1 class="text-[20px] md:text-[24px] font-semibold font-popins text-black">
            Transformational Sales Conference 2023
          </h1>
          <p class="text-[12px] md:text-[17px] font-normal font-popins text-black w-[370px] md:w-[800px] mt-8 ml-2 md:ml-0">
            "Don't find customers for your products, find products for your customers." ~ Seth Godin
          </p>
          <p class="text-[12px] md:text-[17px] font-normal font-popins text-black w-[370px] md:w-[800px] mt-8 ml-2 md:ml-0">
            It's crucial to adapt to the changing sales landscape in the digital age, and Seth Godin's quote emphasizes the importance of customer-centricity. Digital transformation has indeed shifted the focus towards online sales, but it's essential to remember that serving the customer's needs remains paramount. The Transformational Sales Conference sounds like a great opportunity to explore the evolving world of sales and learn how to provide excellent service in both online and offline contexts.
          </p>
          <div class="flex flex-col md:flex-row gap-[20px] md:gap-[31px] text-white mt-10 justify-center md:justify-start items-center">
            <a href="{{ route('event-detail1') }}">
              <p class="border bg-hijau py-[10px] px-[20px] rounded-xl text-center">
                Read More
              </p>
            </a>
          </div>
        </div>
      </div>
      <hr class="w-full border-t-4 border-gray-300">
      <!-- END EVENT 1 -->

      <!-- EVENT 2 -->
      <div class="min-h-[600px] flex flex-col md:flex-row justify-center items-center gap-14 text-white">
        <img src="/assets/banner-event2.svg" alt="" class="w-[300px] h-[375px]" />
        <div class="flex flex-col items-center md:items-start text-center md:text-left">
          <p class="text-hijau">[About Conference]</p>
          <h1 class="text-[20px] md:text-[24px] font-semibold font-popins text-black">
            TBN Asia Conference 2023 </h1>
          <p class="text-[12px] md:text-[17px] font-normal font-popins text-black w-[370px] md:w-[800px] mt-8 ml-2 md:ml-0">
            In a world once plagued by environmental degradation and societal inequalities, a transformative movement emerged, igniting a path towards a sustainable future. This narrative follows the lives of four individuals whose passion and dedication became catalysts for change in agriculture, education, green technology, digital innovation, and art and culture.

            Together, they embarked on a shared mission to harmonize humanity's relationship with the planet and shape a brighter tomorrow.
            
                      </p>
          <div class="flex flex-col md:flex-row gap-[20px] md:gap-[31px] text-white mt-10 justify-center md:justify-start items-center">
            <a href="{{ route('event-detail2') }}">
              <p class="border bg-hijau py-[10px] px-[20px] rounded-xl text-center">
                Read More
              </p>
            </a>
          </div>
        </div>
      </div>
      <hr class="w-full border-t-4 border-gray-300">
      <!-- END EVENT 2 -->

      <!-- EVENT 3 -->
      <div class="min-h-[600px] flex flex-col md:flex-row justify-center items-center gap-14 text-white">
        <img src="/assets/banner-event3.svg" alt="" class="w-[300px] h-[375px]" />
        <div class="flex flex-col items-center md:items-start text-center md:text-left">
          <p class="text-hijau">[About Conference]</p>
          <h1 class="text-[20px] md:text-[24px] font-semibold font-popins text-black">
            The Future for Social Enterprises          </h1>
          <p class="text-[12px] md:text-[17px] font-normal font-popins text-black w-[370px] md:w-[800px] mt-8 ml-2 md:ml-0">
            Traditionally, social enterprises have relied on market rate investments or pure philanthropic grants for their funding. With the development of innovative financial models like blended finance and risk adjusted market rate return impact investing, rich opportunities are generated for social enterprises to tap into the huge potential of private markets for capital. These opportunities can be catalytic for the social enterprise, and enable them to scale. Social enterprises are entrepreneurial organizations that blend social benefits and financial returns. 

            So the capital that they rely on should also sit on a continuum that ranges from philanthropy to market-return impact investing. This is the emerging capital market for social enterprises, and the future.          </p>
          <div class="flex flex-col md:flex-row gap-[20px] md:gap-[31px] text-white mt-10 justify-center md:justify-start items-center">
            <a href="{{ route('event-detail3') }}">
              <p class="border bg-hijau py-[10px] px-[20px] rounded-xl text-center">
                Read More
              </p>
            </a>
          </div>
        </div>
      </div>
      <hr class="w-full border-t-4 border-gray-300">
      <!-- END EVENT 3 -->

      <!-- EVENT 4 -->
      <div class="min-h-[600px] flex flex-col md:flex-row justify-center items-center gap-14 text-white">
        <img src="/assets/banner-event4.svg" alt="" class="w-[300px] h-[375px]" />
        <div class="flex flex-col items-center md:items-start text-center md:text-left">
          <p class="text-hijau">[About Conference]</p>
          <h1 class="text-[20px] md:text-[24px] font-semibold font-popins text-black">
            The Future of Education</h1>
          <p class="text-[12px] md:text-[17px] font-normal font-popins text-black w-[370px] md:w-[800px] mt-8 ml-2 md:ml-0">
            Universities have a unique role to play as catalysts for innovation among the next generation. But how do we turn “courses and classrooms” into powerful spaces for shaping the leaders of tomorrow? This panel will explore strategies for youth development, and how universities can foster a culture of entrepreneurship and creativity that drives innovation. Special emphasis will be given to how these can be applied to Indonesian institutions seeking to innovate.          </p>
          <div class="flex flex-col md:flex-row gap-[20px] md:gap-[31px] text-white mt-10 justify-center md:justify-start items-center">
            <a href="{{ route('event-detail4') }}">
              <p class="border bg-hijau py-[10px] px-[20px] rounded-xl text-center">
                Read More
              </p>
            </a>
          </div>
        </div>
      </div>
      <hr class="w-full border-t-4 border-gray-300">
      <!-- END EVENT 4 -->
    <!-- END LIST EVENT -->

  <!-- LETS GROW Together -->
<section class="bg-biru py-20">
  <span class="block text-center">
    <h1 class="font-popins text-[32px] md:text-[44px] font-bold text-white">Let’s <span class="text-hijau">GROW</span> Together</h1>
    <p class="font-popins text-[14px] md:text-[17px] font-normal w-full md:w-[680px] h-auto md:h-[80px] text-white mx-auto mt-4 md:mt-0 px-4">
      Let's cultivate our dreams and aspirations, supporting one another every step of the way. By pooling our resources, knowledge, and experiences, we turn our individual visions into a collective reality. Each milestone we reach is a testament to our shared dedication and hard work.
    </p>
  </span>
  <div class="flex flex-col md:flex-row justify-center items-center mb-20 gap-10 md:gap-[120px] mt-10 md:mt-10">
    <img src="/assets/Event-Grow.svg" alt="" class="w-[300px] md:w-[500px] h-auto md:h-[598px] mx-auto md:mx-0">
    <div class="text-white w-full md:w-[470px] h-auto md:h-[440px] p-4 md:p-0">
      <h1 class="font-popins text-[20px] md:text-[27px] font-semibold">Get yourself Inspired</h1>
      <p class="font-popins text-[14px] md:text-[17px] font-normal py-5">
        In a world full of possibilities, "Get Yourself Inspired" is a call to embrace life's beauty and your own potential. Imagine waking up each day with purpose, ready to tackle new challenges and explore uncharted territories. Whether pursuing personal goals, creating innovative solutions, or finding joy in everyday moments, inspiration unlocks the door to greatness. By seeking experiences that move you and surrounding yourself with uplifting people, you can transform your life and those around you.
      </p>
      <p class="font-popins text-[14px] md:text-[17px] font-normal">
        At its core, getting inspired means opening your heart and mind to the world's wonders and continuously learning. It's about harnessing inner strength, cultivating passions, and daring to dream big. When inspired, your story becomes a beacon of hope and resilience. Take that first step—dive into a new book, start a creative project, travel somewhere new, or simply appreciate life's small wonders. Embrace the journey, celebrate victories, learn from setbacks, and keep moving forward. Your inspired life is waiting—are you ready to begin?
      </p>
    </div>
  </div>
</section>
<!-- END LETS GROW Together -->


<!-- Sponsor -->
<section class="py-20 bg-white">
  <h1 class="font-nunito text-[32px] md:text-[42px] font-extrabold text-center mb-10">Our Partners</h1>
  <div class="max-w-[1200px] mx-auto px-4">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="w-full h-[100px] md:h-[200px] overflow-hidden bg-white rounded-2xl shadow-md flex justify-center items-center">
            <img src="/assets/partner1.svg" alt="Image 1" class="h-full object-contain">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="w-full h-[100px] md:h-[200px] overflow-hidden bg-white rounded-lg shadow-md flex justify-center items-center">
            <img src="/assets/partner2.svg" alt="Image 2" class="h-full object-contain">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="w-full h-[100px] md:h-[200px] overflow-hidden bg-white rounded-lg shadow-md flex justify-center items-center">
            <img src="/assets/partner3.svg" alt="Image 3" class="h-full object-contain">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="w-full h-[100px] md:h-[200px] overflow-hidden bg-white rounded-lg shadow-md flex justify-center items-center">
            <img src="/assets/partner4.svg" alt="Image 4" class="h-full object-contain">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="w-full h-[100px] md:h-[200px] overflow-hidden bg-white rounded-lg shadow-md flex justify-center items-center">
            <img src="/assets/partner5.svg" alt="Image 5" class="h-full object-contain">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="w-full h-[100px] md:h-[200px] overflow-hidden bg-white rounded-lg shadow-md flex justify-center items-center">
            <img src="/assets/partner6.svg" alt="Image 6" class="h-full object-contain">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END SPONSOR -->


<!-- TESTIMONI EVENT -->
<div class="flex flex-col justify-center items-center px-4">
  <img src="/assets/event-Rectangle.svg" alt="" class="w-[119px] h-[14px] mt-20">
  <h1 class="font-popins text-[32px] md:text-[56px] font-bold text-biru py-5 text-center">Testimoni Event</h1>
  
  <div class="relative w-full max-w-3xl mb-4 flex items-center">
    <!-- Navigation buttons -->
    <button id="prevBtn" class="bg-gray-200 px-4 py-2 rounded-full mr-4 md:mr-28">
      <img src="/assets/button-prev.svg" alt="">
    </button>

    <!-- Slider main container -->
    <div class="relative flex-1">
      <div class="slide flex flex-col md:flex-row justify-center items-center gap-5">
        <img src="/assets/event-testimoni1.svg" alt="" class="w-[150px] h-[150px] md:w-[250px] md:h-[250px]">
        <div class="flex flex-col mt-2 items-center md:items-start">
          <h1 class="font-popins text-[20px] md:text-[34px] font-semibold text-gray-500 text-center md:text-left">Varsha Adhikari</h1>
          <div class="flex w-[150px] md:w-[200px] h-[50px]">
            <img src="/assets/event-starnone.svg" alt="Star" />
          </div>
          <p class="w-full md:w-[400px] text-[14px] md:text-[16px] font-semibold py-2 text-center md:text-left">
            One of the best decisions for my career growth. Practical tools and 
            creative ideas have positively impacted my sales techniques. I'll be back next year!
          </p>
          <img src="/assets/event-detailcomment.svg" alt="Star" class="w-[100px] h-[100px] md:w-[150px] md:h-[133px] rounded-lg" />
        </div>
      </div>

      <div class="slide hidden">
        <div class="flex flex-col md:flex-row justify-center items-center gap-5">
          <img src="/assets/event-testimoni2.svg" alt="" class="w-[150px] h-[150px] md:w-[250px] md:h-[250px]">
          <div class="flex flex-col mt-2 items-center md:items-start">
            <h1 class="font-popins text-[20px] md:text-[34px] font-semibold text-gray-500 text-center md:text-left">Thomas Johnson</h1>
            <div class="flex w-[150px] md:w-[200px] h-[50px]">
              <img src="/assets/event-starnone.svg" alt="Star" />
            </div>
            <p class="w-full md:w-[400px] text-[14px] md:text-[16px] font-semibold py-2 text-center md:text-left">
              One of the best aspects of this conference was the networking opportunities. 
              I had the chance to meet many professionals from the same industry and exchange 
              ideas and experiences.
            </p>
            <img src="/assets/event-detailcomment2.svg" alt="Star" class="w-[100px] h-[100px] md:w-[150px] md:h-[133px] rounded-lg" />
          </div>
        </div>
      </div>

      <div class="slide hidden">
        <div class="flex flex-col md:flex-row justify-center items-center gap-5">
          <img src="/assets/event-testimoni3.svg" alt="" class="w-[150px] h-[150px] md:w-[250px] md:h-[250px]">
          <div class="flex flex-col mt-2 items-center md:items-start">
            <h1 class="font-popins text-[20px] md:text-[34px] font-semibold text-gray-500 text-center md:text-left">Ronaldo Messi</h1>
            <div class="flex w-[150px] md:w-[200px] h-[50px]">
              <img src="/assets/event-starnone.svg" alt="Star" />
            </div>
            <p class="w-full md:w-[400px] text-[14px] md:text-[16px] font-semibold py-2 text-center md:text-left">
              This conference provided direct access to industry experts and thought leaders. 
              The Q&A sessions offered the opportunity to get answers directly from highly 
              experienced speakers.
            </p>
            <img src="/assets/event-detailcomment2.svg" alt="Star" class="w-[100px] h-[100px] md:w-[150px] md:h-[133px] rounded-lg" />
          </div>
        </div>
      </div>
    </div>

    <button id="nextBtn" class="bg-hijau px-4 py-2 rounded-full ml-4 md:ml-28">
      <img src="/assets/button-next.svg" alt="">
    </button>
  </div>
</div>
<!-- END TESTIMONI EVENT -->



<!-- FOOTER -->
<section class="bg-white mt-10">
  <div class="flex flex-col md:flex-row md:p-10 justify-between mx-5 md:mx-20">
    <div class="w-full md:w-[400px] mb-5 md:mb-0">
      <img src="/assets/logo footer.svg" alt="" />
      <p class="text-[14px] md:text-base font-semibold leading-normal text-justify my-3 font-popins">
        TBN Indonesia adalah jaringan global wirausaha yang berorientasi pada tujuan, investor dampak, dan pembangun kapasitas yang mengambil pendekatan kewirausahaan untuk mengentaskan kemiskinan di masyarakat berpenghasilan rendah dan kurang terlayani.
      </p>
    </div>

    <div class="flex flex-col mt-5">
      <h1 class="text-[18px] md:text-lg font-semibold font-popins">LOKASI</h1>
      <p class="text-[14px] md:text-base font-normal font-popins mt-3 md:mt-5">
        Jl. M.H.Thamrin No.20, Menteng
      </p>
      <p class="text-[14px] md:text-base font-normal font-popins">
        Jakarta Pusat 10350, Indonesia
      </p>
    </div>

    <div class="flex flex-col mt-5">
      <h1 class="font-popins font-semibold text-[18px] md:text-lg">Perusahaan</h1>
      <div class="flex flex-col font-popins font-normal text-[14px] md:text-base mt-3 md:mt-5">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}" class="py-2">About Us</a>
        <a href="{{ route('event') }}">Event</a>
        <a href="{{ route('blog') }}" class="py-2">Blog</a>
        <a href="{{ route('contact') }}">Contact Us</a>
      </div>
    </div>

    <div class="flex flex-col mt-5">
      <h1 class="font-popins font-semibold text-[18px] md:text-lg">Ikuti Social Media Kami</h1>
      <div class="flex gap-3 md:gap-[20px] py-5">
        <a href="https://www.instagram.com/tbn.indonesia/"><img src="/assets/nav-instagram.svg" alt="" /></a>
        <a href="https://www.youtube.com/@tbnindonesia902"><img src="/assets/nav-youtube.svg" alt="" /></a>
        <a href="https://wa.me/+6282310001908"><img src="/assets/nav-whatsapp.svg" alt="" /></a>
        <a href=""><img src="/assets/nav-gmail.svg" alt="" /></a>
        <a href=""><img src="/assets/nav-link.svg" alt="" /></a>
      </div>
      <h1 class="font-popins font-semibold text-[18px] md:text-lg">Hubungi Kami</h1>
      <div class="flex gap-1 mt-2 items-center">
        <img src="/assets/icon email.svg" class="font-popins font-normal text-[17px]" alt="" />
        <a href="https://www.tbnIndonesia.org/">hello@tbnIndonesia.org</a>
      </div>
    </div>
  </div>
  <div class="bg-biru">
    <h1 class="justify-center items-center text-center p-5 text-white text-[12px] md:text-[16px] font-bold">
      Copyright © 2023 - Transformational Business Network (TBN) Indonesia - All rights reserved.
    </h1>
  </div>
</section>
<!-- END FOOTER -->


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="../js/eventslide.js"></script>
<script src="../js/scrollnavbar.js"></script>
<script src="../js/humberger.js"></script>
<script src="../js/caraousel.js"></script>
</body>
</html>