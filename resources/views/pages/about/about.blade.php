<!DOCTYPE html>
<html data-theme="light" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ABOUT US</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="shortcut icon" href="{{ asset('assets/logo-1.svg') }}" type="image/svg+xml" />
    <style>
      .bullet::before {
          content: '•';
          margin-right: 0.5rem;
          color: white; /* You can change the color */
      }
  </style>
  </head>
  <body class="font-popins ">
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

    <!-- Background About -->
    <section
      id="home"
      class="bg-[url('/assets/bg-about.svg')] bg-cover bg-center relative md:w-full md:h-[750px]"
    >
      <div
        class="max-w-[1200px] min-h-[100vh] flex flex-col justify-center mx-auto px-4 text-white"
      >
        <h1
          class="text-[30px] md:text-[56px] font-bold leading-tight md:leading-normal flex gap-5"
        >
          <img src="/assets/Garis.svg" alt="" />

          WHO WE ARE
        </h1>
        <div class="flex gap-14 mt-10">
          <h1
            class="font-semibold text-[15px] md:text-[21px] leading-tight md:leading-normal mt-7 md:mt-8"
          >
            TBN Indonesia is a global network of purpose-driven entrepreneurs,
            impact investors and capacity builders who take an enterprise
            approach to alleviate poverty in low-income and underserved
            communities
          </h1>
          <h1
            class="font-semibold text-[15px] md:text-[21px] leading-tight md:leading-normal mt-7 md:mt-8"
          >
            Founded by one of the pioneers of impact investing, Dr. Dato Kim
            Tan, TBN Indonesia was then launched in 2003 through the creation of
            a strategic partnership with Belmont University and Templeton
            Religion Trust.
          </h1>
        </div>
      </div>
    </section>
    <!-- End Background About -->

    <!-- WE ARE -->
    <img
      src="/assets/we-are.svg"
      alt=""
      class="flex justify-center items-center w-full h-[500px] md:h-[800px] py-10"
    />
    <!-- END WE ARE -->

<!-- OUR HISTORY -->
<section class="bg-background">
  <div class="md:w-[1200px] w-full px-4 md:px-0 mx-auto py-16">
    <div class="flex items-center text-[36px] md:text-[57px] font-extrabold text-biru gap-3 md:gap-5">
      <img src="/assets/GarisBiru.svg" alt="" class="w-6 md:w-auto" />
      <h1>Our History</h1>
    </div>
    <div class="flex flex-col md:flex-col gap-5 w-full mt-5">
      <p class="text-[15px] md:text-[17px] font-normal">
        While founded in 2003, TBN began to accelerate its impact with the
        formalization of social entrepreneur training programs in Africa and
        Asia in 2017 and 2019 respectively. TBN has supported more than 800
        entrepreneurs, helped launch/scale almost 400 enterprises, and
        contribute to growing regional ecosystems in Asia, Africa and,
        effective 2022, the Americas, with multiple events, collaborations,
        impact visits, speaking engagements and introductions every year.
      </p>
      <p class="text-[15px] md:text-[17px] font-normal mt-5 md:mt-0">
        Over this time, TBN has been quietly pioneering a distinctive and
        effective model of enterprise solutions to poverty, one which
        embraces diversity and encourages long-term relationships with
        partners and collaborators, one that is open, generative, and
        supportive of the greater social impact ecosystem. This model has a
        demonstrated track record of working in frontier and emerging
        markets and in culturally and religiously diverse regions. The
        results are success stories of transformational business with a
        poverty alleviation focus that have achieved scale in Africa and
        Asia. The Indonesia was launched in September 2023 in a strategic
        partnership with Belmont University Innovation Labs with the support
        of the Templeton Religion Trust, a global charitable trust chartered
        by Sir John Templeton. We launched with four founding chapters -
        Africa, Asia, Indonesia and Americas.
      </p>
    </div>
  </div>
</section>
<!-- END OUR HISTORY -->


<!-- OUR FOCUS SECTOR -->
  <section
  id="about"
  class="bg-cover bg-center relative w-full min-h-[1200px]" 
  style="background-image: url('/assets/bg-focus.svg');">
  <h1 class="font-popins text-[36px] md:text-[56px] font-extrabold text-biru text-center py-8 md:py-14">Our Focus Sectors</h1>
  <div
    class="flex flex-col md:flex-row items-center justify-center text-center px-4 gap-8">
    <span class="bg-white flex flex-col justify-center items-center text-center py-8 md:py-14 px-4 md:px-8 rounded-3xl">
      <img src="/assets/about-focus1.svg" alt="" class="w-[60px] md:w-[80px] h-[60px] md:h-[80px]" />
      <h1 class="text-biru text-center font-popins text-[22px] md:text-[27px] font-semibold py-4 md:py-5">Agriculture</h1>
      <p class="text-center font-popins text-[14px] md:text-[17px] font-normal w-full md:w-[350px] h-auto md:h-[200px] text-black">The agriculture 
        sector encompasses all activities related to 
        growing plants and raising animals to produce food, fiber, and 
        other products needed by humans. TBN Indonesia is likely involved 
        in projects that support sustainable agricultural practices, 
        improve agricultural productivity, and implement innovative technologies 
        to aid farmers.</p>
    </span>

    <span class="bg-white flex flex-col justify-center items-center text-center py-8 md:py-14 px-4 md:px-8 rounded-3xl">
      <img src="/assets/about-focus2.svg" alt="" class="w-[60px] md:w-[80px] h-[60px] md:h-[80px]" />
      <h1 class="text-biru text-center font-popins text-[22px] md:text-[27px] font-semibold py-4 md:py-5">Green Technology</h1>
      <p class="text-center font-popins text-[14px] md:text-[17px] font-normal w-full md:w-[350px] h-auto md:h-[200px] text-black">Green technology 
        refers to environmentally friendly and sustainable technologies. This includes the use of renewable energy, 
        effective waste management, and practices that reduce negative environmental impacts. TBN Indonesia may 
        support the development and implementation of green technologies that help reduce carbon footprints and 
        enhance environmental sustainability.</p>
    </span>

    <span class="bg-white flex flex-col justify-center items-center text-center py-8 md:py-14 px-4 md:px-8 rounded-3xl">
      <img src="/assets/about-focus3.svg" alt="" class="w-[60px] md:w-[80px] h-[60px] md:h-[80px]" />
      <h1 class="text-biru text-center font-popins text-[22px] md:text-[27px] font-semibold py-4 md:py-5">Digital</h1>
      <p class="text-center font-popins text-[14px] md:text-[17px] font-normal w-full md:w-[350px] h-auto md:h-[200px] text-black">The digital sector 
        involves information and communication technology, encompassing the use of computers, the internet, and other 
        digital devices to access, store, and process information. This focus may include support for digital 
        infrastructure, digital literacy, development of applications and technological platforms, and digital 
        transformation across various industries.</p>
    </span>
  </div>
      
  <div
    class="flex flex-col md:flex-row items-center justify-center px-4 gap-8 mt-8">
    <span class="bg-white flex flex-col justify-center items-center text-center py-8 md:py-14 px-4 md:px-8 rounded-3xl">
      <img src="/assets/about-focus4.svg" alt="" class="w-[60px] md:w-[80px] h-[60px] md:h-[80px]" />
      <h1 class="text-biru text-center font-popins text-[22px] md:text-[27px] font-semibold py-4 md:py-5">Education</h1>
      <p class="text-center font-popins text-[14px] md:text-[17px] font-normal w-full md:w-[350px] h-auto md:h-[200px] text-black">The education sector 
        is related to the dissemination of knowledge, skills, and values to individuals to help them develop personally 
        and professionally. TBN Indonesia might be involved in educational programs that enhance access to and the 
        quality of education, teacher training, curriculum development, and non-formal education initiatives.</p>
    </span>

    <span class="bg-white flex flex-col justify-center items-center text-center py-8 md:py-14 px-4 md:px-8 rounded-3xl">
      <img src="/assets/about-focus5.svg" alt="" class="w-[60px] md:w-[80px] h-[60px] md:h-[80px]" />
      <h1 class="text-biru text-center font-popins text-[22px] md:text-[27px] font-semibold py-4 md:py-5">Arts & Culture</h1>
      <p class="text-center font-popins text-[14px] md:text-[17px] font-normal w-full md:w-[350px] h-auto md:h-[200px] text-black">Arts and culture 
        encompass all forms of creative expression and the cultural heritage of a society. This focus may include 
        support for artists and creators, preservation of traditional cultures, development of the creative industries, 
        and promotion of cultural diversity. TBN Indonesia might work to promote cultural awareness and arts through 
        various programs and initiatives.</p>
    </span>
  </div>
  </section>
<!-- END OUR FOCUS SECTOR -->


<!-- WE BELIEVE IN -->
    <img
      src="/assets/we believe in.svg"
      alt=""
      class="w-full h-[500px] md:h-[800px]"
    />
<!-- END WE BELIEVE IN -->

<!-- OUR APPROACH TO IMPACT -->
  <section class="bg-bgblue py-10 md:py-16">
  <div class="flex flex-col md:flex-row justify-center items-center gap-3 md:gap-5 py-8 md:py-16">
    <hr class="w-[100px] md:w-[280px] border-t-4 border-dashed border-biru">
    <h1 class="text-biru font-popins text-[28px] md:text-[56px] font-extrabold text-center">Our Approach To Impact</h1>
    <hr class="w-[100px] md:w-[280px] border-t-4 border-dashed border-biru">
  </div>

  <div class="bg-white mx-4 md:mx-20 rounded-[30px] py-10">
    <div class="flex flex-col md:flex-row gap-10 md:gap-28 justify-center items-center py-10">
      <span class="text-center md:text-left px-4 md:px-0">
        <h1 class="font-popins text-biru text-[22px] md:text-[34px] font-semibold">Transformational Leadership Program</h1>
        <p class="font-popins text-biru text-[15px] md:text-[17px] font-normal md:w-[700px]">Leadership Training Program to 
          prepare the people to engage in transformational change in their families, communities and businesses. 
          Our program & curriculum is used for organizational, corporations, schools, and universities</p>
      </span>
      <img src="/assets/about-impact1.svg" alt="" class="w-[200px] md:w-[285px] h-[130px] md:h-[185px]" />
    </div>
    <hr class="w-full border-t-2 border-dashed border-biru">

    <div class="flex flex-col md:flex-row gap-10 md:gap-28 justify-center items-center py-10">
      <img src="/assets/about-impact2.svg" alt="" class="w-[200px] md:w-[285px] h-[130px] md:h-[185px]" />
      <span class="text-center md:text-left px-4 md:px-0">
        <h1 class="font-popins text-biru text-[22px] md:text-[34px] font-semibold">Community Development</h1>
        <p class="font-popins text-biru text-[15px] md:text-[17px] font-normal md:w-[700px]">Education for Local Communities 
          on Health and Well-being: We empower & encourage residents of rural villages to understand they have 
          power over their own lives. Our initiative focuses on developing & educating local communities with 
          Financial Literacy & Health Awareness (to fight stunting)</p>
      </span>
    </div>
    <hr class="w-full border-t-2 border-dashed border-biru">

    <div class="flex flex-col md:flex-row gap-10 md:gap-28 justify-center items-center py-10">
      <span class="text-center md:text-left px-4 md:px-0">
        <h1 class="font-popins text-biru text-[22px] md:text-[34px] font-semibold">Sociopreneur Empowerment</h1>
        <p class="font-popins text-biru text-[15px] md:text-[17px] font-normal md:w-[700px]">Our vision is to produce 1,000 
          sociopreneurs who can create 10,000 jobs in the next 5 years in Indonesia. University Roadshow 1-Day 
          Bootcamp Sociopreneurship Bootcamp Incubators & Accelerators Access to Seed Funding</p>
      </span>
      <img src="/assets/about-impact3.svg" alt="" class="w-[200px] md:w-[285px] h-[130px] md:h-[185px]" />
    </div>
    <hr class="w-full border-t-2 border-dashed border-biru">

    <div class="flex flex-col md:flex-row gap-10 md:gap-28 justify-center items-center mt-10">
      <img src="/assets/about-impact4.svg" alt="" class="w-[200px] md:w-[285px] h-[130px] md:h-[185px]" />
      <span class="text-center md:text-left px-4 md:px-0">
        <h1 class="font-popins text-biru text-[22px] md:text-[34px] font-semibold">Impact Investment</h1>
        <p class="font-popins text-biru text-[15px] md:text-[17px] font-normal md:w-[700px]">Collaboration to invest in and 
          mentor the next generation of young sociopreneurs. We invest to scale businesses that can bring 
          positive impact and change to Indonesia</p>
      </span>
    </div>
  </div>
  </section>
<!-- END OUR APPROACH TO IMPACT -->


<!-- Our Unique Approach -->
<section class="bg-biru p-6 md:p-24">
  <span class="flex flex-row gap-2 mx-4 md:mx-20">
    <img src="/assets/GarisHijau.svg" alt="" class="h-[100px]" />
    <h1 class="text-hijau text-[36px] md:text-[57px] font-popins font-extrabold">
      Our Unique Approach
    </h1>
  </span>
  <div class="flex flex-col md:flex-row justify-between">
    <div class="mt-10 md:mt-32">
      <span class="flex flex-col md:flex-row items-center gap-5">
        <img src="/assets/about3.svg" alt="" class="w-[100px] md:w-[200px] h-[100px] md:h-[200px] border p-3 md:p-5 rounded-full bg-hijau">
        <p class="w-full md:w-[339px] font-popins text-[18px] md:text-[21px] font-semibold text-white text-center md:text-left"><span class="text-hijau">Faith-based but not faith-biased</span> commitment to religious and cultural pluralism</p>
      </span>
      <span class="flex flex-col md:flex-row items-center mt-10 md:mt-24 gap-5">
        <img src="/assets/about4.svg" alt="" class="w-[100px] md:w-[200px] h-[100px] md:h-[200px] border p-3 md:p-5 rounded-full bg-hijau">
        <p class="w-full md:w-[339px] font-popins text-[18px] md:text-[21px] font-semibold text-white text-center md:text-left"><span class="text-hijau">Independent local chapters</span> with autonomous volunteer boards but a member of the larger TBN family</p>
      </span>
    </div>
    <div class="mt-10">
      <span class="flex flex-col-reverse md:flex-row items-center gap-5">
        <p class="w-full md:w-[339px] font-popins text-[18px] md:text-[21px] font-semibold text-white text-center md:text-left"><span class="text-hijau">Character-based</span> entrepreneurship training & support</p>
        <img src="/assets/about1.svg" alt="" class="w-[100px] md:w-[200px] h-[100px] md:h-[200px] border p-3 md:p-5 rounded-full bg-hijau">
      </span>
      <span class="flex flex-col-reverse md:flex-row items-center mt-10 md:mt-20 gap-5">
        <p class="w-full md:w-[339px] font-popins text-[18px] md:text-[21px] font-semibold text-white text-center md:text-left"><span class="text-hijau">Sector agnostic</span> with key focus on poverty alleviation</p>
        <img src="/assets/about2.svg" alt="" class="w-[100px] md:w-[200px] h-[100px] md:h-[200px] border p-3 md:p-5 rounded-full bg-hijau">
      </span>
    </div>
  </div>
</section>
<!-- END Our Unique Approach -->


<!-- The Challenge -->
    <!-- <section
    id="home"
    class="bg-[url('/assets/bg-challange.svg')] bg-cover bg-center relative py-36 h-[1200px]"
  >
  <div
        class="max-w-full min-h-[700px] flex flex-col justify-center mx-auto px-4 text-white "
      >
      <div class="flex justify-between items-center mx-20">
        <span>
          <img src="/assets/3 bola.svg" alt="" class="items-center h-[700px]">
        </span>
        <span>
          <h1 class="font-popins text-[50px] font-extrabold">The Challenge We Face</h1>
          <p class="font-popins text-[27px] font-semibold w-[666px] py-4 mt-10 bullet"><span class="text-hijau">700M people</span> live in extreme poverty, subsisting on <span class="text-hijau">less than $2.15 USD a day globally.</span></p>
          <p class="font-popins text-[27px] font-semibold w-[666px]  bullet">COVID-19 pandemic pushed 97 million more people back below the poverty line since 2020 - <span class="text-hijau">humanity has lost three to four years</span> of hard-won progress in the ongoing campaign to end extreme poverty.</p>
          <p class="font-popins text-[27px] font-semibold w-[666px] py-4  bullet">Small and medium enterprises <span class="text-hijau">(SMES)</span> are a key pathway out of poverty, representing <span class="text-hijau">more than 90%</span> of the business population, <span class="text-hijau">50% of employment</span> and <span class="text-hijau">40% of national GDP</span> in emerging economies.</p>
          <p class="font-popins text-[27px] font-semibold w-[666px]  bullet">In lower income countries, SMEs struggle to get the support and investment they need to grow, creating what development economists call <span class="text-hijau">“the missing middle.”</span></p>
          <p class="font-popins text-[27px] font-semibold w-[666px] py-4  bullet">65 million firms, or 40% of formal micro, small and medium enterprises (MSMEs) in developing countries, have an <span class="text-hijau">unmet financing need of $5.2 trillion every year.</span></p>
        </span>
      </div>
    </div> -->
<!-- END The Challenge -->

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



    <script src="../js/humberger.js"></script>
    <script src="../js/scrollnavbar.js"></script>
  </body>
</html>
