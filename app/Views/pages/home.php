<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<body class="font-montserrat text-sm bg-white dark:bg-zinc-900 " >
   <div class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">
      <main class=" flex-1 py-10  px-5 sm:px-10 ">
         <section>
            <div class="flex flex-col justify-between mt-4 bg-black/10 bg-blend-multiply rounded-3xl h-80 overflow-hidden bg-cover bg-center px-7 pt-4 pb-6 text-white"
               style="background-image: url('http://localhost:8080/img/inception.jpg');" >
               <!-- <img class="object-cover w-full h-full" src="images/inception.jpg" alt=""> -->
               <div class="flex -space-x-1 items-center ">
                  <img class="rounded-full w-7 h-7 shadow-lg border border-white"
                     src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsrj8csk" alt="" srcset="">
                  <img class="rounded-full w-7 h-7 shadow-lg border border-white"
                     src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsrj8cck"
                     alt="" srcset="">
                  <img class="rounded-full w-7 h-7 shadow-lg border border-white"
                     src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsfj8cck"
                     alt="" srcset="">
                  <span class="pl-4 text-xs drop-shadow-lg">+8 friends are watching</span>
               </div>
               <div class="bg-gradient-to-r from-black/30 to-transparent -mx-7 -mb-6 px-7 pb-6 pt-2">
                  <span class="uppercase text-3xl font-semibold drop-shadow-lg ">Inception</span>
                  <div class="text-xs text-gray-200 mt-2">
                     <a href="#" class="">Action</a>,
                     <a href="#" class="">Adventure</a>,
                     <a href="#" class="">Sci-Fi</a>
                  </div>
                  <div class="mt-4 flex space-x-3 items-center">
                     <a href="#" class="px-5 py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block">Watch</a>
                     <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg hover:bg-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
         </section>
         <section class="mt-9">
            <div class="flex items-center justify-between">
               <span class="font-semibold text-gray-700 text-base dark:text-white">Top Stars</span>
               <div class="flex items-center space-x-2 fill-gray-500">
                  <svg class="h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                     <path d="M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z"></path>
                  </svg>
                  <svg class="h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                     <path d="M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z"></path>
                  </svg>
               </div>
            </div>
            <div class="mt-4 grid grid-cols-2  sm:grid-cols-4 gap-x-5 gap-y-5">
               <div class="relative rounded-xl overflow-hidden ">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/WP_-_random_-5_%2814094372762%29.jpg/319px-WP_-_random_-5_%2814094372762%29.jpg" class="object-cover w-full h-full -z-10" alt="">
                  <div class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-between">
                     <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg text-white self-end hover:bg-red-600/80">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                     </a>
                     <div class="self-center flex flex-col items-center space-y-2">
                        <span class="capitalize text-white font-medium drop-shadow-md">Joseph Gordon-Levitt</span>
                        <span class="text-gray-300 text-xs">+24 Movies</span>
                     </div>
                  </div>
               </div>
               <div class="relative rounded-xl overflow-hidden ">
                  <img src="https://img.zeit.de/kultur/film/2020-12/elliot-page-tranmann/wide__450x253__mobile__scale_1" class="object-cover h-full w-full -z-10" alt="">
                  <div class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-between">
                     <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg text-white self-end hover:bg-red-600/80">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                     </a>
                     <div class="self-center flex flex-col items-center space-y-2">
                        <span class="capitalize text-white font-medium drop-shadow-md">Elliot Page</span>
                        <span class="text-gray-300 text-xs">+10 Movies</span>
                     </div>
                  </div>
               </div>
               <div class="relative rounded-xl overflow-hidden ">
                  <img src="https://de.web.img3.acsta.net/c_310_420/pictures/16/01/19/11/06/274206.jpg" class="object-cover h-full w-full -z-10" alt="">
                  <div class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-between">
                     <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg text-white self-end hover:bg-red-600/80">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                     </a>
                     <div class="self-center flex flex-col items-center space-y-2">
                        <span class="capitalize text-white font-medium drop-shadow-md">Tom Hardy</span>
                        <span class="text-gray-300 text-xs">+27 Movies</span>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="mt-9">
            <div class="flex items-center justify-between">
               <span class="font-semibold text-gray-700 text-base dark:text-white">Similar Movies</span>
               <div class="flex items-center space-x-2 fill-gray-500">
                  <svg class="h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                     <path d="M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z"></path>
                  </svg>
                  <svg class="h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                     <path d="M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z"></path>
                  </svg>
               </div>
            </div>
            <!-- FILMNYA BROWW -->
               <div class="flex gap-2">
                  <?php $i = 1; ?>
                  <?php foreach ($books as $b) : ?>
                  <div>
                     <div class="py-3 sm:max-w-xl sm:mx-auto">
                        <div class="bg-white shadow-lg border-gray-100 max-h-80	 border sm:rounded-3xl p-8 flex space-x-8">
                           <div class="h-48 overflow-visible w-1/2">
                              <img class="rounded-3xl shadow-lg" src="/img/<?= $b['sampul']; ?>" alt="">
                           </div>
                           <div class="flex flex-col w-1/2 space-y-4">
                              <div class="flex justify-between items-start">
                                 <h2 class="text-3xl font-bold"><?= $b['judul']; ?></h2>
                                 <div class="bg-yellow-400 font-bold rounded-xl p-2">7.2</div>
                              </div>
                              <div>
                                 <div class="text-sm text-gray-400">Series</div>
                                 <div class="text-lg text-gray-800">2019</div>
                              </div>
                              <p class=" text-gray-400 max-h-40 overflow-y-hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              <div class="flex text-2xl font-bold text-a">$83.90</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php endforeach; ?>
               </div>
         </section>
      </main>
   </div>
</body>
<?= $this->endSection(); ?>