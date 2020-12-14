<!-- footer 14 -->
<div class="w3l-footer-main">
    <div class="w3l-sub-footer-content">
        <section class="_form-3">
            <div class="form-main">
                <div class="container">
                    <div class="middle-section grid-column top-bottom">
                        <div class="image grid-three-column">
                            <img src="{{asset('')}}includes/assets/images/subscribe.png" alt="" class="img-fluid radius-image-full">
                        </div>
                        <div class="text-grid grid-three-column">
                            <h2>Subscribe our Newsletter to receive latest updates from us</h2>
                            <p>We won’t give you spam mails.</p>
                        </div>
                        <div class="form-text grid-three-column">
                            <form action="/" method="GET">
                                <input type="email" name=" placeholder" placeholder="Enter Your Email" required="">
                                <button type="submit" class="btn btn-style btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footers-14 -->
        <footer class="footer-14">
            <div id="footers14-block">
                <div class="container">
                    <div class="footers20-content">
                        <div class="d-grid grid-col-4 grids-content">
                            <div class="column">
                                <h4>Our Address</h4>
                                  <p>235 Terry, 10001 20C Trolley Square,
                                    DE 19806  U.S.A.</p>
                            </div>
                            <div class="column">
                                <h4>Call Us</h4>
                                <p>Mon - Fri 10:30 -18:00</p>
                                <p><a href="tel:+44-000-888-999">+44-000-888-999</a></p>
                            </div>
                            <div class="column">
                                <h4>Mail Us</h4>
                                <p><a href="mailto:info@example.com">info@example.com</a></p>
                                <p><a href="mailto:no.reply@example.com">no.reply@example.com</a></p>
                            </div>
                            <div class="column">
                                <h4>Follow Us On</h4>
                                <ul>
                                    <li><a href="#facebook"><span class="fa fa-facebook"
                                                aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#linkedin"><span class="fa fa-linkedin"
                                                aria-hidden="true"></span></a>
                                    </li>
                            
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footers14-bottom d-flex">
                        <div class="copyright">
                            <p>© 2020 Save Poor. All rights reserved. Design by <a href="https://technophilix.com/"
                                    target="_blank">technophilix</a></p>
                        </div>
                      </div>
                </div>
            </div>
            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                &uarr;
            </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () {
                    scrollFunction()
                };
  
                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }
  
                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
            <!-- /move top -->
  
        </footer>
        <!-- Footers-14 -->
    </div>
  </div>
  <!-- //footer 14 -->
  
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