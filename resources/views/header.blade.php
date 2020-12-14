<!--
Author: Agniswar
Author URL: https://technophilix.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{$title}}</title>

    <link href="//fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('')}}includes/assets/css/style-starter.css?{{ time()}}">
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg stroke">
      <h1><a class="navbar-brand mr-lg-5" href="{{url('/')}}">
        <img src="{{asset('')}}includes/assets/images/logo.png" alt="Your logo" title="Your logo" />Save Poor
        </a></h1>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav w-100">
          <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @@about__active">
            <a class="nav-link" href="{{url('/about')}}">About</a>
          </li>
          <li class="nav-item @@causes__active">
            <a class="nav-link" href="causes.html">Causes</a>
          </li>
          <li class="nav-item @@contact__active">
            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
          </li>
          <li class="ml-lg-auto mr-lg-0 m-auto">
            <!--/search-right-->
            <div class="search-right">
              <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
              <!-- search popup -->
              <div id="search" class="pop-overlay">
                  <div class="popup">
                      <h4 class="mb-3">Search here</h4>
                      <form action="error.html" method="GET" class="search-box">
                          <input type="search" placeholder="Enter Keyword" name="search" required="required"
                              autofocus="">
                          <button type="submit" class="btn btn-style btn-primary">Search</button>
                      </form>

                  </div>
                  <a class="close" href="#close">×</a>
              </div>
              <!-- /search popup -->
          </div>
          <!--//search-right-->
          </li>
          <li class="align-self">
            <a href="#donate" class="btn btn-style btn-primary ml-lg-3 mr-lg-2"><span class="fa 
                fa-download mr-1"></span> Brochure</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
<!-- //header -->
<!-- main-slider -->