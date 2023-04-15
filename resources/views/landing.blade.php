<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Metas -->
      <meta charset="utf-8">
      <title>SEMNASTI 2023 - HM-TI UDINUS</title>
      <meta name="title" content="SEMNASTI 2023 - UDINUS HMTI">
      <meta name="description" content="Semnasti merupakan acara seminar nasional yang diselengarakan oleh Universitas Dian Nuswantoro dan dikelola oleh Hiunan Teknik Informatika">
      <meta name="keywords" content="semnasti,seminar,seminal nasional,hmti,udinus,dian nuswantoro">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="English">
      <meta name="author" content="Ditya">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <!-- Css -->
      <link href="{{ asset('landing/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
      <link href="{{ asset('landing/css/otp.css') }}" rel="stylesheet" type="text/css" media="all"/>
      <link href="{{ asset('landing/css/base.css') }}" rel="stylesheet" type="text/css" media="all"/>
      <link href="{{ asset('landing/css/main.css') }}" rel="stylesheet" type="text/css" media="all"/>
      <link href="{{ asset('landing/css/flexslider.css') }}" rel="stylesheet" type="text/css"  media="all" />
      <link href="{{ asset('landing/css/venobox.css') }}" rel="stylesheet" type="text/css"  media="all" />
      <link href="{{ asset('landing/css/fonts.css') }}" rel="stylesheet" type="text/css"  media="all" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700" rel="stylesheet">
      <style>
         .text-white {
            color: #fff!important;
         }
      </style>
   </head>
   <body>
      <!-- Preloader -->
      <div class="loader">
         <!-- Preloader inner -->
         <div class="loader-inner">
            <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="http://www.w3.org/2000/svg">
               <circle class="spinner" cx="50" cy="50" r="21" fill="#111111" stroke-width="1.5"/>
            </svg>
         </div>
         <!-- End preloader inner -->
      </div>
      <!-- End preloader-->
      <!--Wrapper-->
      <div class="wrapper">
         <!--Hero section-->
         <section class="hero overlay">
            <!--Main slider-->
            <div class="main-slider slider">
               <ul class="slides">
                  <li>
                     <div class="background-img">
                        <img src="{{ asset('landing/img/semnasti/BG-UTAMA POLOS (2).png') }}" alt="">
                     </div>
                  </li>
               </ul>
            </div>
            <!--End main slider-->
            <!--Header-->
            <header class="header">
               <!--Container-->
               <div class="container ">
                  <!--Row-->
                  <div class="row">
                     <div class="col-md-2">
                        <a class="scroll logo" href="#wrapper">
                           {{-- <h2>events</h2> --}}
                           <img src="{{ asset('landing/img/semnasti/logo-h700.png') }}" style="max-height: 40px;" alt="">
                        </a>
                     </div>
                     <div class="col-md-10 text-right">
                        <nav class="main-nav">
                           <div class="toggle-mobile-but">
                              <a href="#" class="mobile-but" >
                                 <div class="lines"></div>
                              </a>
                           </div>
                           <ul>
                              <li><a class="scroll" href="#wrapper">Beranda</a></li>
                              <li><a class="scroll" href="#about">Tentang</a></li>
                              <li><a class="scroll" href="#speakers">Pembicara</a></li>
                              {{-- <li><a class="scroll" href="#topics">Topik</a></li>
                              <li><a class="scroll" href="#schedule">Jadwal</a></li> --}}
                              <li><a class="scroll" href="#tickets">Pendaftaran</a></li>
                              <li><a class="scroll" href="#location">Lokasi</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <!--End row-->
               </div>
               <!--End container-->
            </header>
            <!--End header-->
            <!--Inner hero-->
            <div class="inner-hero fade-out">
               <!--Container-->
               <div class="container hero-content">
                  <!--Row-->
                  <div class="row">
                     <div class="col-sm-12 text-center">
                        <h3 class="mb-10">HM-TI UDINUS</h3>
                        <h1 class="large mb-10">SEMNASTI 2023</h1>
                        <p class="uppercase ">10 Juni 2023 - Auditorium E3 UDINUS</p>
                        <a href="#tickets" class="but scroll "> Daftar Sekarang </a>
                     </div>
                  </div>
                  <!--End row-->
               </div>
               <!--End container-->
            </div>
            <!--End inner hero-->
         </section>
         <!--End hero section-->
         <!--About section-->
         <section id="about" class="about pt-120000 pb-120 brd-bottom">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-12">
                     <div class="block-video">
                        <iframe  src="{{ asset('videos/teaser.mp4') }}"></iframe>
                     </div>
                  </div>
                  <div class="col-sm-8 col-sm-offset-2 mb-100 text-center">
                     <h1 class="title">Pentingnya Cyber Security</h1>
                     <h1 class="">"Cyber Security Awareness For Securing Data"</h1>
                     <p class="title-lead mt-20">
                        Keamanan cyber semakin penting di era digital saat ini. Ancaman siber dapat memengaruhi setiap orang dari berbagai latar belakang, dan oleh karena itu, penting bagi kita semua untuk memahami cara melindungi diri kita sendiri dan lingkungan sekitar kita dari serangan siber.
                     </p>
                     <p class="title-lead mt-20">
                        Ayo ambil tindakan untuk meningkatkan keamanan cyber kita dengan melakukan beberapa hal sederhana seperti memperbarui perangkat elektronik secara teratur, menggunakan kata sandi yang kuat, dan tidak membuka lampiran atau tautan yang mencurigakan. Selain itu, kita juga dapat meningkatkan kesadaran tentang ancaman siber dan cara mengatasinya dengan membaca artikel atau mengikuti pelatihan online.
                     </p>
                     <p class="title-lead mt-20">
                        Mari kita menjadi bagian dari gerakan untuk menjaga keamanan cyber dan melindungi dunia digital kita. Dengan mengambil tindakan yang tepat, kita dapat membantu mencegah serangan siber dan menciptakan lingkungan online yang lebih aman dan terlindungi.
                     </p>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-md-3 col-sm-3">
                     <div class="block-info-1">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="35px" height="25px" viewBox="0 0 42 32" enable-background="new 0 0 42 32" xml:space="preserve">
                           <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="5.1983" y1="28.1187" x2="43.4067" y2="11.702">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#EE71F9"/>
                           </linearGradient>
                           <path fill="url(#SVGID_1_)" d="M38,30.5v-19c0-0.276-0.224-0.5-0.5-0.5S37,11.224,37,11.5v19c0,0.276-0.224,0.5-0.5,0.5h-31
                              C5.224,31,5,30.776,5,30.5v-19C5,11.224,4.776,11,4.5,11S4,11.224,4,11.5v19C4,31.327,4.673,32,5.5,32h31
                              C37.327,32,38,31.327,38,30.5z"/>
                           <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="4.7162" y1="26.9965" x2="42.9245" y2="10.5799">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#EE71F9"/>
                           </linearGradient>
                           <path fill="url(#SVGID_2_)" d="M8.5,23C8.224,23,8,23.224,8,23.5S8.224,24,8.5,24H10v3.5c0,0.276,0.224,0.5,0.5,0.5
                              s0.5-0.224,0.5-0.5V24h6v3.5c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5V24h6v3.5c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5V24
                              h6v3.5c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5V24h1.5c0.276,0,0.5-0.224,0.5-0.5S33.776,23,33.5,23H32v-5h1.5
                              c0.276,0,0.5-0.224,0.5-0.5S33.776,17,33.5,17H32v-4.5c0-0.276-0.224-0.5-0.5-0.5S31,12.224,31,12.5V17h-6v-4.5
                              c0-0.276-0.224-0.5-0.5-0.5S24,12.224,24,12.5V17h-6v-4.5c0-0.276-0.224-0.5-0.5-0.5S17,12.224,17,12.5V17h-6v-4.5
                              c0-0.276-0.224-0.5-0.5-0.5S10,12.224,10,12.5V17H8.5C8.224,17,8,17.224,8,17.5S8.224,18,8.5,18H10v5H8.5z M31,18v5h-6v-5H31z
                              M24,18v5h-6v-5H24z M11,18h6v5h-6V18z"/>
                           <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="-0.4811" y1="14.9003" x2="37.7272" y2="-1.5164">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#EE71F9"/>
                           </linearGradient>
                           <path fill="url(#SVGID_3_)" d="M32.5,3h4.25C36.837,3,37,3,37,3.5V8H5V3.5C5,3.224,5.224,3,5.5,3h4C9.776,3,10,2.776,10,2.5
                              S9.776,2,9.5,2h-4C4.673,2,4,2.673,4,3.5v5C4,8.776,4.224,9,4.5,9h33C37.776,9,38,8.776,38,8.5v-5C38,2.394,37.354,2,36.75,2H32.5
                              C32.224,2,32,2.224,32,2.5S32.224,3,32.5,3z"/>
                           <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="-1.6311" y1="12.2237" x2="36.5772" y2="-4.1929">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#EE71F9"/>
                           </linearGradient>
                           <path fill="url(#SVGID_4_)" d="M26.5,3C26.776,3,27,2.776,27,2.5S26.776,2,26.5,2h-11C15.224,2,15,2.224,15,2.5S15.224,3,15.5,3
                              H26.5z"/>
                           <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="-2.9557" y1="9.1407" x2="35.2526" y2="-7.2759">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#EE71F9"/>
                           </linearGradient>
                           <path fill="url(#SVGID_5_)" d="M13,4.5v-4C13,0.224,12.776,0,12.5,0S12,0.224,12,0.5v4C12,4.776,12.224,5,12.5,5S13,4.776,13,4.5z"
                              />
                           <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="-0.3065" y1="15.3067" x2="37.9019" y2="-1.11">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#EE71F9"/>
                           </linearGradient>
                           <path fill="url(#SVGID_6_)" d="M29.5,5C29.776,5,30,4.776,30,4.5v-4C30,0.224,29.776,0,29.5,0S29,0.224,29,0.5v4
                              C29,4.776,29.224,5,29.5,5z"/>
                        </svg>
                        <p>
                           <strong>Tanggal</strong>
                           <span>10 Juni 2023</span>
                           <span>08.00 WIB - Selesai</span>
                        </p>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-3">
                     <div class="block-info-1">
                        <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="35px" height="25px" viewBox="0 0 42 32" enable-background="new 0 0 42 32" xml:space="preserve">
                           <linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="4.511" y1="11.8158" x2="41.3229" y2="27.6695">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#EE71F9"/>
                           </linearGradient>
                           <path fill="url(#SVGID_7_)" d="M10.239,31.926c0.009,0.006,0.021,0.003,0.03,0.009C10.341,31.973,10.418,32,10.499,32
                              c0.044,0,0.088-0.006,0.132-0.018l10.868-2.966l10.868,2.966C32.411,31.994,32.455,32,32.499,32c0.082,0,0.158-0.027,0.23-0.065
                              c0.01-0.005,0.021-0.003,0.03-0.009l9-5.5c0.191-0.117,0.281-0.348,0.22-0.563l-4.984-17.5c-0.041-0.147-0.148-0.267-0.29-0.326
                              c-0.142-0.057-0.301-0.048-0.436,0.026l-4.962,2.784c-0.24,0.135-0.326,0.44-0.191,0.681c0.135,0.242,0.439,0.327,0.682,0.191
                              l4.409-2.475l4.707,16.526l-8.015,4.898l-1.904-15.231c-0.034-0.275-0.293-0.466-0.559-0.434c-0.273,0.034-0.468,0.284-0.434,0.558
                              l1.907,15.259L22,28.115v-2.73c0-0.276-0.224-0.5-0.5-0.5s-0.5,0.224-0.5,0.5v2.73l-9.911,2.705l1.907-15.259
                              c0.034-0.274-0.16-0.524-0.434-0.558c-0.272-0.032-0.524,0.159-0.559,0.434l-1.904,15.231L2.084,25.77L6.791,9.244l4.409,2.475
                              c0.242,0.134,0.546,0.049,0.682-0.191c0.135-0.241,0.049-0.545-0.191-0.681L6.729,8.063C6.595,7.988,6.436,7.979,6.293,8.037
                              c-0.142,0.059-0.249,0.178-0.29,0.326l-4.984,17.5c-0.062,0.216,0.028,0.446,0.22,0.563L10.239,31.926z"/>
                           <linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="12.6241" y1="7.5582" x2="28.5468" y2="14.4156">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#EE71F9"/>
                           </linearGradient>
                           <path fill="url(#SVGID_8_)" d="M21.161,23.367c0.096,0.088,0.217,0.132,0.339,0.132c0.12,0,0.24-0.043,0.336-0.129
                              C22.169,23.067,30,15.882,30,8.499c0-4.767-3.733-8.5-8.5-8.5S13,3.732,13,8.499C13,15.753,20.828,23.059,21.161,23.367z
                              M21.5,0.999c4.275,0,7.5,3.224,7.5,7.5c0,6.097-5.993,12.337-7.497,13.807C20.002,20.819,14,14.497,14,8.499
                              C14,4.223,17.225,0.999,21.5,0.999z"/>
                           <linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="17.3671" y1="6.7191" x2="25.6329" y2="10.2789">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#EE71F9"/>
                           </linearGradient>
                           <path fill="url(#SVGID_9_)" d="M26,8.499c0-2.481-2.019-4.5-4.5-4.5S17,6.018,17,8.499s2.019,4.5,4.5,4.5S26,10.98,26,8.499z
                              M21.5,11.999c-1.93,0-3.5-1.57-3.5-3.5s1.57-3.5,3.5-3.5s3.5,1.57,3.5,3.5S23.43,11.999,21.5,11.999z"/>
                        </svg>
                        <p>
                           <strong>Lokasi</strong>
                           <span>Gedung E3 </span>
                           <span>Universitas Dian Nuswantoro</span>
                        </p>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-3">
                     <div class="block-info-1">
                        <svg version="1.1" id="Layer_10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="35px" height="25px" viewBox="0 0 42 32" enable-background="new 0 0 42 32" xml:space="preserve">
                           <linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="1.9027" y1="28.6566" x2="55.9027" y2="10.9483">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#EE71F9"/>
                           </linearGradient>
                           <path fill="url(#SVGID_10_)" d="M40.498,0c-0.276,0-0.5,0.224-0.5,0.5v31c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5v-31
                              C40.998,0.224,40.774,0,40.498,0z"/>
                           <linearGradient id="SVGID_14_" gradientUnits="userSpaceOnUse" x1="1.1102" y1="26.2399" x2="55.1102" y2="8.5316">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#EE71F9"/>
                           </linearGradient>
                           <path fill="url(#SVGID_10_)" d="M38.717,1.204c-0.17-0.083-0.376-0.062-0.526,0.055l-0.565,0.445C34.648,4.059,29.667,8,19.5,8H5.631
                              C4.18,8,3,9.2,3,10.674v10.714C3,22.828,4.18,24,5.631,24h3.394c0.088,1.125,0.502,3.794,2.454,5.761
                              C12.953,31.247,14.979,32,17.5,32c0.276,0,0.5-0.224,0.5-0.5S17.776,31,17.5,31c-2.242,0-4.026-0.652-5.306-1.938
                              c-1.668-1.677-2.067-4.025-2.163-5.062h2.995c0.085,0.682,0.36,1.881,1.274,2.802C15.089,27.597,16.166,28,17.5,28
                              c0.276,0,0.5-0.224,0.5-0.5S17.776,27,17.5,27c-1.055,0-1.891-0.302-2.484-0.896c-0.657-0.659-0.894-1.546-0.981-2.104h5.396
                              c10.216,0,15.237,3.963,18.237,6.331l0.522,0.411c0.089,0.07,0.198,0.105,0.307,0.105c0.075,0,0.15-0.017,0.219-0.051
                              c0.172-0.084,0.281-0.258,0.281-0.449V1.653C38.998,1.462,38.889,1.288,38.717,1.204z M4,21.388V10.674C4,9.751,4.731,9,5.631,9H9
                              v14H5.631C4.716,23,4,22.292,4,21.388z M37.998,29.317C34.864,26.851,29.672,23,19.432,23h-5.797
                              c-0.047-0.015-0.095-0.03-0.148-0.031c-0.001,0-0.001,0-0.002,0c-0.054,0-0.105,0.015-0.154,0.031H10V9h9.5
                              c10.237,0,15.392-3.864,18.498-6.316V29.317z"/>
                           <linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="-1.8839" y1="17.1097" x2="52.1161" y2="-0.5987">
                              <stop  offset="0" style="stop-color:#399BFF"/>
                              <stop  offset="1" style="stop-color:#EE71F9"/>
                           </linearGradient>
                           <path fill="url(#SVGID_11_)" d="M1.5,21.857c0.276,0,0.5-0.224,0.5-0.5V10.643c0-0.276-0.224-0.5-0.5-0.5S1,10.367,1,10.643v10.714
                              C1,21.633,1.224,21.857,1.5,21.857z"/>
                        </svg>
                        <p>
                           <strong>Pembicara</strong>
                           <span>3 Pembicara Ahli </span>
                        </p>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-3 text-right">
                     <div class="block-info-1">
                        <a href="#tickets" class="scroll but"> Daftar Sekarang Juga</a>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End about section-->
         <!--Speakers section-->
         <section id="speakers" class="speakers pt-120 brd-bottom pb-120">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 mb-100 text-center">
                     <h1 class="title">Pembicara</h1>
                     <p class="title-lead mt-10">Kami menghadirkan pembicara yang ahli di bidangnya untuk meningkatkan<br>pengetahuan anda terkait Cyber Security.</p>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <div class="block-content" style="padding-left: 2rem; padding-right: 2rem;">
               <div class="col-sm-4 pd-0">
                  <div class="block-speaker">
                     <div class="block-img overlay soft">
                        <div class="background-img">
                           <img src="{{ asset('landing/img/semnasti/speaker-1.jpg') }}" alt="">
                        </div>
                        <div class="block-info-2">
                           <p>
                              <strong>Hansen Gianto</strong>
                              <span>Founder dan CEO Jadi Hacker</span>
                           </p>
                           <ul class="block-social">
                              <li><a href="https://github.com/hansengianto"><i class="icon-github"></i></a></li>
                              <li><a href="https://id.linkedin.com/in/hansengianto"><i class="icon-linkedin"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 pd-0">
                  <div class="block-speaker">
                     <div class="block-img overlay soft">
                        <div class="background-img">
                           <img src="{{ asset('landing/img/semnasti/anonymous.png') }}" alt="">
                        </div>
                        <div class="block-info-2">
                           <p>
                              <strong>Announce Soon</strong>
                              <span>???</span>
                           </p>
                           <ul class="block-social ">
                              <li><a href="#"><i class="icon-twitter"></i></a></li>
                              <li><a href="#"><i class="icon-linkedin"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 pd-0">
                  <div class="block-speaker">
                     <div class="block-img overlay soft">
                        <div class="background-img">
                           <img src="{{ asset('landing/img/semnasti/anonymous.png') }}" alt="">
                        </div>
                        <div class="block-info-2">
                           <p>
                              <strong>Announce Soon</strong>
                              <span>???</span>
                           </p>
                           <ul class="block-social ">
                              <li><a href="#"><i class="icon-twitter"></i></a></li>
                              <li><a href="#"><i class="icon-linkedin"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--End speakers section-->
         <!--Topics section-->
         <section id="topics" class="topics pt-120 pb-120  brd-bottom" hidden>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 mb-100 text-center">
                     <h1 class="title">Topik yang Dibahas</h1>
                     <p class="title-lead mt-10">Kami menyusun dan menyajikan topik yang relevan dan bermanfaat untuk saat ini dengan menhadirkan pembicara yang ahli.</p>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <div class="container">
               <div class="row vertical-align">
                  <div class="col-xl-6 col-md-9 col-sm-12">
                     <div class="col-md-12">
                        <h3 class="sub-title-0  mb-20"><span class="gradient-text">Topik Pembahasan</span></h3>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <ul class="block-topic">
                           <li>1. Testing</li>
                           <li>2. Penetratrion</li>
                           <li>3. Security</li>
                           <li>4. ???</li>
                           <li>5. ???</li>
                        </ul>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <ul class="block-topic">
                           <li>6. ???</li>
                           <li>7. ???</li>
                           <li>8. ???</li>
                           <li>9. ???</li>
                           <li>10. ???</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-6 col-md-9 col-sm-12">
                     <div class="block-video">
                        <iframe src="{{ asset('videos/teaser.mp4') }}"></iframe>
                     </div>
                  </div>
               </div>
               <!--end of row-->
            </div>
         </section>
         <!--End topics section-->
         <!--Schedule section-->
         <section id="schedule" class="schedule pt-120 pb-120" hidden>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 mb-100 text-center">
                     <h1 class="title">Jadwal Kegiatan</h1>
                     <p class="title-lead mt-10">Kami sangat bangga menyelenggarakan acara ini <br> di Universitas Dian Nuswantoro</p>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-12">
                     <h3 class="sub-title-0  mb-25"><span class="gradient-text">Susunan Acara</span></h3>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-4 ">
                     <!--Tabs-->
                     <ul class="block-tabs">
                        <li class="active"><i class="fa fa-calendar"></i><strong>Tanggal</strong>  <span>- 10 Juni 2023</span></li>
                        {{-- <li class=""><i class="fa fa-calendar"></i><strong>Hari ke 2</strong>  <span>- 28 juli 2023</span></li> --}}
                     </ul>
                  </div>
                  <div class="col-sm-8 ">
                     <ul class="block-tab">
                        <!--Tab-->
                        <li class="active ">
                           <div class="block-date"><i class="fa fa-calendar"></i><strong>Tanggal</strong>  <span>- 10 Juni 2023</span></div>
                           <div class="block-detail">
                              <span class="time">08:00 - 09:00</span>
                              <span class="topic">Daftar Ulang</span>
                              <div class="block-text">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Informasi</strong> : <a href="#" class="gradient-text ">To Be Announce</a> </span>
                              </div>
                           </div>
                           <div class="block-detail">
                              <span class="time">09:00 - 12:00</span>
                              <span class="topic">Pemaparan Materi</span>
                              <div class="block-text">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Speaker</strong> : <a href="#" class="gradient-text ">To Be Announce</a> </span>
                              </div>
                           </div>
                           <div class="block-detail">
                              <span class="time">12:00-13:00</span>
                              <span class="topic">Ishoma</span>
                           </div>
                           <div class="block-detail">
                              <span class="time">13:00 - 14:00</span>
                              <span class="topic">Fun Games</span>
                              <div class="block-text">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Speaker</strong> : <a href="#" class="gradient-text ">To Be Announce</a> </span>
                              </div>
                           </div>
                           <div class="block-detail">
                              <span class="time">14:00 - 14:30</span>
                              <span class="topic">Penutupan Acara</span>
                              <div class="block-text">
                                 <p>Nihilne te nocturnum praesidium Palati, nihil urbis vigilae, nihil timor populi, nihil concursus velit omnium, nihil hic muntissimus habendi senatus locus, nihil horum ora vultusque moverunt, patere tua consilia non sentis constrictam nihil hic muntissimus.</p>
                                 <span class="speaker"> <strong >Speaker</strong> : <a href="#" class="gradient-text ">To Be Announce</a> </span>
                              </div>
                           </div>
                        </li>
                        <!--Tab-->
                     </ul>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End schedule section-->
         <!--Counter section-->
         <section class="counter pt-120 pb-120 overlay parallax">
            <div class="background-img" >
               <img src="{{ asset('landing/img/semnasti/BG-COUNTDOWN (1).png') }}" alt="">
            </div>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row" style="padding-left: 10%;padding-right: 10%;">
                  <div class="col-sm-12  text-center  front-p" style="padding-top: 40px;border: 3px solid;padding-bottom: 40px;border-radius: 20px;">
                     <h1 class="title">Sisa waktu SEMNASTI 2023</h1>
                     <p class="title-lead mt-10 mb-20">10 Juni 2023 - Auditorium E3 Universitas Dian Nuswantoro - Jl. Imam Bonjol No.207  </p>
                     <span class="countdown gradient-text"></span>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End counter section-->
         <!--Tickest section-->
         <section id="tickets" class="tickets pt-120 pb-120">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 mb-130 text-center">
                     <h1 class="title">Daftar Tiket</h1>
                     <p class="title-lead mt-10">Daftar segera dan dapatkan ilmu Cyber Security dengan mengikuti seminar ini. </p>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row vertical-align tickets">
                  <div class="col-sm-4 ">
                     <h3 class="sub-title-0  mb-20"><span class="gradient-text">Dapatkan</span><br> 
                        <span class="gradient-text">Harga spesial</span>
                     </h3>
                     <div class="review-slider flexslider">
                        <ul class="slides">
                           <li>
                              <blockquote>“ Jika Kamu tidak sanggup menahan lelahnya belajar maka kamu harus sanggup menahan perihnya kebodohan.“ </blockquote>
                           </li>
                           <li>
                              <blockquote>“ Pendidikan adalah senjata paling ampuh yang dapat Anda gunakan untuk mengubah dunia.“ </blockquote>
                           </li>
                           <li>
                              <blockquote>“ Hiduplah seolah-olah kamu akan mati besok. Belajarlah seolah-olah Anda akan hidup selamanya.“ </blockquote>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-9 ">
                     <div class="col-sm-6">
                        <ul class="block-tickets">
                           <li>
                              <ul class="block-ticket active">
                                 <li>Pre-sale 1 (50 Tiket)</li>
                                 <li class="block-price"><span class="price"><span class="cur">Rp.</span>30k</span><span class="block-type"><sup>*</sup>Untuk mahasiswa UDINUS</span></li>
                                 <li>Untuk 1 tiket</li>
                                 {{-- <li>Berbagai fasilitas menarik</li> --}}
                                 <li>E-Sertifikat</li>
                                 <li>Seminar KIT</li>
                                 <li>Doorprize</li>
                                 <li>Giveaway</li>
                                 <li>Relasi/Network</li>
                                 <li>Snack & Lunch</li>
                                 <li><a href="#register" class="but mt-30">Pesan Tiket Sekarang</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                     <div class="col-sm-6">
                        <ul class="block-tickets">
                           <li>
                              <ul class="block-ticket ">
                                 <li>Pre-sale 1 (50 Tiket)</li>
                                 <li class="block-price"><span class="price"><span class="cur">Rp.</span>40k</span><span class="block-type"><sup>*</sup>Untuk peserta Umum</span></li>
                                 <li>Untuk 1 tiket</li>
                                 {{-- <li>Berbagai fasilitas menarik</li> --}}
                                 <li>E-Sertifikat</li>
                                 <li>Seminar KIT</li>
                                 <li>Doorprize</li>
                                 <li>Giveaway</li>
                                 <li>Relasi/Network</li>
                                 <li>Snack & Lunch</li>
                                 <li><a href="#register" class="but mt-30">Pesan Tiket Sekarang</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End tickets section-->
         <!--Register section-->
         <section id="register" class="register pt-120 pb-120 overlay">
            <div class="background-img " >
               <img src="{{ asset('landing/img/semnasti/BG-PENDAFTARAN.png') }}" alt="">
            </div>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-md-6 front-p">
                     <form class="registry-form form" method="post" action="#" id="registration-form">
                        <h2 class="sub-title-1 mb-30">Daftar segera dalam acara Seminar Nasional Teknik Informatika 2023</h2>
                        <div class="col-md-6 col-sm-12">
                           <input placeholder="Nama Anda" value="" id="name" name="name" type="text" required>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <input placeholder="Nomor WhatsApp" value="" id="phone_number" name="phone_number" type="text" required>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <input placeholder="Email Anda" value="" id="email" name="email" type="text" required>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <input placeholder="Asal Instansi" value="" id="origin" name="origin" type="text" required>
                        </div>
                        <div class="col-sm-12">
                           <div id="messageBox1">
                              <div id="messageBox2">
                                 <ul>
                                    <li></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <button class="but submit" type="submit">Pesan Tiket</button>
                           {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#otpModal">
                              Launch demo modal
                            </button> --}}
                        </div>
                        <div class="col-sm-12">
                           <p>* Kami tidak membagikan informasi anda kepada siapapun.</p>
                        </div>
                     </form>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End register section-->
         <!--Sponsor section-->
         <section class="sponser pt-100 pb-100" hidden>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 mb-50 text-center ">
                     <h1 class="title">Terima Kasih Sponsor</h1>
                     <p class="title-lead mt-10 mb-20">Dengan bantuan sponsor acara ini dapat terlaksana sesuai rencana!</p>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row">
                  <div class="col-sm-12  col-sm-push-2 text-center">
                     <div class="col-md-2 col-sm-2 ">
                        <div class="block-sponsor">
                           <img src="{{ asset('landing/img/logo/3.png') }}" alt="">
                        </div>
                     </div>
                     <div class="col-md-2 col-sm-2">
                        <div class="block-sponsor">
                           <img src="{{ asset('landing/img/logo/1.png') }}" alt="">
                        </div>
                     </div>
                     <div class="col-md-2 col-sm-2">
                        <div class="block-sponsor">
                           <img src="{{ asset('landing/img/logo/4.png') }}" alt="">
                        </div>
                     </div>
                     <div class="col-md-2 col-sm-2">
                        <div class="block-sponsor">
                           <img src="{{ asset('landing/img/logo/2.png') }}" alt="">
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End sponser section-->
         <!--Contact section-->
         <section id="location" class="location pt-200 pb-200 bg-dark">
            <div class="block-map ">
               {{-- <div id="map" class="map"></div> --}}
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.226032552169!2d110.4066258750791!3d-6.982631693018242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ec52229d7%3A0xc791d6abc9236c7!2sUniversitas%20Dian%20Nuswantoro!5e0!3m2!1sid!2sid!4v1681458781488!5m2!1sid!2sid" style="border:0; height: 100%; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!--Container-->
            <div class="container block-contact">
               <!--Row-->
               <div class="row">
                  <div class="col-md-5 col-md-offset-7 col-sm-5 col-sm-offset-7">
                     <h1 class="title">Informasi Kontak </h1>
                     <p class="title-lead mt-10 mb-50">Hubungi kami untuk info lebih lanjut terkait dengan event tahunan kami. </p>
                  </div>
                  <div class="col-md-5 col-md-offset-7 col-sm-5 col-sm-offset-7">
                     <div class="block-info-3">
                        <p>
                           Gedung E3 <br>
                           Universitas Dian Nuswantoro <br>
                           Jl. Imam Bonjol No.207 <br><br>
                           <span class="text-white"><a class="text-white" href="https://wa.me/6281542372528">Admin 1 - Qotrunnada: (62) 815 4237 2528</a></span> 
                           <span class="text-white"><a class="text-white" href="https://wa.me/6289506373551">Admin 2 - Bagas Aditya: (62) 895 0637 3551</a></span> 
                        </p>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End contact section-->
         <footer class="pt-120  bg-dark">
            <div class="bottom-footer bg-black pt-50 pb-50">
               <!--Container-->
               <div class="container ">
                  <div class="row">
                     <div class="col-md-12">
                        &copy; <script>document.write(new Date().getFullYear())</script><a href="http://hmtiudinus.org" target="_blank" style="text-decoration: none; color: #33475B;"> HMTI UDINUS</a> - Hak cipta dilindungi
                     </div>

                  </div>
               </div>
               <!--End container-->		
            </div>
         </footer>
         <!-- OTP Modal -->
         <div class="modal fade" tabindex="-1" id="otpModal" aria-labelledby="otpModalLabel" role="dialog" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <button type="button" class="close otpModalClose" data-dismiss="modal" aria-label="Close" style="padding-top: 10px;padding-right: 10px;">
                     <span aria-hidden="true">&times;</span>
                   </button>
                  <div class="otp-form" name="otp-form">
                     <div class="title">
                        <h3>VERIFIKASI OTP</h3>
                        <p class="info">Kode OTP telah dikirim ke <span id="no_otp_forward">...</span></p>
                        <p class="msg">Masukan kode OTP</p>
                     </div>
                     <div class="otp-input-fields">
                        <input type="number" class="otp__digit otp__field__1">
                        <input type="number" class="otp__digit otp__field__2">
                        <input type="number" class="otp__digit otp__field__3">
                        <input type="number" class="otp__digit otp__field__4">
                        <input type="number" class="otp__digit otp__field__5">
                        <input type="number" class="otp__digit otp__field__6">
                     </div>
                     <div class="result">
                        <div class="loading spinner-border" role="status" hidden>
                           <span class="visually-hidden">Menunggu...</span>
                        </div>
                        <p id="_otp" class="_notok"></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End wrapper-->
   </body>
</html>

<!--Javascript-->	
<script src="{{ asset('landing/js/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
</script>
   
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('landing/js/otp.js') }}" type="text/javascript"></script>
<script src="{{ asset('landing/js/jquery.flexslider-min.js') }}" type="text/javascript"></script>
<script src="{{ asset('landing/js/jquery.countdown.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('landing/js/smooth-scroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('landing/js/jquery.validate.min.js') }}" type="text/javascript"></script>
{{-- <script src="{{ asset('landing/js/placeholders.min.js') }}" type="text/javascript"></script> --}}
<script src="{{ asset('landing/js/venobox.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('landing/js/instafeed.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('landing/js/script.js') }}" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbGQXiGt-6UAmOFFdSzYI-byeE7ewBuVM&callback=initializeMap"></script>
<!-- Google analytics -->
<!-- End google analytics -->
