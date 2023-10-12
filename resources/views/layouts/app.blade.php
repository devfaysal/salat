<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        @vite('resources/css/app.css')
        <style>
            .image-bg{
                background-image: url(/mosque_bg_black.jpg);
                background-size: cover;
                background-repeat:no-repeat;
                background-position-y: top; 
                background-position-x: center; 
            }
            .swiper-button-prev{
                left: 40px!important;
            }
            .swiper-button-next{
                right:40px!important;
            }
            .swiper-button-prev,
            .swiper-button-next{
                top:29px!important;
            }
            .swiper-button-prev::after,
            .swiper-button-next::after{
                font-size: 20px!important;
                font-weight: 900!important;
                color: #000!important;
            }

        </style>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>

    </head>
    <body class="bg-orange-50">
        <main class="min-h-screen max-w-md mx-auto bg-gray-200">
            {{ $slot }}
        </main>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const swiper = new Swiper('.swiper',{
                     navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    initialSlide: {{ date('d') -1 }},
                    spaceBetween: 15,
                    centeredSlides: true,
                    slidesPerView: 1.2
                });
            });
        </script>
    </body>
</html>