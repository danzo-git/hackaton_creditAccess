

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="{{asset('style/assets/vendors/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('style/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}" />
    <link rel="stylesheet" href="{{asset('style/assets/vendors/css/vendor.bundle.base.css')}}" />
    <link rel="stylesheet" href="{{asset('style/assets/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('style/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" />
    <link rel="stylesheet" href="{{asset('style/assets/css/style.css')}}" />
    <link rel="shortcut icon" href="{{('style/assets/images/favicon.png')}}" />
    <!-- wizard form -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" href="{{asset('style/assets/vendors/jquery-smartwizard/dist/css/smart_wizard.min.c')}}ss">
    <link rel="stylesheet" href="{{asset('style/assets/vendors/jquery-nice-select/css/nice-select.c')}}ss">
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar " id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="https://creditaccess.ci/wp-content/uploads/2021/02/Logo_CREDIT-ACCESS.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2">client: {{$clients->nom}}</span>
                {{-- <span class="font-weight-normal">$8,753.00</span> --}}
              </div>
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{route('gestion.profile',$clients->id)}}" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title"> Mon profile </span>
            
            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Contactez mon recouvreur</span>
            </a>
          </li>
          
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                
                <ul class="mt-4 pl-0">
                 <a href="/deconnexion"><li>Deconnexion</li></a>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav">
             
              
              
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="../assets/images/faces/face1.jpg" />
                  <span class="profile-name">{{$clients->nom}}</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <h3 class="mb-0"> Bienvenue Mr {{$clients->nom}}
              </h3>
              <div class="d-flex">

                <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
                  <i class="mdi mdi-printer btn-icon-prepend"></i> Rapport général </button>
              </div>
            </div>

             <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Demand de Credit</h4>
                        </div>
                        <div class="card-body">
                            <div id="smartwizard" class="form-wizard order-create">
                                <ul class="nav nav-wizard">
                                    <li><a class="nav-link" href="#wizard_Service">
                                        <span>1</span>
                                    </a></li>
                                   
                                </ul>
                                @if(session()->has('info')) 
                                <script>
swal("demande reussie", "{{session('info')}}", "success")
                     </script>
                                                           
                     @endif
                              <form action="{{route('client.dossier')}}" method="post">
                                  @csrf
                                <div class="tab-content">
                                  <div id="wizard_Service" class="tab-pane" role="tabpanel">
                                      <div class="row">
                                        <input type="hidden" value="{{$clients->id}}" name="id_client">
                                          <div class="col-lg-6 mb-2">
                                              <div class="mb-3">
                                                  <label class="text-label form-label">Montant du credit*</label>
                                                  <input type="number" name="montant" class="form-control" placeholder="Parsley" required="">
                                              </div>
                                          </div>
                                          <div class="col-lg-6 mb-2">
                                              <div class="mb-3">
                                                  <label class="text-label form-label">Dernier bulletin de salaire ou autre*</label>
                                                  <input type="file" name="bulletin" class="form-control" placeholder="Montana" required="">
                                              </div>
                                          </div>
                                          <div class="col-lg-6 mb-3">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Date de debut de l'activite*</label>
                                               <input type="date" name="date_debut" class="form-control">
                                            </div>
                                        </div>
                                          <div class="col-lg-6 mb-2">
                                              <div class="mb-3">
                                                  <label class="text-label form-label">Date de remboursement estimé*</label>
                                                  <input type="date" name="date_fin" class="form-control"  required="">
                                              </div>
                                          </div>
                                          <div class="col-lg-6 mb-3">
                                            <div class="mb-3">
                                                <label class="text-label form-label">But du credit*</label>
                                                <select name="but_credit" id="" class="form-control">

                                                    <option value="industrielle">Installation insdustrielle</option>
                                                    <option value="extension">Extension activite</option>
                                                    <option value="personnelle">Personnelle</option>
                                                    <option value="modernisation">Modernisation d'une activite ou espace</option>
                                                </select>
                                            </div>
                                        </div>
                                          <div class="col-lg-6 mb-3">
                                              <div class="mb-3">
                                                  <label class="text-label form-label">Pretention du Credit*</label>
                                                  <select name="credit" id="" class="form-control">

                                                      <option value="mobilier">Mobilier</option>
                                                      <option value="assurance">assurance</option>
                                                      <option value="Immobilier">Immobilier</option>
                                                      <option value="Autre">Autre</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-lg-6 mb-3">
                                              <div class="mb-3">
                                                  <label class="text-label form-label">Nom Partenaire*</label>
                                                  <input type="text" name="partenaire" class="form-control" required="">
                                              </div>
                                          </div>
                                          <div class="col-lg-6 mb-3">
                                              <div class="mb-3">
                                                  <label class="text-label form-label">Nombre d'individus*</label>
                                                  <input type="number" name="individus" class="form-control" required="">
                                              </div>
                                          </div>
                                          <div class="col-lg-6 mb-3">
                                              <div class="mb-3">
                                                  <label class="text-label form-label">Benefice Estimé*</label>
                                                  <input type="text" name="benef" class="form-control" required="">
                                              </div>
                                          </div>


                                          <div class="col-lg-6 mb-3">
                                              <div class="mb-3">
                                                  <label class="text-label form-label">situation juridique actuelle*</label>

                                                  <input type="file" name="situation" class="form-control" required="">
                                                  <button class="btn btn-success" type="submit">envoyer</button>
                                                </div>
                                          </div>

                                      </div>

                                  </div>


                                  <div id="wizard_Payment" class="tab-pane" role="tabpanel">
                                      <div class="row emial-setup">
                                          <div class="col-lg-3 col-sm-6 col-6">
                                              <div class="mb-3">
                                                  <label for="mailclient11" class="mailclinet mailclinet-gmail">
                                                      <input type="radio" name="emailclient" id="mailclient11">
                                                      <span class="mail-icon">
                                                          <i class="mdi mdi-google-plus" aria-hidden="true"></i>
                                                      </span>
                                                      <span class="mail-text">I'm using Gmail</span>
                                                  </label>
                                              </div>
                                          </div>
                                          <div class="col-lg-3 col-sm-6 col-6">
                                              <div class="mb-3">
                                                  <label for="mailclient12" class="mailclinet mailclinet-office">
                                                      <input type="radio" name="emailclient" id="mailclient12">
                                                      <span class="mail-icon">
                                                          <i class="mdi mdi-office" aria-hidden="true"></i>
                                                      </span>
                                                      <span class="mail-text">I'm using Office</span>
                                                  </label>
                                              </div>
                                          </div>
                                          <div class="col-lg-3 col-sm-6 col-6">
                                              <div class="mb-3">
                                                  <label for="mailclient13" class="mailclinet mailclinet-drive">
                                                      <input type="radio" name="emailclient" id="mailclient13">
                                                      <span class="mail-icon">
                                                          <i class="mdi mdi-google-drive" aria-hidden="true"></i>
                                                      </span>
                                                      <span class="mail-text">I'm using Drive</span>
                                                  </label>
                                              </div>
                                          </div>
                                          <div class="col-lg-3 col-sm-6 col-6">
                                              <div class="mb-3">
                                                  <label for="mailclient14" class="mailclinet mailclinet-another">
                                                      <input type="radio" name="emailclient" id="mailclient14">
                                                      <span class="mail-icon">
                                                          <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                                      </span>
                                                      <span class="mail-text">Another Service</span>
                                                  </label>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="row">
                                          <div class="col-12">
                                              <div class="skip-email text-center">
                                                  <p>Or if want skip this step entirely and setup it later</p>
                                                  <a href="javascript:void(0)">Skip step</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


          </div>
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('style/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('style/assets/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('style/assets/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('style/assets/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('style/assets/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('style/assets/vendors/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('style/assets/vendors/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('style/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('style/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('style/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('style/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('style/assets/js/misc.js')}}"></script>
    <script src="{{asset('style/assets/js/chart.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('style/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
    <!-- wizard form -->
    <script src="{{asset('style/assets/vendors/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('style/assets/vendors/jquery-smartwizard/dist/js/jquery.smartWizard.js')}}"></script>
    <script>
		$(document).ready(function(){
			// SmartWizard initialize
			$('#smartwizard').smartWizard();
		});
	</script>
  </body>
</html>

