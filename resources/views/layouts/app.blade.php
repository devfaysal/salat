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
        </style>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>

    </head>
    <body>
        <main class="min-h-screen max-w-lg mx-auto bg-gray-200">
            {{ $slot }}
            <!-- Slider main container -->
{{-- <div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    ...
  </div>

</div> --}}

        </main>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const swiper = new Swiper('.swiper');
            });
        </script>
    </body>
</html>