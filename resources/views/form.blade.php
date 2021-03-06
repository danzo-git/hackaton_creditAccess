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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
     
    {{-- <link rel="stylesheet" href="sweetalert2.min.css"> --}}
    <!-- wizard form -->
    <link rel="stylesheet" href="{{asset('style/assets/vendors/jquery-smartwizard/dist/css/smart_wizard.min.c')}}ss">
    <link rel="stylesheet" href="{{asset('style/assets/vendors/jquery-nice-select/css/nice-select.css')}}">
  </head>
  <body>
    <div class="container-scroller">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
              <a class="sidebar-brand brand-logo" href="index.html"><img src="https://creditaccess.ci/wp-content/uploads/2021/02/Logo_CREDIT-ACCESS.png" alt="logo" /></a>
              <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <ul class="nav">
              <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                  <div class="nav-profile-image">
                    <img src="assets/images/faces/face1.jpg" alt="profile" />
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                  </div>
                  <div class="nav-profile-text d-flex flex-column pr-3">
                    {{-- <span class="font-weight-medium mb-2">{{Auth::user()->name}}</span> --}}

                    <input type="hidden"  value="{{$userRole=Auth::user()->roles('name')->get()->first()}}">
                    {{Auth::user()->name}}
                    <h6> agent connect??: {{$userRole->name}}</h6>

                    
                  </div>
                  <span class="badge badge-danger text-white ml-3 rounded">3</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                  <i class="mdi mdi-home menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              @can('manage-client')
              <li class="nav-item">
                <a class="nav-link" href="{{route('liste.dash')}}" aria-expanded="false" aria-controls="ui-basic">
                  <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                  <span class="menu-title">Gestion Client</span>
      
                </a>
      
              </li>
              @endcan
              @can('manage-contrat')
              <li class="nav-item">
                <a class="nav-link"href="{{route('gestion.credit')}}">
                  <i class="mdi mdi-contacts menu-icon"></i>
                  <span class="menu-title">Gestion Credit</span>
                </a>
              </li>
              @endcan
              @can('manage-agent')
              <li class="nav-item">
                <a class="nav-link" href="{{route('gestion.agent')}}">
                  <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                  <span class="menu-title">Gestion Agent</span>
                </a>
              </li>
              @endcan
                @can('add-client')
              <li class="nav-item">
                <a class="nav-link" href="{{route('client.create')}}">
                  <i class="mdi mdi-chart-bar menu-icon"></i>
                  <span class="menu-title">Ajouter client</span>
                </a>
              </li>
                @endcan
      
                @can('manage-folder')
              <li class="nav-item">
                <a class="nav-link" href="{{route("gestion.dossier")}}">
                  <i class="mdi mdi-table-large menu-icon"></i>
                  <span class="menu-title">Gestion des dossiers</span>
                </a>
              </li>
                @endcan
                @can('manage-recouvreur')
                <li class="nav-item">
                    <a class="nav-link" href="{{route("gestion.recouvreurs")}}">
                        <i class="mdi mdi-table-large menu-icon"></i>
                        <span class="menu-title">Gestion des Recouvreurs</span>
                    </a>
                </li>
      @endcan
              <li class="nav-item sidebar-actions">
                <div class="nav-link">
                  <div class="mt-4">
                  
                    <ul class="mt-4 pl-0">
                      <li><a href="/deconnexion"> Deconnexion</a></li>
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
                  <span class="profile-name">{{Auth::user()->name}}</span>
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
              <h3 class="mb-0"> Bienvenue Admin
              </h3>
              <div class="d-flex">

                <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
                  <i class="mdi mdi-printer btn-icon-prepend"></i> Rapport g??n??ral </button>
              </div>
            </div>

             <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Demand de dossier</h4>
                        </div>
                        <div class="card-body">
                            <div id="smartwizard" class="form-wizard order-create">
                                <ul class="nav nav-wizard">
                                    <li><a class="nav-link" href="#wizard_Service">
                                        <span>1</span>
                                    </a></li>
                                    <li><a class="nav-link" href="#wizard_Time">
                                        <span>2</span>
                                    </a></li>
                                    {{-- <li><a class="nav-link" href="#wizard_Details">
                                        <span>3</span>
                                    </a></li>
                                    <li><a class="nav-link" href="#wizard_Payment">
                                        <span>4</span>
                                    </a></li> --}}
                                </ul>
                                
                                    
                                     @if(session()->has('info')) 
                                           <script>
  swal("inscription zvec succes", "{{session('info')}}", "success")
                                </script>
                                                                      
                                @endif

                                       

                                @if(session()->has('info')) 
                                <script>
swal("inscription avec succes", "{{session('info')}}", "success")
                     </script>
                                                           
                     @endif
                                <form action="{{route('client.insertion')}}" id="form"  method="POST">
                                    @csrf
                                    <div class="tab-content">
                                        <div id="wizard_Service" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Nom*</label>
                                                        <input type="text" name="nom" class="form-control" placeholder="Parsley" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Prenom*</label>
                                                        <input type="text" name="prenom" class="form-control" placeholder="Montana" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Adresse actuelle*</label>
                                                        <input type="Text" name="adresse" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Date de naissance*</label>
                                                        <input type="date"min="1960-01-01" max="2000-12-31" name="naissance" class="form-control"  required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Profession*</label>
                                                        <input type="text" name="profession" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Sexe*</label>
                                                        <select name="sexe" id="" class="form-control">

                                                            <option value="Homme">Homme</option>
                                                            <option value="Femme">Femme</option>
                                                            <option value="Non-Binaire">Non-Binaire</option>
                                                            <option value="Autre">Autre</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Commune de naissance*</label>
                                                        <input type="text" name="com_naiss" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Nationalit??*</label>
                                                        <input type="text" name="nationalite" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Commune de r??sidence*</label>
                                                        <input type="text" name="com_res" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Nombre de d??pendants*</label>
                                                        <input type="number" name="dependants" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">No. t??l??phone r??sidence*</label>
                                                        <input type="text" name="telephone" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Adresse mail*</label>
                                                        <input type="Email" name="email" class="form-control" required="">
                                                    </div>
                                                </div>
                                                {{-- <div class="col-lg-6 mb-3">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">CNI,ATTESTATIN ou PASSPORT*</label>
                                                        <input type="file" name="cni" class="form-control" required="">
                                                    </div>
                                                </div> --}}
                                                <div class="col-lg-6 mb-3">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">salaire*</label>
                                                        <input type="text" name="salaire" class="form-control" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="wizard_Time" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Etat civil*</label>
                                                        <select name="regime" id="" class="form-control" required>
                                                            <option value="Homme">Mari??(e)</option>
                                                            <option value="Femme">Union libre</option>
                                                            <option value="Non-Binaire">Veuf(ve)</option>
                                                            <option value="Autre">Separ??(e)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Date de mariage*</label>
                                                        <input type="date" class="form-control"  placeholder="" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Regime matrimonial*</label>
                                                        <select name="matrimoniale" id="" class="form-control" required>
                                                            <option value="Homme">Communaut?? de biens</option>
                                                            <option value="Femme">S??paration de bien</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Nom du conjoint*</label>
                                                        <input type="text" name="nom_conjoint" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Prenom du conjoint*</label>
                                                        <input type="text" name="prenom_conjoint" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Date de naissance du conjoint*</label>
                                                        <input type="date" name="date_conjoint" min="1960-01-01" max="2000-12-31" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Commune de naissance du conjoint*</label>
                                                        <input type="text" name="com_naiss_con" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Commune de r??sidence du conjoint*</label>
                                                        <input type="text" name="com_res_con" class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Sexe du conjoint*</label>
                                                        <select name="sexe_con" id="" class="form-control">

                                                            <option value="Homme">Homme</option>
                                                            <option value="Femme">Femme</option>
                                                            <option value="Non-Binaire">Non-Binaire</option>
                                                            <option value="Autre">Autre</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">CNI,ATTESTATIN ou PASSPORT*</label>
                                                        <input type="file" name="cni" class="form-control" required="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                      <button onclick="document.getElementById('form').submit() " type="submit"  class="btn btn-primary" >envoyer</button>

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
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ?? bootstrapdash.com 2020</span>
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script> --}}
    {{-- <script src="sweetalert2.all.min.js"></script> --}}
    <script src="{{asset('style/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('style/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('style/assets/js/misc.js')}}"></script>
    <script src="{{asset('style/assets/js/chart.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    {{-- <script src="{{asset('style/assets/js/dashboard.js')}}"></script> --}}
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
