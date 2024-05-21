<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="<?- base_url()?>public/css?v=1.0">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


<div class="container flex flex-row justify-center my-3 py-4 backdrop:blur-lg">
        <header>
            <nav class="bg-white p-4 ">
                <div class="container mx-auto flex items-center justify-between">
                    <!-- Brand Logo -->
                    <a href="#" class="text-white text-lg font-bold w-10 border border-gray-300 rounded-3xl">
                        <img src="./public/images/me.jpg" class="rounded-3xl shadow-lg" alt="Me">
                    </a>
                    <!-- Navigation Links -->
                    <div class="hidden md:flex space-x-4 ">
                        <a href="#" class="text-gray-700 py-2 px-3 rounded-md hover:bg-gray-100 transition-all duration-300 ease-in-out">Home</a>
                        <a href="#" class="text-gray-700 py-2 px-3 rounded-md hover:bg-gray-100 transition-all duration-300 ease-in-out">About</a>
                        <a href="#" id="categoriesDropdown" class="text-gray-700 py-2 px-3 rounded-md hover:bg-gray-100 transition-all duration-300 ease-in-out">
                            <div class="flex flex-row">
                                <span>Categories</span>
                                <span class="text-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-6 ps-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="cat-dropdown w-40 p-2 shadow-xl absolute mt-2 bg-white rounded-md hidden">
                                <ul>
                                    <li class="text-gray-700 p-2 rounded-md hover:bg-gray-100 transition-all duration-300 ease-in-out">
                                        PHP</li>
                                    <li class="text-gray-700 p-2 rounded-md hover:bg-gray-100 transition-all duration-300 ease-in-out">
                                        Laravel</li>
                                    <li class="text-gray-700 p-2 rounded-md hover:bg-gray-100 transition-all duration-300 ease-in-out">
                                        Livewire</li>
                                    <li class="text-gray-700 p-2 rounded-md hover:bg-gray-100 transition-all duration-300 ease-in-out">
                                        Js</li>
                                </ul>
                            </div>
                        </a>
                        <a href="#" class="text-gray-700 py-2 px-3 rounded-md hover:bg-gray-100 transition-all duration-300 ease-in-out">Contact</a>
                    </div>
        
                    <!-- Optional Right Content -->
                    <div class="hidden md:flex items-center space-x-4">
                        <!-- Add any additional content here -->
                    </div>
        
                    <!-- Mobile Menu Button (Hidden on larger screens) -->
                    <div class="md:hidden">
                        <button class="text-white focus:outline-none">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>
        </header>
    </div>

// JS

<script>

  //dropdown 
  let categoryDropdown = document.getElementById('categoriesDropdown');
        document.addEventListener('DOMContentLoaded', function () {
            const dropdownToggle = document.getElementById('categoriesDropdown');
            const dropdownContent = document.querySelector('.cat-dropdown');

            dropdownToggle.addEventListener('mouseenter', function () {
                dropdownContent.classList.remove('hidden');
            });

            dropdownToggle.addEventListener('mouseleave', function () {
                dropdownContent.classList.add('hidden');
            });
        });
</script>


    <?= $this->renderSection('content'); ?>

</body>

</html>