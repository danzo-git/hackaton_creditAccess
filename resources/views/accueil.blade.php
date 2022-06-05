@extends('layouts.accueil')
@section('accueil')
<div id="preloader">
  <div id="ctn-preloader" class="ctn-preloader">
      <div class="round_spinner">
          <div class="spinner"></div>
          <div class="text">
              <img src="https://creditaccess.ci/wp-content/uploads/2021/02/Logo_CREDIT-ACCESS.png" alt="">
          </div>
      </div>
      {{-- <h2 class="head">Did You Know?</h2> --}}
      <p></p>
  </div>
</div>

<header class="header">
  <div class="header-top py-2 ">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-md-5">
                  <div class="header-info-left">

                     
                  </div>
              </div>
              
          </div>
      </div>
  </div>
  <div class="header-menu header-menu-3 bg-light" id="sticky">
      <nav class="navbar navbar-expand-lg ">
          <div class="container">
              <a class="navbar-brand sticky_logo" href="index.html">
                  <img class="main" src="https://creditaccess.ci/wp-content/uploads/2021/02/Logo_CREDIT-ACCESS.png" width="80" srcset="img/logo/Logo@2x.png 2x" alt="logo">
                  <img class="sticky" src="https://creditaccess.ci/wp-content/uploads/2021/02/Logo_CREDIT-ACCESS.png" srcset="img/logo/Logo-2@2x.png 2x" alt="logo">
              </a>
              <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="menu_toggle">
                      <span class="hamburger">
                          <span></span>
                          <span></span>
                          <span></span>
                      </span>
                      <span class="hamburger-cross">
                          <span></span>
                          <span></span>
                      </span>
                  </span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav menu ms-auto">
                      <li class="nav-item dropdown submenu ">
                          <a href="#" class="nav-link dropdown-toggle text-dark " role="button" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">Accueil</a>
                          <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                              data-bs-toggle="dropdown"></i>
                      </li> 
                      <li class="nav-item dropdown submenu ">
                          <a href="#nos_services" class="nav-link dropdown-toggle text-dark " role="button" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">Nos services</a>
                          <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                              data-bs-toggle="dropdown"></i>
                      </li> 
                      <li class="nav-item dropdown submenu ">
                          <a href="{{route('form.connexion')}}" class="nav-link dropdown-toggle text-dark " role="button" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false" >Se Connecter</a>
                          <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                              data-bs-toggle="dropdown"></i>
                      </li> 
                      
                  </ul>
                 
              </div>
          </div>
      </nav>
  </div>
</header>


<main>

  <!-- banner section -->
  <section class="banner-area-4 pt-145" id="banner_animation">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://creditaccess.ci/wp-content/uploads/2021/02/1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://creditaccess.ci/wp-content/uploads/2021/02/Habillage-Page_Slide-Site-Web-optime-scaled.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://creditaccess.ci/wp-content/uploads/2021/02/web.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!-- banner section end-->


  <!-- marketplace logo section start-->
  <section class="mplace-logo bg_white pt-80 pb-85">
      <div class="container">
          <div class="row gy-lg-0 gy-4">
              <div class="col-lg-3  wow fadeInLeft pe-0 mr-60">
                  <p>Pas besoin de vous déplacer en argence pour faire une Demander.</p>
              </div>
              <div class="col-lg-8 border-start text-center pl-lg-60">
                  <div class="row gy-md-0 gy-4 align-items-center h-100">
                      <div class="col-md-3 col-6">
                          <a href="#"><img class="img-fluid wow fadeInRight" data-wow-delay="0.1s"
                                  src="img/card/company-logo-1.png" alt="logo"></a>
                      </div>
                      <div class="col-md-3 col-6">
                          <a href="#"><img class="img-fluid wow fadeInRight" data-wow-delay="0.3s"
                                  src="img/card/company-logo-2.png" alt="logo"></a>
                      </div>
                      <div class="col-md-3 col-6">
                          <a href="#"><img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"
                                  src="img/card/company-logo-3.png" alt="logo"></a>
                      </div>
                      <div class="col-md-3 col-6">
                          <a href="#"><img class="img-fluid wow fadeInRight" data-wow-delay="0.7s"
                                  src="img/card/company-logo-4.png" alt="logo"></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- marketplace logo section end-->

  <!-- Nos services-->
  <section class="bcard-feature-area bg_disable pt-lg-125 pt-105 pb-lg-140 pb-115" style="background-image: url('https://creditaccess.ci/wp-content/uploads/2021/02/Habillage-Page_Slide-Site-Web-scaled.jpg')">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 mx-auto">
                  <div class="section-title">
                      <h2 class="wow fadeInUp" id="nos_services">Nos services</h2>
                      <p class="wow fadeInUp" data-wow-delay="0.3s">Par ce que vous êtes important à nos yeux, nous travaillons d'arrache pied chaque jours pour vous offrir des services de qualité
                      </p>
                  </div>
              </div>
          </div>
          <div class="row mt-30 gy-4">
              <div class="col-xl-4 col-md-6">
                  <div class="feature-card-widget-5 wow fadeInUp" data-wow-delay="0.1s">
                      <img src="img/feature/icon-11.svg" alt="icon">
                      <h4 class="mt-30 mb-15"> Suivie en ligne</h4>
                      <p>Online banking, also known as internet banking or web banking, is an electronic payment
                          system.</p>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6">
                  <div class="feature-card-widget-5 wow fadeInUp" data-wow-delay="0.3s">
                      <img src="img/feature/icon-12.svg" alt="icon">
                      <h4 class="mt-30 mb-15">Accord rapide de crédit</h4>
                      <p>Online banking, also known as internet banking or web banking, is an electronic payment
                          system.</p>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6">
                  <div class="feature-card-widget-5 wow fadeInUp" data-wow-delay="0.5s">
                      <img src="img/feature/icon-13.svg" alt="icon">
                      <h4 class="mt-30 mb-15">Protection de vos données personnelles</h4>
                      <p>Online banking, also known as internet banking or web banking, is an electronic payment
                          system.</p>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6">
                  <div class="feature-card-widget-5 wow fadeInUp" data-wow-delay="0.7s">
                      <img src="img/feature/icon-14.svg" alt="icon">
                      <h4 class="mt-30 mb-15">Un suivie par mobile</h4>
                      <p>Online banking, also known as internet banking or web banking, is an electronic payment
                          system.</p>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6">
                  <div class="feature-card-widget-5 wow fadeInUp" data-wow-delay="0.9s">
                      <img src="img/feature/icon-15.svg" alt="icon">
                      <h4 class="mt-30 mb-15">Suivie personnel pendant remboursement</h4>
                      <p>Online banking, also known as internet banking or web banking, is an electronic payment
                          system.</p>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6">
                  <div class="feature-card-widget-5 wow fadeInUp" data-wow-delay="1.1s">
                      <img src="img/feature/icon-16.svg" alt="icon">
                      <h4 class="mt-30 mb-15">Systeme de remboursement flexible</h4>
                      <p>Online banking, also known as internet banking or web banking, is an electronic payment
                          system.</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--Nos services end-->

  <!-- Safe Deposit section start-->
  <section class="safe-deposit-area overflow-hidden pt-lg-155 pb-lg-140 pt-125 pb-115 bg_white">
      <div class="container">
          <div class="row align-items-center gy-lg-0 gy-4">
              <div class="col-lg-6 col-md-9 mx-auto">
                  <div class="card-img">
                      <div class="logo">
                          <img src="img/card/visa.png" alt="logo">
                          <img src="img/card/mastercard.png" alt="logo">
                      </div>
                      <img class="bg-img" src="img/card/payment-bg.png" alt="bg img">
                      <img class="img-fluid wow fadeInUp" src="img/card/credit-card.png" alt="credit-card">
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="section-title text-start">
                      <h2 class="wow fadeInUp">Gerer votre compte depuis un espace client dédié</h2>
                      <p class="border-left pl-10 wow fadeInUp" data-wow-delay="0.2s">Banca came as a solution to
                          the next generation. Through our
                          portal,
                          you can sit at the
                          comfort of your home, office or pretty much anywhere, and send money to anywhere!
                          Through our strong network.</p>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="payment-system mt-80 wow fadeInRight" data-wow-delay="0.1s">
                              <img src="img/card/online-payment.svg" alt="icon">
                              <h5 class="mt-20 mb-10">Mode de paiement simple</h5>
                              <p>We acceept many type payments getway that you love.</p>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="payment-system mt-65 wow fadeInRight" data-wow-delay="0.3s">
                              <img src="img/card/safebox.svg" alt="icon">
                              <h5 class="mt-20 mb-10">Safe Deposit</h5>
                              <p>You can trust us for your deposit. No hidden fee.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Safe Deposit section end-->

  <!-- Customize Card section start-->
  <section class="customize-card-area pt-lg-125 pb-lg-140 pt-105 pb-115 bg_disable" id="card_area_animation">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 pe-lg-0">
                  <div class="section-title mb-35 text-start">
                      <h2 class="wow fadeInUp">Suivez en direct votre recouvrement</h2>
                      <p class="wow fadeInUp" data-wow-delay="0.3s">Personalize the newly-improved Payment Options
                          Form to include all your payment methods
                          such as, easy monthly payments, credit cards</p>
                  </div>
              </div>
          </div>
          <div class="row align-items-center">
              <div class="col-lg-6 order-lg-1 order-2">


                  <div class="feature-card-widget-6 wow fadeInUp mt-sm-0 mt-5" data-wow-delay="0.1s">
                      <div class="icon mr-20">
                          <img src="img/card/money-transfer.png" alt="icon">
                      </div>
                      <div class="card-content">
                          <h6>Suivez toutes vos transactions sur vos apareils</h6>
                          <p>The daily, weekly, monthly and yearly limits for amount of transactions and total
                              number of transactions.</p>
                      </div>
                  </div>
                  <div class="feature-card-widget-6 wow fadeInUp mt-30" data-wow-delay="0.3s">
                      <div class="icon mr-20">
                          <img src="img/card/reminder.png" alt="icon">
                      </div>
                      <div class="card-content">
                          <h6>Soyez constemment informé de nos activités</h6>
                          <p>The daily, weekly, monthly and yearly limits for amount of transactions and total
                              number of transactions.</p>
                      </div>
                  </div>
                  <div class="feature-card-widget-6 wow fadeInUp mt-30" data-wow-delay="0.5s">
                      <div class="icon mr-20">
                          <img src="img/card/refresh.png" alt="icon">
                      </div>
                      <div class="card-content">
                          <h6>Soyez informé de nos mises à jours</h6>
                          <p>The daily, weekly, monthly and yearly limits for amount of transactions and total
                              number of transactions.</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 order-lg-2 order-1 pl-lg-50">
                  <div class="card-img mb-5 mb-sm-0">

                      <img class="img-fluid" src="img/card/card-img-bg.png" alt="bg image">
                      <div class="shape-1">

                          <img class="layer wow rotateInUpRight" data-wow-delay="1.2s" data-depth="0.2"
                              src="img/card/Card-image-1.png" alt="card">
                      </div>
                      <div class="shape-2">

                          <img class="layer wow rotateInUpRight" data-wow-delay="0.6s" data-depth="0.15"
                              src="https://creditaccess.ci/wp-content/uploads/2021/02/Com-Cre%CC%81dit-de-campagne_Site.jpg" alt="card">
                      </div>
                      <div class="shape-3">

                          <img class="layer wow rotateInUpRight" data-depth="0.3" src="img/card/Card-image-3.png"
                              alt="card">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Customize Card section end-->

  <!-- Why Choose Use start -->
  <section class="why-choose-area pt-125 pb-135 overflow-hidden">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 mx-auto">
                  <div class="section-title">
                      <h2 class="wow fadeInUp">Pourquoi nous choisir ?</h2>
                      <p class="wow fadeInUp" data-wow-delay="0.3s">There are many variations of passages of Lorem
                          Ipsum available, but the majority have
                          suffered alteration.</p>
                  </div>
              </div>
          </div>
          <div class="row mt-55 gy-lg-0 gy-4">
              <div class="col-lg-4">
                  <div class="content-box pr-lg-30 pl-lg-30 wow fadeInUp" data-wow-delay="0.1s">

                      <img src="img/card/layout.svg" alt="icon">
                      <h4 class="mt-30 mb-15">Facile d'acces</h4>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                          suffered alteration.</p>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="content-box pr-lg-30 pl-lg-30 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="line-shape">
                          <img class="wow zoomIn" data-wow-delay="0.1s" src="img/card/line-shape.png" alt="shape">
                      </div>
                      <img src="img/card/salary.svg" alt="icon">
                      <h4 class="mt-30 mb-15">Accord facile de crédit</h4>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                          suffered alteration.</p>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="content-box pr-lg-30 pl-lg-30 wow fadeInUp" data-wow-delay="0.5s">
                      <img src="img/card/antivirus.svg" alt="icon">
                      <h4 class="mt-30 mb-15">100% Securisé</h4>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                          suffered alteration.</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Why Choose Use end -->



  <!-- Call To Action start -->
  <section class="cta-3 pt-90 pb-75">
      <div class="img-shapes">
          <div class="shape" data-parallax='{"x": 0, "y": 0, "rotateZ":20}'>
              <img src="img/card/right-arrow.png" alt="img">
          </div>

          <div class="shape" data-parallax='{"x": 200, "y": 90, "rotateZ":0}'>
              <div class="fly-msg">
                  <img src="img/card/mail.png" alt="">
                  <img src="img/card/wings-1.png" alt="">
                  <img src="img/card/wings-2.png" alt="">
              </div>
          </div>
          <div class="shape" data-parallax='{"x": 0, "y": 0, "rotateZ":-6}'>
              <img class="wow fadeInRight" src="img/card/postbox.png" alt="img">
          </div>
          <div class="shape" data-parallax='{"x": -200, "y": 0, "rotateZ":0}'>
              <img src="img/card/cloud.png" alt="img">
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-lg-5">
                  <div class="cta-content text-black wow fadeInLeft">
                      <h5>Soyez informé de nos activités</h5>
                      <h2>S'inscrire à notre newsletter</h2>

                      <div class="input-group mt-40">
                          <input type="email" class="form-control" placeholder="Entrez votre email">
                          <a href="#" class="input-append theme-btn theme-btn-lg">S'inscrire</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Call To Action end -->
</main>

@endsection