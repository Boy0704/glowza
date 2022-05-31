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
                                   <a href="https://api.whatsapp.com/send?phone=<?php echo $no_telp ?>&amp;text="
                                        data-message="Saya ada tertarik dengan produk glowza. Apakah bisa dibantu?"
                                        class="member_mobilephone_themes_agen bg-blue-400 text-white active:bg-pink-600 font-bold uppercase text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        id="wa-buy"><span class="text-xs" id="wa-buy">Beli Sekarang</span></a>
                                   <a href="https://api.whatsapp.com/send?phone=<?php echo $no_telp ?>&amp;text="
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
                              style="background-color: #fcf7f8; border-color: #e9c6cf;">
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
                              style="background-color: #fcf7f8; border-color: #e9c6cf;">
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
                              style="background-color: #fcf7f8; border-color: #e9c6cf;">
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

               <p style="color: #f29b96;" class="font-ramaraja text-center text-lg  md:text-3xl ">Mereka menyebut kami
               </p>
               <p style="color: #8c4646;" class="font-ramaraja ext-center text-2xl md:text-2xl my-1 uppercase">
                    "Spesialist Flek Menahun" </p>
               <p style="color: #f29b96;" class="font-ramaraja text-center text-lg  md:text-3xl">Bukan tanpa alasan
                    tetapi suda ribuan orang </p>
               <p style="color: #f29b96;" class="font-ramaraja text-center text-lg  md:text-3xl"> membuktikan kehebatan
                    produk Glowza Skincare</p>
          </div>
          <div style="width: 90vw;" class=" displayCard  gap-5 grid lg:mx-auto">
               <!-- 1  body lotion-->

               <?php 
                $this->db->where('id_paket', 1);
                $skincare = $this->db->get('produk');
                foreach ($skincare->result() as $skin): ?>
               <div
                    class="card bg-card-light bg-cover bg-no-repeat flex  py-5   rounded-xl   mx-auto lg:mx-0  justify-between  gap-1 px-3 ">
                    <div id="imageDisplay" class=" my-auto mx-auto">
                         <img src="image/produk/<?php echo $skin->foto ?>"
                              class="mx-auto w-1/3 lg:w-2/4">
                         <div class="text-center"><span
                                   class="price-right  border-2 text-white rounded-full px-2 py-2">Rp. <?php echo number_format($skin->harga_jual) ?></span>
                         </div>
                    </div>
                    <div id="desc-wrapper mx-5">
                         <div class="border-b-2 border-text-spot" style=" border-color: #8c4646;">
                              <h1 class="font-ramaraja bold text-2xl font-roboto " style="color: white"><?php echo $skin->nama_produk ?></h1>
                         </div>
                         <h3 class="text-sm font-roboto py-1 text-white  font-semibold" style=" color: white">Deskripsi
                              produk:</h3>
                         <div class="mb-3" style="font-size: 10px;">
                              <?php echo $skin->deskripsi ?>
                         </div>
                         <div class="block"><a
                                   href="https://api.whatsapp.com/send?phone=<?php echo $no_telp ?>&amp;text="
                                   data-message="Saya ada tertarik dengan produk Body Spray Lotion. Apakah bisa dibantu?"
                                   id="wa-buy"
                                   class="member_mobilephone_themes_agen bg-blue-400 text-white active:bg-pink-600 font-bold  text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                   target="_blank">Beli Sekarang</a></div>
                    </div>
               </div>
               <?php endforeach ?>
               


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
                              yang sudah
                              teruji baik untuk kulit</p>
                    </div>
                    <div class="flex gap-2 flex-col items-center w-3/4 px-5 mx-auto py-4"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Person.png"
                              class="w-16">
                         <h1 class="text-xl md:text-2xl text-red-300 font-roboto font-semibold text-center">Tidak Ada
                              Efek Samping</h1>
                         <p class="text-center text-base">Semua produk Glowza Skincare Tidak menyebabkan efek samping
                              seperti
                              merah-merah/iritasi kulit & pengelupasan</p>
                    </div>
                    <div class="flex gap-2 flex-col items-center w-3/4 px-5 mx-auto py-4"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Checked.png"
                              class="w-16">
                         <h1 class="text-xl md:text-2xl text-red-300 font-roboto font-semibold text-center">Mendapatkan
                              Izin BPOM</h1>
                         <p class="text-center text-base">Semua produk Glowza Skincare sudah mendapatkan Ijin BPOM dan
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
                              <!-- Slides -->
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Testimoni/testi-1.jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Testimoni/testi-2.jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Testimoni/testi-3.jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Testimoni/testi-4.jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Testimoni/testi-5.jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Testimoni/testi-6.jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Testimoni/testi-7.jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
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
                         <a href="https://api.whatsapp.com/send?phone=<?php echo $no_telp ?>&amp;text="
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
                              class="w-10 h-6 pr-5">Uang Tunai 300k
                    </li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Uang Tunai 600k
                    </li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Uang Tunai
                         3000k</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Smartphone/Uang
                         Tunai 4500k</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Uang Tunai
                         5994k</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Tour Turkey
                         atau Dubai</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Tour Malaysia
                         atau Singapura</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">1 Unit Motor
                         Honda Beat</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Ibadah Umrah
                    </li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Mobil Senilai
                         120 Juta</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">1 Unit Mobil
                         Xpander</li>
                    <li class="flex text-lg font-roboto"><img
                              src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/logo-archive.png"
                              class="w-10 h-6 pr-5">Rumah Idaman
                         Senilai 600 Juta</li>
               </ul>
          </div>
     </section>



     <section id="section_10" class="w-full bg-red-200">
          <div class="w-full py-20 container mx-auto px-10">
               <div class="container mx-auto">
                    <h1 class="text-white text-3xl text-center font-ramaraja  ">Mereka Yang Sudah Dapat</h1>
                    <div class="swiper mySwiper container mx-auto my-5">
                         <div class="swiper-wrapper">
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Mobil/(1).jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(1).jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(3).jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(2).jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(1).jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(1).jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(2).jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                              <div class="swiper-slide"><img
                                        src="front_agen/themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(4).jpg"
                                        alt="" class="rounded-xl border-2 border-red-300 overflow-hidden"></div>
                         </div>
                         <div class="swiper-pagination"></div>
                         <div class="swiper-button-prev"></div>
                         <div class="swiper-button-next"></div>
                    </div>
               </div>
               <div class="text-center">

                    <!-- <button
                         class="bg-blue-400 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                         type="button" onclick="toggleModal('modal-id')">
                         Hadiah Lainnya
                    </button> -->
               </div>
               <section id="modalHadiah">

                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                         id="modal-id">
                         <div class="relative w-screen h-screen my-6 mx-auto max-w-5xl">

                              <!--content-->
                              <div
                                   class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                   <!--header-->
                                   <div
                                        class="flex items-center justify-between p-5 border-b border-solid border-blueGray-200 rounded-t px-auto">
                                        <div class="flex gap-10 overflow-scroll item-center mx-auto ">
                                             <button onclick="showMobil()">
                                                  <img class="w-20"
                                                       src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Thumbnail/mobil.png" />
                                                  <p class="text-center text-2xl font-roboto">Mobil</p>
                                             </button>
                                             <button onclick="showMotor()">
                                                  <img class="w-20"
                                                       src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Thumbnail/motor.png" />
                                                  <p class="text-center text-2xl font-roboto">Motor</p>
                                             </button>
                                             <button onclick="showUmroh()">
                                                  <img class="w-20"
                                                       src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Thumbnail/umroh.png" />
                                                  <p class="text-center text-2xl font-roboto">Umroh</p>
                                             </button>
                                             <button onclick="showTour()">
                                                  <img class="w-20"
                                                       src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Thumbnail/tour.png" />
                                                  <p class="text-center text-2xl font-roboto">Tour</p>
                                             </button>
                                             <button onclick="showRumah()">
                                                  <img class="w-20"
                                                       src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Thumbnail/rumah.png" />
                                                  <p class="text-center text-2xl font-roboto">Rumah</p>
                                             </button>
                                             <button onclick="showCashback()">
                                                  <img class="w-20"
                                                       src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Thumbnail/cashback.png" />
                                                  <p class="text-center text-2xl font-roboto">Cashback</p>
                                             </button>
                                        </div>


                                   </div>
                                   <!--body-->
                                   <div class="relative p-6 flex-auto">

                                        <div id="formMobil" class="hidden">
                                             <div>
                                                  <ul
                                                       class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 container overflow-scroll h-96 gap-5">
                                                       <li><img alt="Reward Mobil" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Mobil/(1).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Mobil" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Mobil/(2).jpg" />
                                                       </li>
                                                       <li> <img alt="Reward Mobil" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Mobil/(3).jpg" />
                                                       </li>
                                                       <li> <img alt="Reward Mobil" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Mobil/(4).jpg" />
                                                       </li>
                                                       <li> <img alt="Reward Mobil" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Mobil/(5).jpg" />
                                                       </li>
                                                       <li> <img alt="Reward Mobil" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Mobil/(6).jpg" />
                                                       </li>
                                                       <li> <img alt="Reward Mobil" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Mobil/(7).jpg" />
                                                       </li>
                                                       <li> <img alt="Reward Mobil" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Mobil/(8).jpg" />
                                                       </li>
                                                  </ul>
                                             </div>
                                        </div>
                                        <div id="formMotor" class="hidden">
                                             <div>
                                                  <ul
                                                       class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 container overflow-scroll h-96 gap-5">
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(1).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(2).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(3).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(4).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(5).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(6).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(7).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(8).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(9).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(10).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(11).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(12).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(13).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(14).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(15).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(16).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(17).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(18).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(19).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(20).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(21).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(22).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(23).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(24).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(25).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(26).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(27).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(28).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(29).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(30).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(31).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(32).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(33).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(34).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(35).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(36).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(37).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(38).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(9).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(40).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(41).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(42).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(43).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(44).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(45).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(46).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(47).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(48).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(49).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(50).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(51).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(52).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(53).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(54).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(55).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(56).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(57).jpg" />
                                                       </li>
                                                       <li><img alt="Reward Motor" class="lozad"
                                                                 data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Motor/(58).jpg" />
                                                       </li>
                                                  </ul>
                                             </div>
                                        </div>

                                        <div id="formTour" class="hidden">
                                             <ul
                                                  class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 container overflow-scroll h-96 gap-5">
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(1).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(2).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(3).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(4).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(5).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(6).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(7).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(8).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(9).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(10).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(11).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(12).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(13).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(14).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(15).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(16).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(17).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(18).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(19).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(20).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(21).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(22).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(23).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(24).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(25).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(26).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(27).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(28).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(29).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(30).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(41).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(42).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(43).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(44).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(45).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(46).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(47).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(48).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(49).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(50).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(51).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(52).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(53).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(54).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(55).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(56).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(57).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(58).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(59).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(60).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(61).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(62).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(63).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(64).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(65).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(66).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(67).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(68).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(69).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(70).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(71).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(72).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(73).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(74).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(75).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(76).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(77).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(78).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(79).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(80).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(81).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(82).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(83).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(84).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(85).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(86).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(87).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(88).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(89).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(90).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(91).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Tour" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Tour/(92).jpg" />
                                                  </li>
                                             </ul>
                                        </div>
                                        <div id="formUmroh" class="hidden">
                                             <ul
                                                  class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 container overflow-scroll h-96 gap-5">
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(1).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(2).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(3).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(4).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(5).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(6).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(7).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(8).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(9).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(10).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(11).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(12).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(13).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(14).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(15).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(16).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(17).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(18).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(19).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(20).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(21).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(22).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(23).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(24).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(25).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(26).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(27).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(28).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(29).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(30).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(31).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Umroh" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Umroh/(32).jpg" />
                                                  </li>
                                             </ul>

                                        </div>
                                        <div id="formRumah" class="hidden">
                                             <ul
                                                  class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 container overflow-scroll h-96 gap-5">
                                                  <li><img alt="Reward Rumah" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Rumah/(1).jpg" />
                                                  </li>
                                             </ul>
                                        </div>
                                        <div id="formCashback" class="hidden">
                                             <ul
                                                  class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 container overflow-scroll h-96 gap-5">
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(1).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(2).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(3).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(4).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(5).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(6).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(7).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(8).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(9).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(10).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(11).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(12).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(13).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(14).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(15).jpg" />
                                                  </li>
                                                  <li><img alt="Reward Cashback" class="lozad"
                                                            data-src="../themes/front/bba/modules/replica/f_replica/replica/agen/static/images/Reward/Cashback/(16).jpg" />
                                                  </li>
                                             </ul>
                                        </div>
                                   </div>
                                   <!--footer-->
                                   <div
                                        class="flex items-center justify-start p-6 border-t border-solid border-blueGray-200 rounded-b">

                                        <button
                                             class="bg-red-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                             type="button" onclick="closeModal('modal-id')">
                                             Tutup
                                        </button>

                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>

               </section>
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
          <a href="https://api.whatsapp.com/send?phone=<?php echo $no_telp ?>&amp;text="
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
                    <a href="https://api.whatsapp.com/send?phone=<?php echo $no_telp ?>&amp;text="
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