<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PK Hotels - About</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
   <?php require('inc/link.php'); ?>
<style>
    .box{
        border-top-color:var(--teal) !important;
    }
</style>
</head>

<body class="bg-light">

<?php require('inc/header.php'); ?>


<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center"> ABOUT US</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
  Welcome to <strong>PK Hotels</strong>, where comfort meets luxury. With over 100 premium rooms, top-rated service, and a dedicated team of professionals, we ensure every stay is memorable. Whether you're traveling for business or leisure, PK Hotels is your trusted partner in hospitality.
  </p>

</div>


<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Who We Are</h3>
        <p>
             "At PK Hotels, we believe hospitality is not just about providing a room – it's about creating a memorable experience for every guest."
              <br><small>– Mr. John Doe, General Manager</small>
        </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
         <img src="booking-assets/images/about/a1.jpg" class="w-100">
    </div>
  </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
           <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="booking-assets/images/about/hotel.svg" width="70px">
                <h4 class="mt-3">100+ Rooms</h4>
           </div>
        </div>
         <div class="col-lg-3 col-md-6 mb-4 px-4">
           <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="booking-assets/images/about/rating.svg" width="70px">
                <h4 class="mt-3">100+ Reviews</h4>
           </div>
        </div>
         <div class="col-lg-3 col-md-6 mb-4 px-4">
           <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="booking-assets/images/about/customers.svg" width="70px">
                <h4 class="mt-3">200+ Customers</h4>
           </div>
        </div>
         <div class="col-lg-3 col-md-6 mb-4 px-4">
           <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="booking-assets/images/about/staff.svg" width="70px">
                <h4 class="mt-3">150+ Staff</h4>
           </div>
        </div>
         
    </div>
</div>


<h3 class="my-5 fw-bold h-front text-center">MANAGEMENT TEAM</h3>

<div class="container px-4">
     <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="booking-assets/images/about/m1.jpg" class="w-100">
        <h5 class="mt-2">Female receptionist</h5>
      </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="booking-assets/images/about/m2.jpg" class="w-100">
        <h5 class="mt-2">Woman working </h5>
      </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="booking-assets/images/about/m3.jpg" class="w-100">
        <h5 class="mt-2">Hotel receptionist</h5>
      </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="booking-assets/images/about/m1.jpg" class="w-100">
        <h5 class="mt-2">Female receptionist</h5>
      </div>
      
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  
  <script>
    var swiper = new Swiper(".mySwiper", {
      
      spaceBetween:40,
      pagination: {
        el: ".swiper-pagination",
      },
      
      breakpoints:{
        320: {
          slidesPerView:1,
        },
         640: {
          slidesPerView:1,
        },
         768: {
          slidesPerView:3,
        },
         1024: {
          slidesPerView:3,
        },
      }
    });
  </script>

<?php require('inc/footer.php'); ?>

</body>
</html>