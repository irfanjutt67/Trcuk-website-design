<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   <link rel="icon" href="image/logos.png" type="image/icon type">
   <meta charset="UTF-8">
   <title>Online Truck Booking Services In Pakistan</title>
   <link rel="stylesheet" type="text/css" href="css/inde.css"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="fontswesome/css/all.css">
   <!-- jQuery library -->
   <link rel="stylesheet" type="text/css" href="libraries/bootstrap.min.css">
   <script type="text/javascript" src="libraries/popper.min.js"></script>
   <script type="text/javascript" src="libraries/bootstrap.min.js"></script>
   <!-- slick slider -->
   <script type="text/javascript" src="libraries/jquery.min.js"></script>
   <script type="text/javascript" src="libraries/jquery-2.2.0.js"></script> 
   <script type="text/javascript" src="libraries/slick.js"></script> 
  </head>
<body>

  

  <!-------------------- Header start ------------------->

    <?php include "common/header.php" ?>

  <!-------------------- Header END ------------------->

  <div class="banner">
      <img src="image/banner.png" class="img-fluid" alt="Responsive image">
  </div>
                                       
  <!-------------------- Trucking App + mobile Slider start ------------------->

  <div class="container-fluid p-4 mt-5 mb-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="trucking01-app">
          Your Own Truck Booking App!
          <p>Our app allows you to choose the trucks and drivers that you deem fit for your service.
          Our prices are very competitive and our service is safe and reliable.</p>
          <button class="btn01" type="button">Download Now</button>
        </div>
      </div>
      <div class="col-lg-8">
        <section class="customer-logos slider mt-5">
          <div class="slide"><img src="image/s1.png"></div>
            <div class="slide"><img src="image/s2.png"></div>
            <div class="slide"><img src="image/s3.png"></div>
            <div class="slide"><img src="image/s5.png"></div>
            <div class="slide"><img src="image/s7.png"></div>
            <div class="slide"><img src="image/s8.png"></div>
            <div class="slide"><img src="image/s9.png"></div>
          </div>
        </section>
        <script>
          $(document).ready(function(){
            $('.customer-logos').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              autoplay: true,
              speed: 1700,
              autoplaySpeed: 2000,
              arrows: false,
              dots: false,
              pauseOnHover: false,
              responsive: [{
                breakpoint: 768,
                settings: {
                slidesToShow: 2
                }
                },{
                breakpoint: 520,
                settings: {
                slidesToShow: 1
                }       
              }]
            });
          });
        </script>
      </div>
    </div>      
  </div>

  <!-------------------- Trucking App + mobile Slider End------------------->


  <!-------------------- MAIN FEATURES start ------------------->

  <div class="features-grid">
    <div class="features">
      <div class="features-heading">
        MAIN FEATURES
        <p>WHAT DO WE OFFER?</p>
      </div>
    <div class="media">
      <div class="media-object"><img src="image/icons/trolley.png">
      </div>
      <div class="media-body">
        <h3 class="media-heading">Secure Moving of Freight</h3>
        <p>Our services ensure that the shipments arrive safe and sound without any damage.</p>
      </div>
    </div>
    <div class="media">
      <div class="media-object"><img src="image/icons/credit-card.png">
      </div>
      <div class="media-body">
        <h3 class="media-heading">Ever-Ready Technical Support</h3>
        <p>Our representatives are available around the clock to provide any help needed.</p>
      </div>
    </div>
    <div class="media">
      <div class="media-object"><img src="image/icons/scanning.png">
      </div>
      <div class="media-body">
        <h3 class="media-heading">Prices That Are Affordable</h3>
        <p>Competitive prices with additional features is what makes us the better option.</p>
      </div>
    </div>
    <div class="media">
      <div class="media-object"><img src="image/icons/order-tracking.png"></div>
        <div class="media-body">
          <h3 class="media-heading">Real-Time Tracking</h3>
          <p>Customers can track their shipment live to stay updated on the progress.</p>
        </div>
      </div>
    </div>
    <div class="features-image">
      <img src="image/feature.jpg">
      <div class="features-image01">
        <img src="image/features01.png">
      </div>
    </div>
  </div>

  <!-------------------- MAIN FEATURES start ------------------->

  <!-------------------- How app work start ------------------->

  <div class="work">
    <div class="app-work-grid">
      
      <!-------------------- How app work image start ------------------->

      <div class="app-image">
        <img src="image/w1.png">
      </div>  

      <!-------------------- Our app link start ------------------->

      <div class="app-links01">
        <div class="andriod-links">
          <div class="hover02 column">
            <div>
              <h2 class="links01"><img src="image/andriods.png" ></h2>
            </div>
          </div> 
        </div>
      </div>

      <!-------------------- Our app link END------------------->

      <!-------------------- app work start ------------------->

      <div class="how-app-work">
        <div class="how-app-work-heading">
          <p>HOW THE APP WORKS<p>
          <span>Try our mobile application to make your bookings.</span>
        </div>
        <div class="how-app-work01">
          <div class="media">
            <div class="media-object"><img src="image/icons/clock.png">
            </div>
            <div class="media-body">
              <h3 class="media-heading">Make A Booking When You Want</h3>
              <p>Our app allows you to make books in advance or for current deliveries,
              depending on your needs and requirements.</p>
            </div>
          </div>
          <div class="media">
            <div class="media-object"><img src="image/icons/business-plan.png">
            </div>
            <div class="media-body">
              <h3 class="media-heading">Easy to Use</h3>
              <p>The layout of your app is simple so that even first-time users quickly can make
              a booking and send their cargo on its way.</p>
            </div>
          </div>
          <div class="media">
            <div class="media-object"><img src="image/icons/rocket.png">
            </div>
            <div class="media-body">
              <h3 class="media-heading">Quick Access</h3>
              <p>The app matches the shipper when they send out a request. The process is
              streamlined and we aim to keep everything on schedule.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-------------------- How app work END ------------------->

  <!-------------------- our fleet start ------------------->
  
  <div class="fleet-grid">
    <div class="fleet">
      <div class="fleet-heading">
        OUR FLEET
        <p>To provide our customers with the best possible services
        we have a convoy of state-of-the-art trucks to ensure quick and safe delivery of shipments.
        We have over 150 trucks of different types which can
        transport perishable and fragile goods as well as heavy loads.
        This allows you to book a truck which has a capacity that you need</9>
      </div>
      <div class="fleet-image">
        <img src="image/fleet.jpg">
      </div>
    </div>
    <div class="fleet-video">
      <video controls>
        <source src="image/truck.m4v" type="video/mp4">
      </video>
      <p><img src="image/fleet2.jpg"></p>
    </div>
  </div>

  <!-------------------- our fleet END ------------------->

  <!-------------------- Our client slider Start ------------------->
      
  <div class="slick-slider02">
   <div class="slick-slider02-heading">
      OUR CLIENTS
      <p>All our efforts and investments are geared towards offering better solutions.</p>
    </div>
    <div class="customer-logoss">
      <div class="slid"><img src="image/qmobile.png"></div>
      <div class="slid"><img src="image//alkaram.png"></div>
      <div class="slid"><img src="image/khaadi.png"></div>
      <div class="slid"><img src="image/cabury.png"></div>
      <div class="slid"><img src="image/j.png"></div>
      <div class="slid"><img src="image/Honda.png"></div>
      <div class="slid"><img src="image/qmobile.png"></div>
      <div class="slid"><img src="image//alkaram.png"></div>
      <div class="slid"><img src="image/khaadi.png"></div>
    </div>
    <script>
      $(document).ready(function(){
			  $('.customer-logoss').slick({
				  slidesToShow: 4,
				  slidesToScroll: 1,
			  	autoplay: true,
			  	autoplaySpeed: 1000,
				  arrows: false,
				  dots: false,
					pauseOnHover: false,
					responsive: [{
				  	breakpoint: 768,
					  settings: {
						slidesToShow: 3
					  }
				    },{
					  breakpoint: 520,
					  settings: {
						slidesToShow: 2
				  	}
				  }]
			  });
		  });
    </script>
  </div>

  <!-------------------- Global supply END ------------------->

  <!-------------------- Our items Start ------------------->

  <div class="our-itemss">
    <div class="our-itemss-grid">
      <div class="our-itemss01 column">
        <div>
          <h6><img src="image/tautliner.jpg"></h6>
        </div>
        <div class="our-itemss-heading">
          <span> TAUTLINER</span>
          <p>13.62 x 2.50 x 2.65 m</p>
          Load capacity 25,7 t
        </div>
      </div>
      <div class="our-itemss01 column">
        <div>
          <h6><img src="image/frigo.jpg"></h6>
        </div>     
        <div class="our-itemss-heading">
          <span> TAUTLINER</span>
          <p>13.62 x 2.50 x 2.65 m</p>
          Load capacity 25,7 t
        </div>
      </div>
      <div class="our-itemss01 column">
        <div>
          <h6> <img src="image/tanker.jpg"></h6>
        </div>
        <div class="our-itemss-heading">
          <span> TAUTLINER</span>
          <p>13.62 x 2.50 x 2.65 m</p>
          Load capacity 25,7 t
        </div>
      </div>
      <div class="our-itemss01 column">
        <div>
          <h6><img src="image/flatbed.jpg"></h6>
        </div>
       <div class="our-itemss-heading">
          <span> TAUTLINER</span>
          <p>13.62 x 2.50 x 2.65 m</p>
          Load capacity 25,7 t
        </div>
      </div>
    </div>
  </div>

  <!-------------------- Our items Start ------------------->
 


  <!-------------------- Footer start ------------------->

  <?php include "common/footer.php" ?>

 <!-------------------- Footer END ------------------->




</body>
</html>
