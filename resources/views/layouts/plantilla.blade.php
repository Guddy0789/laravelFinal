<!DOCTYPE html>
<html lang="en">

<head>
<!-- Theme Made By www.w3schools.com - No Copyright -->
<title>Bootstrap Theme Simply Me</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link href="bootstrap/css/custom_final.css" rel="stylesheet" type="text/css" />
<link href="http://www.fontsquirrel.com/fonts/lato;" rel="stylesheet">
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/news.js"></script>

<!-- Para el Carousel -->
<link rel="stylesheet" href="css/lightslider.css" />
<style>
  ul {
      list-style: none outside none;
      padding-left: 0;
      margin: 0;
  }

  .demo .item {
      margin-bottom: 60px;
  }

  .content-slider li {
      background-color: #ed3020;
      text-align: center;
      color: #FFF;
  }

  .content-slider h3 {
      margin: 0;
      padding: 70px 0;
  }

  .demo {
      width: 800px;
  }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/lightslider.js"></script>
<script>
  $(document).ready(function() {
      $("#content-slider").lightSlider({
          loop: true,
          keyPress: true
      });
      $('#image-gallery').lightSlider({
          gallery: true,
          item: 1,
          thumbItem: 9,
          slideMargin: 0,
          speed: 500,
          auto: true,
          loop: true,
          onSliderLoad: function() {
              $('#image-gallery').removeClass('cS-hidden');
          }

      });
  });
</script>
<script>
  $(document).ready(function() {
      $('#responsive').lightSlider({
          item: 4,
          loop: false,
          slideMove: 2,
          easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
          speed: 600,
          responsive: [{
              breakpoint: 800,
              settings: {
                  item: 3,
                  slideMove: 1,
                  slideMargin: 6,
              }
          }, {
              breakpoint: 480,
              settings: {
                  item: 2,
                  slideMove: 1
              }
          }]
      });
  });
</script>
<!-- Para el Carrusel -->
</head>

<body>
  <!-- Navbar -->


@yield('boddy')


<!-- Carrusel -->
@extends('layouts.footer')
</body>

</html>
