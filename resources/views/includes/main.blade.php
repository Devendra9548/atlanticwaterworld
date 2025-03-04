<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/slick/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/assets/slick/slick/slick-theme.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    @yield('header')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    @yield('body')

    @yield('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        AOS.init();
    });
    </script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/assets/slick/slick/slick.min.js"></script>
    <script>
        window.addEventListener("scroll", function () {
    let element = document.querySelector("header"); // Change to your target element
    if (window.scrollY > 0) {
        element.classList.add("fixheader");
    } else {
        element.classList.remove("fixheader");
    }
});

    </script>

    <script>
        document.querySelector("#mb-open").addEventListener('click',function(e){
             e.preventDefault();
             document.querySelector("header .main-nav").style.display="block";
             
        });
        document.querySelector("#mb-close").addEventListener('click',function(e){
             e.preventDefault();
             document.querySelector("header .main-nav").style.display="none";
             
        });
    </script>
</body>

</html>