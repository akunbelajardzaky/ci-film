<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<body class="bg-gray-950">
    <div class="container w-screen relative">
        <!-- Navbar -->
        <div class="navbar bg-zinc-900/[0.5] p-3 flex items-center justify-between  w-screen fixed z-10">
            <section class="flex items-center">
                <img class="w-28" src="./assets/images/logo.png" alt="">
                <section class="flex text-white ps-3">
                    <nav class="ps-3 text-xs cursor-pointer">Home</nav>
                    <nav class="ps-3 text-xs cursor-pointer">TV Show</nav>
                    <nav class="ps-3 text-xs cursor-pointer">Movie</nav>
                    <nav class="ps-3 text-xs cursor-pointer">New & Popular</nav>
                    <nav class="ps-3 text-xs cursor-pointer">My List</nav>
                </section>
            </section>
            <section class="flex items-center justify-between text-white">
                <i class="bi bi-search px-4 cursor-pointer"></i>
                <i class="bi bi-bell px-4 cursor-pointer"></i>
            </section>
        </div>
        <!-- Navbar -->
        <!-- Video -->
        <div class="video w-screen relative">
            <img class="z-9  absolute top-36 p-3" src="./assets/images/image2.webp" />
            <video src="./assets/video/video.mp4" muted autoplay loop />
        </div>
        <!-- Video -->
        <!-- slider -->
        <section class="mx-auto w-screen relative" style="margin-top: -270px;z-index: 1;">
            <p class="text-white text-xl px-4 mb-2">Korean</p>
            <div class="owl-carousel owl-theme px-4">
                <div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/korean/img1.jpeg" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div>
                <div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/korean/img2.jpeg" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div><div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/korean/img3.jpeg" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div><div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/korean/img5.jpeg" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div><div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/korean/img6.jpeg" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider -->
        <!-- slider -->
        <section class="mx-auto w-screen relative mt-3">
            <p class="text-white text-xl px-4 mb-2">Bollywood</p>
            <div class="owl-carousel owl-theme px-4">
                <div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/trending/img1.webp" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div>
                <div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/trending/img2.jpeg" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div><div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/trending/img3.webp" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div><div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/trending/img5.jpeg" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div><div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/trending/img7.webp" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider -->
         <!-- slider -->
         <section class="mx-auto w-screen relative mt-3">
            <p class="text-white text-xl px-4 mb-2">Korean</p>
            <div class="owl-carousel owl-theme px-4">
                <div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/korean/img1.jpeg" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div>
                <div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/korean/img2.jpeg" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div><div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/korean/img3.jpeg" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div><div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/korean/img5.jpeg" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div><div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/korean/img6.jpeg" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider -->
        <!-- slider -->
        <section class="mx-auto w-screen relative mt-3">
            <p class="text-white text-xl px-4 mb-2">Bollywood</p>
            <div class="owl-carousel owl-theme px-4">
                <div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/trending/img1.webp" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div>
                <div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/trending/img2.jpeg" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div><div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/trending/img3.webp" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div><div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/trending/img5.jpeg" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div><div class="item">
                    <div href="#" class="card bg-neutral-900 rounded-md cursor-pointer overflow-hidden">
                        <img src="./assets/images/trending/img7.webp" alt="">
                        <section class="card-body p-3">
                            <div  class="text-white flex mb-2">
                                <section class="flex flex-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                      </svg>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                      </svg>
                                                   
                                </section>
                                <section><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                  </svg>
                                  </section>
                            </div>
                            <p class="text-white text-sm"><span class="text-green-500">95% Match</span> <span class="mx-2">Limited Series</span>   </p>
                            <p class="text-white text-xs">Crime . Thriller . Drama</p>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider -->
        <!-- footer -->
        <div class="w-screen mt-3 pt-8 pb-8 px-4 flex">
           <div class="mx-auto w-1/2  justify-evenly flex">
            <section>
                <p class="text-white text-base mb-3">Jobs</p>
               <p class="text-white text-base mb-3">Investor Relations</p>
               <p class="text-white text-base mb-3">Ways to Watch</p>
               <p class="text-white text-base mb-3">Terms of Use</p>
               </section>
               <section>
                <p class="text-white text-base mb-3">Privacy</p>
               <p class="text-white text-base mb-3">Cookie Preferences</p>
               <p class="text-white text-base mb-3">Legal Notices</p>
               </section><section>
                <p class="text-white text-base mb-3">Jobs</p>
               <p class="text-white text-base mb-3">Investor Relations</p>
               <p class="text-white text-base mb-3">Ways to Watch</p>
               <p class="text-white text-base mb-3">Terms of Use</p>
               </section>
               <section>
                <p class="text-white text-base mb-3">Privacy</p>
               <p class="text-white text-base mb-3">Cookie Preferences</p>
               <p class="text-white text-base mb-3">Legal Notices</p>
               </section>
           </div>
        </div>
        <!-- footer -->
    </div>
   
    <script>
       
       $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
</body>
<?= $this->endSection(); ?>