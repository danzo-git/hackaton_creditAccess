@extends('layouts.notification')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
</head>
<body>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gestion De Credit Bail- Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset/img/favicon.png" rel="icon">
  <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/aos/aos.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="asset/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          <li class="dropdown"><a href="#"><span>Connexion</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('form.connexion')}}">Client</a></li>
              {{-- <li><a href="{{route('form.fournisseur')}}">Fournisseur</a></li> --}}

            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Souscription</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              <li><a href="{{route('demande.form')}}">souscription au credit bail</a></li>
            </ul>
          </li>
          {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Bienvenue a KKT BAIL</h1>
          <h2>Le partenaire de confiance engagé auprès de tous pour le développement </h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{route('form.connexion')}}" class="btn-get-started scrollto">Demande credit bail</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="asset/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  @section('content')
<div class="card">
    @include('layouts.notification')
    @section('content')


  @if(session()->has('info'))
  <div class="notification is-success bg-success">
     <span class="text-white d-flex justify-content-center">{{ session('info') }}</span>
  </div>
@endif
  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>À PROPOS DE NOUS</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
                Une banque est une institution financière qui fournit des services bancaires, soit notamment de dépôt, de crédit et paiement.Le terme de banque peut désigner de façon générale le secteur bancaire.. Les banques jouent un rôle essentiel dans la stabilité et le fonctionnement du système financier, et sont en général soumises à une importante surveillance prudentielle de la part de l ...
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Des statistiques actualisées à l'usage des acteurs du développement</li>
              <li><i class="ri-check-double-line"></i> fin à la pauvreté et des financements pour diffuser la prospérité</li>
              <li><i class="ri-check-double-line"></i>Tous nos travaux d'analyse et de conseil</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
                Le crédit-bail constitue une forme de financement pour l'acquisition de machines et d'équipements. A financial lease is an alternative to lending as a method of financing the purchase of machinery and equipment. La définition du droit de crédit-bail a été adoptée. The definition of a financial lease right was adopted.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      « Le Client est au coeur de toute notre démarche. Nous le considérons comme un partenaire stratégique avec lequel nous souhaitons établir et entretenir les relations les plus durables »
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
 <!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    {{-- <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspici</a></h4>
              <p>Les GAB sont généralement affiliés à une banque. Il est possible d'utiliser le GAB d'une banque qui n'est pas la vôtre, mais vous aurez des frais de service à payer. Il y a aussi ce que l'on appelle des « distributeurs de billets ». Les clients de n'importe quelle banque peuvent s'en servir moyennant certains frais.Les GAB sont généralement affiliés à une banque. Il est possible d'utiliser le GAB d'une banque qui n'est pas la vôtre, mais vous aurez des frais de service à payer. Il y a aussi ce que l'on appelle des « distributeurs de billets ». Les clients de n'importe quelle banque peuvent s'en servir moyennant certains frais.Les GAB sont généralement affiliés à une banque. Il est possible d'utiliser le GAB d'une banque qui n'est pas la vôtre, mais vous aurez des frais de service à payer. Il y a aussi ce que l'on appelle des « distributeurs de billets ». Les clients de n'importe quelle banque peuvent s'en servir moyennant certains frais.Les GAB sont généralement affiliés à une banque. Il est possible d'utiliser le GAB d'une banque qui n'est pas la vôtre, mais vous aurez des frais de service à payer. Il y a aussi ce que l'on appelle des « distributeurs de billets ». Les clients de n'importe quelle banque peuvent s'en servir moyennant certains frais.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section --> --}}

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Nous rejoindre</h3>
            <p>La lutte contre la pauvreté est au cœur de nos activités. Les mesures que nous concevons, en lien étroit avec les États, aident les plus pauvres à améliorer leurs conditions de vie, via l’accès à des services sociaux, des infrastructures et des emplois.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Souscrivez Maintenant</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
 <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- End Frequently Asked Questions Section -->

  <!-- ======= Contact Section ======= -->
 <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="asset/vendor/aos/aos.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>
  <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="asset/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>

</body>

</html>
</body>
</html>
