<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
  <div class="container">
    <div class="row row-30">
      <div class="col-md-4 col-xl-5">
        <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
          <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p>
          <!-- Rights-->
          <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
        </div>
      </div>
      <div class="col-md-4">
        <h5>Contacts</h5>
        <dl class="contact-list">
          <dt>Address:</dt>
          <dd>798 South Park Avenue, Jaipur, Raj</dd>
        </dl>
        <dl class="contact-list">
          <dt>email:</dt>
          <dd><a href="mailto:#">dkstudioin@gmail.com</a></dd>
        </dl>
        <dl class="contact-list">
          <dt>phones:</dt>
          <dd><a href="tel:#">https://karosearch.com</a> <span>or</span> <a href="tel:#">https://karosearch.com</a>
          </dd>
        </dl>
      </div>
      <div class="col-md-4 col-xl-3">
        <h5>Links</h5>
        <ul class="nav-list">
          <li><a href="#">About</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contacts</a></li>
          <li><a href="#">Pricing</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row no-gutters social-container">
    <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
    <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
    <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
    <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
  </div>
</footer>
<style>
.context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}

.social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}
.social-container .col {
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}



</style>
  
  <script src="{{asset('')}}includes/assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
  
  <script src="{{asset('')}}includes/assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
  <script src="{{asset('')}}includes/assets/js/owl.carousel.js"></script>
  
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        dots: false,
        margin: 0,
        nav: true,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1
          },
          480: {
            items: 1
          },
          667: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      })
    })
  </script>
  <!-- //script -->
  
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1
          },
          736: {
            items: 1
          },
          1000: {
            items: 2,
            loop: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  
  <script src="{{asset('')}}includes/assets/js/counter.js"></script>
  
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();
  
      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });
  
    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->
  
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- //disable body scroll which navbar is in active -->
  
  <!--bootstrap-->
  <script src="{{asset('')}}includes/assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap-->
  </body>
  
  </html>