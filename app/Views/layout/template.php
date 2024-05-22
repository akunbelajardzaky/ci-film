<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="<?- base_url()?>public/css?v=1.0">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="./owlcarousel/dist/assets/owl.carousel.min.css">
    <script src="./owlcarousel/dist/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="./owlcarousel/dist//assets/owl.theme.default.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


<div class="container flex flex-row justify-center my-3 py-4 backdrop:blur-lg">
      <?php if (logged_in()) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Log Out</a>
                        </li>
                    <?php endif; ?>
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