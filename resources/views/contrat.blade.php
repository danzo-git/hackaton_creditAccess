@extends('layouts.headdash')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
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
                            <h6> agent connecté: {{$userRole->name}}</h6>

                            <span class="font-weight-normal">$8,753.00</span>
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
                    <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
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
                                        <img src="assets/images/faces/face4.jpg" alt="" class="profile-pic" />
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="mb-0"> Dany Miles <span class="text-small text-muted">commented on your photo</span>
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="assets/images/faces/face3.jpg" alt="" class="profile-pic" />
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="mb-0"> James <span class="text-small text-muted">posted a photo on your wall</span>
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="assets/images/faces/face2.jpg" alt="" class="profile-pic" />
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
                                <img class="nav-profile-img mr-2" alt="" src="assets/images/faces/face1.jpg" />
                                <span class="profile-name">{{Auth::user()->name }}</span>
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
                        <h3 class="mb-0"> Bienvenue Mr {{Auth::user()->name}}
                        </h3>
                        <div class="d-flex">

                            <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
                                <i class="mdi mdi-printer btn-icon-prepend"></i> Rapport général </button>
                        </div>
                    </div>

@if(session()->has('info'))
<script>
    swal("un remboursement", "{{session('info')}}", "success")
                         </script>
@endif
                    <div class="row">
                        <div class="col-xl-8 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body px-0 overflow-auto">
                                    <h4 class="card-title pl-4">clients remboursement</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-light">
                                            <tr>
                                                <th>Dossiers</th>
                                                <th>Credit</th>
                                                <th>Montant verser</th>
                                                <th>reste a payer</th>
                                                <th>Payer</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                        @foreach($queries as $query)

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/faces/face1.jpg" alt="image" />
                                                        <div class="table-user-name ml-3">

                                                                {{$query->id}}
                                                             <p class="mb-0 font-weight-medium">{{$query->nom}}  </p>
                                                            <small> Payment on hold</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{$query->credit}}</td>
                                                <td>
                                                    <div class="badge badge-inverse-success"> {{$query->montant_rembourser}} </div>
                                                </td>
                                                <td>{{intval($query->credit)-intval($query->montant_rembourser)}}</td>

                                                <td>

                                                    <!-- Button trigger modal -->




                                                    
                                                                <form method="post" action="{{route('gestion.remboursement')}}">
                                                                    @csrf

                                                                    <input type="hidden"  name="id"  value="{{$query->id}}"  class="form-control">


                                                                    <input type="text" name="montant_rembourser" class="form-control" placeholder="entrer le montant">



{{--                                                                    <div class="modal-footer">--}}
{{--                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>--}}
{{--                                                                        <button type="submit" class="btn btn-primary">Save changes</button>--}}
{{--                                                                    </div>--}}
                                                                </form>
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                    <!-- Modal -->



                                                </td>
                                            </tr>

                                                @endforeach



                                        <!-- Modal -->


                                        <!-- Modal -->










                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">




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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

        <script>
            const myModal = document.getElementById('myModal')
            const myInput = document.getElementById('myInput')

            myModal.addEventListener('shown.bs.modal', () => {
                myInput.focus()
            })

        </script>
@endsection
