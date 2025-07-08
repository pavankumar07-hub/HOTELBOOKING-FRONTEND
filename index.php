<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PK Hotels-Home</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
   <?php require('inc/link.php'); ?>
    <style>
              .availability-form{
                margin-top: -50px;
                z-index:2;
                position: relative;
              }
              @media screen and (max-width:575px){
                .availability-form{
                margin-top: 25px;
                padding: 0 35px;
              }
              }
    </style>
</head>

<body class="bg-light">

<?php require('inc/header.php'); ?>

  <!--Carosuel -->

<div class="container-fluid px-lg-4 mt-4 ">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="booking-assets/images/carousel/IMG_15372.png"class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="booking-assets/images/carousel/IMG_40905.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="booking-assets/images/carousel/IMG_55677.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="booking-assets/images/carousel/IMG_62045.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="booking-assets/images/carousel/IMG_93127.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="booking-assets/images/carousel/IMG_99736.png"class="w-100 d-block" />
      </div>
    </div>
    
  </div>
</div>

<!--Check Availability form -->
<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
    <h5 class="mb-4">Check Booking Availability</h5>
    <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
          <label class="from-label" style="font-weight:500;">Check-in</label>
          <input type="date" class="form-control shodow-none">
          </div>
          <div class="col-lg-3 mb-3">
          <label class="from-label" style="font-weight:500;">Check-Out</label>
          <input type="date" class="form-control shodow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="from-label" style="font-weight:500;">Adult</label>
            <select class="form-select shadow-none" >
                  
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-2 mb-3">
            <label class="from-label" style="font-weight:500;">Children</label>
            <select class="form-select shadow-none" >
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mb-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
    </form>
    </div>
  </div>
</div>

<!-- Our Rooms -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
     <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="booking-assets/images/rooms/5.png" class="card-img-top" >
          
          <div class="card-body">
            <h5 >Simple Room Name</h5>
            <h6 class="mb-4">$200 per night</h6>
            <div class="features mb-4">
             <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                1 Belcony
              </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap ">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
               <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
               AC
              </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap ">
               Room heater
              </span>  
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              </span>
             
            </div>
            <div class="d-flex justify-content-evenly mb-2">
               <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now </a>
                <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More details</a>
              </div>
         
          </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
     <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="booking-assets/images/rooms/6.png" class="card-img-top" >
          
          <div class="card-body">
            <h5 >Simple Room Name</h5>
            <h6 class="mb-4">$200 per night</h6>
            <div class="features mb-4">
             <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                1 Belcony
              </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap ">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
               <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
               AC
              </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap ">
               Room heater
              </span>  
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              </span>
             
            </div>
            <div class="d-flex justify-content-evenly mb-2">
               <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now </a>
                <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More details</a>
              </div>
         
          </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
     <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="booking-assets/images/rooms/8.png" class="card-img-top" >
          
          <div class="card-body">
            <h5 >Simple Room Name</h5>
            <h6 class="mb-4">$200 per night</h6>
            <div class="features mb-4">
             <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                1 Belcony
              </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap ">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
               <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
               AC
              </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap ">
               Room heater
              </span>  
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              </span>
             
            </div>
            <div class="d-flex justify-content-evenly mb-2">
               <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now </a>
                <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More details</a>
              </div>
         
          </div>
      </div>
    </div>

    <div class="cl-lg-12 text-center mt-5">
     <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
    </div>
  </div>
</div>

<!-- Our Facilities  -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>

<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="booking-assets/images/facilities/IMG_43553.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="booking-assets/images/facilities/IMG_41622.svg" width="80px">
      <h5 class="mt-3">Television</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="booking-assets/images/facilities/IMG_27079.svg" width="80px">
      <h5 class="mt-3">Heater</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="booking-assets/images/facilities/IMG_47816.svg" width="80px">
      <h5 class="mt-3">Massage</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="booking-assets/images/facilities/IMG_49949.svg" width="80px">
      <h5 class="mt-3">AC</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
       <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
    </div>


  </div>
</div>
<!-- TESTIMONIALS -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

<div class="container mt-5">
 <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">

          <div class="swiper-slide bg-white p-4  ">
                <div class="profile d-flex aligin-items-center mb-3">
                  <img src="" width="30px">
                  <h6 class=" m-0 ms-2"> Random user</h6>  
                </div>
                <p>Loren ipsum dolar sit amet consector adipisicing elit.
                  id nemo excepturi, incidunt qui libero at omis ignore_user_abort
                  magni tempora ea.
                </p>
                <div class="rating">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
          </div> 
           <div class="swiper-slide bg-white p-4  ">
                <div class="profile d-flex aligin-items-center mb-3">
                  <img src="" width="30px">
                  <h6 class=" m-0 ms-2"> Random user</h6>  
                </div>
                <p>Loren ipsum dolar sit amet consector adipisicing elit.
                  id nemo excepturi, incidunt qui libero at omis ignore_user_abort
                  magni tempora ea.
                </p>
                <div class="rating">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
          </div> 
           <div class="swiper-slide bg-white p-4  ">
                <div class="profile d-flex aligin-items-center mb-3">
                  <img src="" width="30px">
                  <h6 class=" m-0 ms-2"> Random user</h6>  
                </div>
                <p>Loren ipsum dolar sit amet consector adipisicing elit.
                  id nemo excepturi, incidunt qui libero at omis ignore_user_abort
                  magni tempora ea.
                </p>
                <div class="rating">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
          </div> 
           <div class="swiper-slide bg-white p-4  ">
                <div class="profile d-flex aligin-items-center mb-3">
                  <img src="" width="30px">
                  <h6 class=" m-0 ms-2"> Random user</h6>  
                </div>
                <p>Loren ipsum dolar sit amet consector adipisicing elit.
                  id nemo excepturi, incidunt qui libero at omis ignore_user_abort
                  magni tempora ea.
                </p>
                <div class="rating">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
          </div> 

    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="col-lg-12 text-center mt-5">
       <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> Know More >>></a>
    </div>
</div>


  <!--Reach Us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 pg-white rounded">
      <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59349.30999527865!2d80.43451860000002!3d16.32357060000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a755cb1787785%3A0x9f7999dd90f1e694!2sGuntur%2C%20Andhra%20Pradesh!5e1!3m2!1sen!2sin!4v1749707759082!5m2!1sen!2sin"   loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>call us</h5>
          <a href="tel: +919652401393" class="d-inline-block mb-2 text-decoration-none text-dark">
           <i class="bi bi-telephone-fill"></i>+919652401393</a><br>
          <a href="tel: +919652401393" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+919652401393</a>
      </div>
       <div class="bg-white p-4 rounded mb-4">
        <h5>Fallow us</h5>
          <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1"></i> Twitter</span></a>
          <br>
          <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i>Facebook  </span></a>
          <br>
          <a href="#" class="d-inline-block ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1"></i> Instagram</span></a>
          
      </div>
    </div> 
  </div>
</div>


<?php require('inc/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      }
      
    });

     var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
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
          slidesPerView:2,
        },
         1024: {
          slidesPerView:3,
        },
      }
    });
</script>
</body>
</html>