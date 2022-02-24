<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    @include('partials.navbar')

    <div class="">
        @yield('container')
    </div>

    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const nav = document.querySelector('nav ul');
        menuToggle.addEventListener('click', function() {
            nav.classList.toggle('slide');
        });
    </script>
</body>

</html>