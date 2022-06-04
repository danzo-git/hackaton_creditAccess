<body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="../assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="../assets/images/faces/face1.jpg" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2"> {{$clients->nom}}</span>
                <span class="font-weight-normal">$8,753.00</span>
              </div>
              <span class="badge badge-danger text-white ml-3 rounded">3</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Forms</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <span class="nav-link" href="#">
              <span class="menu-title">Docs</span>
            </span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.bootstrapdash.com/demo/breeze-free/documentation/documentation.html">
              <i class="mdi mdi-file-document-box menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <div class="border-none">
                  <p class="text-black">Notification</p>
                </div>
                <ul class="mt-4 pl-0">
                 <a href="/deconnexion"><li>Sign Out</li></a>
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
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                  <span class="count count-varient1">7</span>
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face4.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Dany Miles <span class="text-small text-muted">commented on your photo</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face3.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> James <span class="text-small text-muted">posted a photo on your wall</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../assets/images/faces/face2.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Alex <span class="text-small text-muted">just mentioned you in his post</span>
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0">View all activities</p>
                </div>
              </li>
              <li class="nav-item dropdown d-none d-sm-flex">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-email-outline"></i>
                  <span class="count count-varient2">5</span>
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-success">Request</span>
                      <p class="text-small text-muted ellipsis mb-0"> Suport needed for user123 </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-warning">Invoices</span>
                      <p class="text-small text-muted ellipsis mb-0"> Invoice for order is mailed </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-danger">Projects</span>
                      <p class="text-small text-muted ellipsis mb-0"> New project will start tomorrow </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <h6 class="p-3 mb-0">See all activity</h6>
                </div>
              </li>
              <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item dropdown d-none d-xl-flex border-0">
                <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-earth"></i> English </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                  <a class="dropdown-item" href="#"> French </a>
                  <a class="dropdown-item" href="#"> Spain </a>
                  <a class="dropdown-item" href="#"> Latin </a>
                  <a class="dropdown-item" href="#"> Japanese </a>
                </div>
              </li>
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="../assets/images/faces/face1.jpg" />
                  <span class="profile-name">Henry Klein</span>
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
                                    {{-- <li><a class="nav-link" href="#wizard_Time">
                                        <span>2</span>
                                    </a></li> --}}
                                    {{-- <li><a class="nav-link" href="#wizard_Details">
                                        <span>3</span>
                                    </a></li>
                                    <li><a class="nav-link" href="#wizard_Payment">
                                        <span>4</span>
                                    </a></li> --}}
                                </ul>
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
  </body>