<!DOCTYPE html>
<html>

<head>
     <base href="<?php echo base_url() ?>">
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet"
          href="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/css/style.css" /> <!-- ... -->
     <link rel="stylesheet" href="front_agen/unpkg.com/swiper%408.1.6/swiper-bundle.css">
     <link rel="stylesheet" href="front_agen/unpkg.com/swiper%408.1.6/swiper-bundle.min.css">
     <title>Glowza Agen</title>
     <script type="text/javascript" src="front_agen/assets/js/jquery.min.js"></script>
</head>

<body>
     <?php 
  $kode_member = $this->uri->segment(3);
  $data = $this->db->get_where('member', ['kode_member' => $kode_member])->row();
  $no_telp = $data->no_telp

   ?>
     <section id="section_1" class="">
          <div class="relative pt-16 pb-32 flex content-center items-center justify-center md:min-h-max"
               style="min-height: 75vh">
               <div class="absolute top-0 w-full h-full bg-center bg-cover bg-hero"></div>

               <div class="container relative ml-5">
                    <div class="flex flex-wrap justify-start">
                         <div class="">
                              <div class="brand w-40 py-10">
                                   <img src="front_agen/logo.png" style="width: 100px;" alt="">
                              </div>
                              <div class="w-8/12 lg:w-7/12 px-2 text-left">
                                   <h1 class="text-red-300  text-3xl md:text-5xl font-ramaraja">
                                        2 Minggu Atasi Flek Menahun Jadikan Wajah Cerah Glowing Merona
                                   </h1>
                                   <p class="mt-4 text-base md:text-lg text-gray-800 font-roboto font-semibold">
                                        Skincare berkualitas terbaik di dunia dan ribuan wanita telah
                                        membuktikan!
                                   </p>
                              </div>
                              <div id="button" class="mt-10 my-2  flex flex-wrap gap-2">
                                   <a target="_blank"
                                        href="https://api.whatsapp.com/send?phone=+62<?php echo $no_telp ?>&amp;text="
                                        data-message="Saya ada tertarik dengan produk glowza. Apakah bisa dibantu?"
                                        class="member_mobilephone_themes_agen bg-blue-400 text-white active:bg-pink-600 font-bold uppercase text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        id="wa-buy"><span class="text-xs" id="wa-buy">Beli Sekarang</span></a>
                                   <a target="_blank"
                                        href="https://api.whatsapp.com/send?phone=+62<?php echo $no_telp ?>&amp;text="
                                        data-message="Saya tertarik bergabung dengan glowza. Apakah bisa dibantu?"
                                        class="member_mobilephone_themes_agen bg-green-400 text-white active:bg-pink-600 font-bold uppercase text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        id="wa-join"><span class="text-xs">Gabung Menjadi Mitra</span></a>
                              </div>
                         </div>

                    </div>
               </div>
               <div class="
            top-auto
            bottom-0
            left-0
            right-0
            w-full
            absolute
            pointer-events-none
            overflow-hidden
          " style="height: 70px">
                    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                         preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                         <polygon class="text-red-100 opacity-60 fill-current" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
               </div>
          </div>
     </section>


     <section id="section_2" class=" mx-auto px-5 w-full sm:w-11/12 my-10">
          <div class=" grid grid-cols-2 grid-rows-2 mx-auto">

               <div class="my-auto sm:mx-auto w-44 md:w-10/12  px-4 lg:row-span-2 row-span-1 ">
                    <img alt="..." class="max-w-full mx-auto rounded-lg shadow-lg"
                         src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/foto-1-fix-1982x2048.jpg" />
               </div>
               <div class=" pt-4 sm:pl-0 lg:my-auto">
                    <h3 class="text-xl sm:text-3xl  md:text-4xl text-left text-red-300 font-ramaraja">
                         Sudah kehilangan banyak uang dan waktu untuk mengilangkan
                         masalah ini?
                    </h3>
               </div>
               <div class="col-span-2 lg:col-span-1 w-full lg:w-full mx-auto">
                    <ul class="list-none mt-6 space-y-5">
                         <li class="py-2 rounded-xl border-2 "
                              style="background-color: #fcf7f8; border-color: #CC9C27;">
                              <div class="flex items-center gap-5 ml-5">
                                   <div>
                                        <svg class="w-6 h-6 text-red-300" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                   </div>
                                   <div>
                                        <h4 class="font-roboto lg:text-xl md:text-base text-xs">
                                             Flek hitam yang tak hilang-hilang
                                        </h4>
                                   </div>
                              </div>
                         </li>
                         <li class="py-2  rounded-xl border-2 "
                              style="background-color: #fcf7f8; border-color: #CC9C27;">
                              <div class="flex items-center gap-5 ml-5">
                                   <div>
                                        <svg class="w-6 h-6 text-red-300" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                   </div>
                                   <div>
                                        <h4 class="font-roboto lg:text-xl md:text-base text-xs">
                                             Flek Hitam malah semakin tebal
                                        </h4>
                                   </div>
                              </div>
                         </li>
                         <li class="py-2  rounded-xl border-2 "
                              style="background-color: #fcf7f8; border-color: #CC9C27;">
                              <div class="flex items-center gap-5 ml-5">
                                   <div>
                                        <svg class="w-6 h-6 text-red-300" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                   </div>
                                   <div>
                                        <h4 class="font-roboto lg:text-xl md:text-base text-xs">
                                             Selalu tumbuh jerawat di wajah
                                        </h4>
                                   </div>
                              </div>
                         </li>
                    </ul>
               </div>
          </div>
     </section>


     <div class="bg-proof bg-cover bg-no-repeat w-9/12 rounded-3xl mx-auto box-content p-5 bg-center ">
          <div class="flex flex-col items-center ">
               <h1 class="md:text-4xl text-3xl   py-2 font-ramaraja text-center" style="color: #8c4646;">
                    Glowza Skincare
               </h1>
               <h3 class="lg:text-xl text-sm  pb-2 font-semibold text-center" style="color: #8c4646;">
                    Solusi Terbaik Untuk Kulit Cantik Mu
               </h3>
               <div class="px-5">
                    <p
                         class="
              text-white font-roboto md:text-xl sm:text-lg text-xs leading-normal overflow-x-hidden md:text-center text-justify">
                         Glowza Skincare adalah serangkaian perawatan kulit harian (Daily
                         Skin care) mengambil manfaat terbaik dari alam kemudian
                         diformulasikan secara khusus dan teruji secara dermatologist yang
                         telah memiliki sertifikasi halal dan BPOM sehingga cocok untuk
                         kulit daerah tropis, menjadi kunci penting dalam menjaga kesehatan
                         kulit.
                    </p>
               </div>
               <img src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Asset-39.png"
                    class="w-6/12 mt-5" />
          </div>
     </div>


     <section id="section_4" class="my-20 w-full bg-cover ">
          <div class="text-center my-8 mx-auto container ">

               <p style="color: #CC9C27;" class="font-ramaraja text-center text-lg  md:text-3xl ">Mereka menyebut kami
               </p>
               <p style="color: #8c4646;" class="font-ramaraja ext-center text-2xl md:text-2xl my-1 uppercase">
                    "Spesialist Flek Menahun" </p>
               <p style="color: #CC9C27;" class="font-ramaraja text-center text-lg  md:text-3xl">Bukan tanpa alasan
                    tetapi suda ribuan orang </p>
               <p style="color: #CC9C27;" class="font-ramaraja text-center text-lg  md:text-3xl"> membuktikan kehebatan
                    produk Glowza Skincare</p>
          </div>
          <div style="width: 90vw;" class=" displayCard  gap-5 grid lg:mx-auto">
               <!-- 1  Day Cream-->
               <div class="card bg-card-light bg-cover bg-no-repeat flex  py-5   rounded-xl   mx-auto lg:mx-0  justify-between  gap-1 px-3 ">
                    <div id="imageDisplay" class=" my-auto mx-auto">
                         <img src="front_agen/img/DAY_CREAM.png" class="mx-auto w-1/3 lg:w-2/4">
                         <div class="text-center"><span
                                   class="price-right  border-2 text-white rounded-full px-2 py-2">Rp.120.000</span>
                         </div>
                    </div>
                    <div id="desc-wrapper mx-5">
                         <div class="border-b-2 border-text-spot" style=" border-color: #8c4646;">
                              <h1 class="font-ramaraja bold text-2xl font-roboto " style="color: white">GLOWZA DAY CREAM</h1>
                         </div>
                         <h3 class="text-sm font-roboto py-1 text-white  font-semibold" style=" color: white">Manfaat
                              produk:</h3>
                         <div class="mb-3">
                              <ul class=" text-left">
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">Melindungi kulit wajah dari sinar UV.</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">memperbaiki warna kulit agar tetap cerah.</span></li>

                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">segar (digunakan pada pagi dan siang hari).</span></li>
                                   
                              </ul>
                         </div>
                         <div class="block"><a href="https://api.whatsapp.com/send?phone=xxxx&amp;text="
                                   data-message="Saya ada tertarik dengan produk Body Spray Lotion. Apakah bisa dibantu?"
                                   id="wa-buy"
                                   class="member_mobilephone_themes_agen bg-blue-400 text-white active:bg-pink-600 font-bold  text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                   target="_blank">Beli Sekarang</a></div>
                    </div>
               </div>

               <!-- 2  Facial Wash-->
               <div class="card bg-card-light bg-cover bg-no-repeat flex  py-5   rounded-xl   mx-auto lg:mx-0  justify-between  gap-1 px-3 ">
                    <div id="imageDisplay" class=" my-auto mx-auto">
                         <img src="front_agen/img/FACIAL_WASH.png" class="mx-auto w-1/3 lg:w-2/4">
                         <div class="text-center"><span
                                   class="price-right  border-2 text-white rounded-full px-2 py-2">Rp.100.000</span>
                         </div>
                    </div>
                    <div id="desc-wrapper mx-5">
                         <div class="border-b-2 border-text-spot" style=" border-color: #8c4646;">
                              <h1 class="font-ramaraja bold text-2xl font-roboto " style="color: white">GLOWZA BRIGHTENING FACIAL WASH</h1>
                         </div>
                         <h3 class="text-sm font-roboto py-1 text-white  font-semibold" style=" color: white">Manfaat
                              produk:</h3>
                         <div class="mb-3">
                              <ul class=" text-left">
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">Membersihkan.</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">menghilangkan minyak berlebih.</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">melembutkn dan mencerahkan kulit wajah.</span></li>
                                   
                              </ul>
                         </div>
                         <div class="block"><a href="https://api.whatsapp.com/send?phone=xxxx&amp;text="
                                   data-message="Saya ada tertarik dengan produk Body Spray Lotion. Apakah bisa dibantu?"
                                   id="wa-buy"
                                   class="member_mobilephone_themes_agen bg-blue-400 text-white active:bg-pink-600 font-bold  text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                   target="_blank">Beli Sekarang</a></div>
                    </div>
               </div>

               <!-- 3  NIGHT CREAM-->
               <div class="card bg-card-light bg-cover bg-no-repeat flex  py-5   rounded-xl   mx-auto lg:mx-0  justify-between  gap-1 px-3 ">
                    <div id="imageDisplay" class=" my-auto mx-auto">
                         <img src="front_agen/img/NIGHT_CREAM.png" class="mx-auto w-1/3 lg:w-2/4">
                         <div class="text-center"><span
                                   class="price-right  border-2 text-white rounded-full px-2 py-2">Rp.125.000</span>
                         </div>
                    </div>
                    <div id="desc-wrapper mx-5">
                         <div class="border-b-2 border-text-spot" style=" border-color: #8c4646;">
                              <h1 class="font-ramaraja bold text-2xl font-roboto " style="color: white">GLOWZA NIGHT CREAM</h1>
                         </div>
                         <h3 class="text-sm font-roboto py-1 text-white  font-semibold" style=" color: white">Manfaat
                              produk:</h3>
                         <div class="mb-3">
                              <ul class=" text-left">
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">Mencerahkan sekaligus memutihkan kulit wajah</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">mengurangi kerutan.</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">membantu mengatasu jerawat radang/ringan
                                             pori</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">menyamarkan flek hitam.</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">memperbaiki warna kulit yang kurang merata ( digunakan pada malam hari ).</span></li>
                                   
                              </ul>
                         </div>
                         <div class="block"><a href="https://api.whatsapp.com/send?phone=xxxx&amp;text="
                                   data-message="Saya ada tertarik dengan produk Body Spray Lotion. Apakah bisa dibantu?"
                                   id="wa-buy"
                                   class="member_mobilephone_themes_agen bg-blue-400 text-white active:bg-pink-600 font-bold  text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                   target="_blank">Beli Sekarang</a></div>
                    </div>
               </div>

               <!-- 4  PAKET-->
               <div class="card bg-card-light bg-cover bg-no-repeat flex  py-5   rounded-xl   mx-auto lg:mx-0  justify-between  gap-1 px-3 ">
                    <div id="imageDisplay" class=" my-auto mx-auto">
                         <img src="front_agen/img/PAKET.png" class="mx-auto w-1/3 lg:w-2/4">
                         <div class="text-center"><span
                                   class="price-right  border-2 text-white rounded-full px-2 py-2">Rp.325.000</span>
                         </div>
                    </div>
                    <div id="desc-wrapper mx-5">
                         <div class="border-b-2 border-text-spot" style=" border-color: #8c4646;">
                              <h1 class="font-ramaraja bold text-2xl font-roboto " style="color: white">GLOWZA SKINCARE</h1>
                         </div>
                         <h3 class="text-sm font-roboto py-1 text-white  font-semibold" style=" color: white">Manfaat
                              produk:</h3>
                         <div class="mb-3">
                              <ul class=" text-left">
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">Memutihkan / mencerahkan wajah.</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">Menghilangkan flek hitam.</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">Memberi kesan glowing
                                             pori</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">Mengencangkan kulit.</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">Melembabkan kulit kering.</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">Mengecilkan pori pori.</span>
                                   </li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">Membuat wajah kenyal dan awet muda.</span>
                                   </li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">Menyamarkan kerutan di wajah.</span>
                                   </li>
                              </ul>
                         </div>
                         <div class="block"><a href="https://api.whatsapp.com/send?phone=xxxx&amp;text="
                                   data-message="Saya ada tertarik dengan produk Body Spray Lotion. Apakah bisa dibantu?"
                                   id="wa-buy"
                                   class="member_mobilephone_themes_agen bg-blue-400 text-white active:bg-pink-600 font-bold  text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                   target="_blank">Beli Sekarang</a></div>
                    </div>
               </div>


               <!-- 5  TONER-->
               <div class="card bg-card-light bg-cover bg-no-repeat flex  py-5   rounded-xl   mx-auto lg:mx-0  justify-between  gap-1 px-3 ">
                    <div id="imageDisplay" class=" my-auto mx-auto">
                         <img src="front_agen/img/TONER.png" class="mx-auto w-1/3 lg:w-2/4">
                         <div class="text-center"><span
                                   class="price-right  border-2 text-white rounded-full px-2 py-2">Rp.100.000</span>
                         </div>
                    </div>
                    <div id="desc-wrapper mx-5">
                         <div class="border-b-2 border-text-spot" style=" border-color: #8c4646;">
                              <h1 class="font-ramaraja bold text-2xl font-roboto " style="color: white">GLOWZA BRIGHTENING TONER</h1>
                         </div>
                         <h3 class="text-sm font-roboto py-1 text-white  font-semibold" style=" color: white">Manfaat
                              produk:</h3>
                         <div class="mb-3">
                              <ul class=" text-left">
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">Menyegarkan mencerahkan.</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">mengangkat sel kulit mati.</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">mengecilkan pori-pori</span></li>
                                   <li class="flex space-x-2 text-lg font-roboto"><svg class="w-6 h-6 "
                                             style="color: #8c4646;" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"></path>
                                        </svg> <span class="text-xs text-white ">menjaga kelembaban pada kulit wajah.</span></li>
                                   
                              </ul>
                         </div>
                         <div class="block"><a href="https://api.whatsapp.com/send?phone=xxxx&amp;text="
                                   data-message="Saya ada tertarik dengan produk Body Spray Lotion. Apakah bisa dibantu?"
                                   id="wa-buy"
                                   class="member_mobilephone_themes_agen bg-blue-400 text-white active:bg-pink-600 font-bold  text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                   target="_blank">Beli Sekarang</a></div>
                    </div>
               </div>


          </div>
     </section>



     <section id="section_6" class="w-full">
          <div class="my-20 mx-auto container flex flex-col items-center align-middle">
               <h1
                    class="text-center lg:leading-10 heading text-2xl md:text-3xl leading-normal lg:text-5xl w-3/4 font-ramaraja text-red-300">
                    Mengapa Glowza Skincare tepat untuk
                    kulit indahmu saat ini?</h1>
               <div class="lg:inline-flex inline-block my-5 justify-center" id="proof">
                    <div class="flex gap-2 flex-col items-center w-3/4 px-5 mx-auto py-4"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Alami.png"
                              class="w-16">
                         <h1 class="text-xl md:text-2xl text-red-300 font-roboto font-semibold text-center">Terbuat Dari
                              Bahan Alami</h1>
                         <p class="text-center text-base">Setiap produk justmint beauty terbuat dari bahan-bahan alami
                              yang sudah <br>
                              teruji baik untuk kulit</p>
                    </div>
                    <div class="flex gap-2 flex-col items-center w-3/4 px-5 mx-auto py-4"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Person.png"
                              class="w-16">
                         <h1 class="text-xl md:text-2xl text-red-300 font-roboto font-semibold text-center">Tidak Ada
                              Efek Samping</h1>
                         <p class="text-center text-base">Semua produk Glowza Skincare Tidak menyebabkan efek samping
                              seperti
                              merah-merah/ iritasi kulit & pengelupasan</p>
                    </div>
                    <div class="flex gap-2 flex-col items-center w-3/4 px-5 mx-auto py-4"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Checked.png"
                              class="w-16">
                         <h1 class="text-xl md:text-2xl text-red-300 font-roboto font-semibold text-center">Mendapatkan
                              Izin BPOM</h1>
                         <p class="text-center text-base">Semua produk Glowza Skincare sudah mendapatkan Ijin BPOM dan <br>
                              memiliki ijin
                              edar</p>
                    </div>
               </div>
          </div>
     </section>

     <section id="section_7" class="bg-red-200">
          <div class="container mx-auto  py-20 px-10">
               <div class="container mx-auto">
                    <h1 class="text-white font-ramaraja text-3xl md:text-4xl text-center py-3">Testimonial Produk</h1>
                    <div class="swiper mySwiper container mx-auto">
                         <!-- Additional required wrapper -->
                         <div class="swiper-wrapper ">
                              <?php foreach ($this->db->get('testimoni')->result() as $moni): ?>

                              <!-- Slides -->
                              <div class="swiper-slide"><img src="image/testimoni/<?php echo $moni->foto ?>" alt=""
                                        class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                              <?php endforeach ?>
                         </div>
                         <!-- If we need pagination -->
                         <div class="swiper-pagination"></div>

                         <!-- If we need navigation buttons -->
                         <div class="swiper-button-prev  "></div>
                         <div class="swiper-button-next "></div>
                    </div>
               </div>
          </div>
     </section>

     <section>
          <div class="bg-clear bg-cover bg-no-repeat pb-20">
               <div class="flex flex-wrap items-center mt-32 gap-5">
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto text-center">

                         <h3 class="md:text-4xl text-2xl mb-2  font-ramaraja text-red-300  md:text-left">
                              Ingin menjadi bagian dari kami atau menjadi mitra Glowza Skincare?
                         </h3>
                         <p class="text-lg font-roboto leading-relaxed mt-4 mb-4 text-gray-700 text-left mb-7">
                              Mudah banget loh, kamu hanya dengan order 3 paket Reseller, otomatis
                              kamu menjadi bagian dari Glowza Skincare
                         </p>
                         <a target="_blank"
                              href="https://api.whatsapp.com/send?phone=+62<?php echo $no_telp ?>&amp;text="
                              data-message="Saya ada tertarik dengan produk glowza. Apakah bisa dibantu?" id="wa-buy"
                              class="member_mobilephone_themes_agen bg-blue-400 text-white active:bg-pink-600 font-bold uppercase text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                              Beli Sekarang
                         </a>
                    </div>
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                         <div
                              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg ">
                              <img alt="..."
                                   src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/women.jpg"
                                   class="w-full align-middle rounded-t-lg" />

                         </div>
                    </div>
               </div>
          </div>
     </section>

     <section id="section_9" class="w-full">
          <div class="container mx-auto my-20 flex flex-col flex-wrap items-center justify-center ml-auto ">
               <h3 class="text-2xl md:text-4xl mb-2  text-center font-ramaraja text-red-300">
                    Bergabung menjadi mitra Glowza Skincare
                    anda akan berkesempatan mendapatkan reward menarik
               </h3>
               <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-rows-3 gap-2 py-10">
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Emas 1 Gram
                    </li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Emas 2 Gram
                    </li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Emas 3 Gram</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Tv 42 inch</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Hp Samsung Type A </li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Laptop</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Ipad Pro</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Iphone 12</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Camera Canon EOS</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Mobil Senilai
                         120 Juta</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Motor Honda Beat</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Motor Yamaha Lexy</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Motor Honda PCX</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Mobil Daihatsu Alya</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Mobil Honda Brio</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Ibadah Umroh</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Tour Turkey atau Dubai</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Tour Malaysia atau Singapore</li>

               </ul>
          </div>
     </section>







     <!-- ... -->
     <section id="section_11" class="w-full py-10 mt-10">
          <h3 class="md:text-4xl text-3xl mb-2 text-center font-ramaraja text-red-300">
               Pertanyaan Yang Sering Diajukan (FAQ)
          </h3>
          <div class="my-accordion container mx-auto px-5 ">
               <button class='menu'><span>Apakah Glowza sudah ada ijin BPOM?</span><span
                         class='arrow rarrow'>+</span><span class='arrow darrow'>-</span></button>
               <div class='panel close'>
                    <div style="padding:10px">
                         <p>Ya Produk GLOWZA SUDAH TEREGISTRASI BPOM dan GARANSI 100% BEBAS MERKURI, DIJAMIN BEB!!</p>
                    </div>
               </div>
               <button class='menu'><span>Beb, Usiaku sudah 50 Tahun keatas, apakah aku masih bisa pakai Produk dari
                         Glowza?</span><span class='arrow rarrow'>+</span><span class='arrow darrow'>-</span></button>
               <div class='panel close'>
                    <div style="padding:10px">
                         <p>BISA Beb, produk kita bisa digunakan sampai usia 50th keatas dan aman digunakan untuk jangka
                              panjang, banyak customer kita diatas usia 50th dan masih bisa GLOWING & KENCANG wajahnya.
                         </p>
                    </div>
               </div>
               <button class='menu'><span>Apakah krim dari Glowza bikin kulit merah dan mengelupas?</span><span
                         class='arrow rarrow'>+</span><span class='arrow darrow'>-</span></button>
               <div class='panel close'>
                    <div style="padding:10px">
                         <p>PRODUK KITA TIDAK MEMBUAT MENGELUPAS & MERAH, proses regenerasi kulit wajah berjalan normal
                              TIDAK DIPAKSAKAN sampai mengelupas seperti produk bermerkuri.</p>
                    </div>
               </div>
               <button class='menu'><span>Apakah bisa di pakai Busui, Bumil & kulit Sensitif?</span><span
                         class='arrow rarrow'>+</span><span class='arrow darrow'>-</span></button>
               <div class='panel close'>
                    <div style="padding:10px">
                         <p>YA BISA dong Bebeb, karna produk kita BEBAS KANDUNGAN LOGAM BERBAHAYA yang dapat
                              membahayakan janin, dan tidak menyerap sampai ke pembuluh darah seperti krim BERMERKURI
                              yang bisa menembus pembuluh darah dan AMAN UNTUK KULIT SENSITIF tidak membuat iritasi ya
                              Beb.</p>
                    </div>
               </div>
               <button class='menu'><span>Ada Pertanyaan Lainnya?</span><span class='arrow rarrow'>+</span><span
                         class='arrow darrow'>-</span></button>
               <div class='panel close'>
                    <div style="padding:10px">
                         <p>Jangan ragu untuk konsultasi bersama tim kecantikan dan support dari Glowza Official kami,
                              klik tombol chat untuk terhubung dengan kami segera.</p>
                    </div>
               </div>

          </div>



     </section>

     <div class="whatsapp fixed bottom-5 right-5 z-50">
          <a target="_blank" href="https://api.whatsapp.com/send?phone=+62<?php echo $no_telp ?>&amp;text="
               data-message="Saya ada tertarik dengan glowza. Apakah bisa dibantu?" id="wa-contact" target="_blank"
               class="wa-ask member_mobilephone_themes_agen" data-tip data-for="whatsapp">
               <svg viewBox="0 0 32 32" class="whatsapp-icon rounded-full ">
                    <path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"
                         fill-rule="evenodd"></path>
               </svg>
          </a>

     </div>

     <div style="min-height: 25vh;" class="bottom-0 bg-bg-footer bg-cover  bg-no-repeat w-full md:py-20 py-0">
          <div class=" mx-auto container text-center  ">
               <h1 class="font-ramaraja text-2xl lg:text-3xl text-red-300">
                    Ayo mulailah memakai Glowza Skincare & Bergabung menjadi mitra bersama
                    kami untuk mendapatkan berbagai keuntungannyaa!
               </h1>
               <div class="my-5">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=+62<?php echo $no_telp ?>&amp;text="
                         data-message="Saya ada ada pertanyaan mengenai glowza. Apakah bisa dibantu?" id="wa-buy"
                         class="member_mobilephone_themes_agen  bg-blue-400 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                         id="wa-contact">
                         Hubungi Kami
                    </a>
               </div>
          </div>
     </div>

     <script src="front_agen/unpkg.com/swiper%408.1.6/swiper-bundle.min.js"></script>
     <script type="text/javascript" src="front_agen/cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
     <script src="front_agen/ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script type="text/javascript"
          src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/js/script.js"></script>

</body>

</html>