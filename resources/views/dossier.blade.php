@extends('layouts.headdash')
@section('content')
    <div class="container-scroller">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
                <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
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
                <li class="nav-item">
                    <a class="nav-link" href="{{route('client.create')}}">
                        <i class="mdi mdi-chart-bar menu-icon"></i>
                        <span class="menu-title">Ajouter client</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("gestion.dossier")}}">
                        <i class="mdi mdi-table-large menu-icon"></i>
                        <span class="menu-title">Gestion des dossiers</span>
                    </a>
                </li>
    <li class="nav-item">
          <span class="nav-link" href="#">
          
          </span>
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
                       
                        <li class="nav-item nav-profile dropdown border-0">
                            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                                <img class="nav-profile-img mr-2" alt="" src="assets/images/faces/face1.jpg" />
                                <span class="profile-name">{{Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                              
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
                    <div class="row ">
                        <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
                            <div class="row">
                                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                                    <div class="card bg-warning">
                                        <div class="card-body px-3 py-4">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="color-card">
                                                    @php
                                                        $clients= count(\DB::table("clients")->get());
                                                    @endphp

                                                    <p class="mb-0 color-card-head">Nombres de Clients </p>
                                                    <h2 class="text-white"> {{$clients}}<span class="h5"></span>
                                                    </h2>
                                                </div>
                                                <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                                            </div>
                                            <h6 class="text-white">300.000.000 fcfa de credit total</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                                    <div class="card bg-danger">
                                        <div class="card-body px-3 py-4">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="color-card">
                                                    <p class="mb-0 color-card-head">Dossiers</p>
                                                    <h2 class="text-white"> $5,300.<span class="h5">00</span>
                                                    </h2>
                                                </div>
                                                <i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
                                            </div>
                                            <h6 class="text-white">13.21% Since last month</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                                    <div class="card bg-primary">
                                        <div class="card-body px-3 py-4">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="color-card">
                                                    <p class="mb-0 color-card-head">Orders</p>
                                                    <h2 class="text-white"> $1,753.<span class="h5">00</span>
                                                    </h2>
                                                </div>
                                                <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                                            </div>
                                            <h6 class="text-white">67.98% Since last month</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6 stretch-card pb-sm-3 pb-lg-0">
                                    <div class="card bg-success">
                                        <div class="card-body px-3 py-4">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="color-card">
                                                    <p class="mb-0 color-card-head">Affiliate</p>
                                                    <h2 class="text-white">2368</h2>
                                                </div>
                                                <i class="card-icon-indicator mdi mdi-account-circle bg-inverse-icon-success"></i>
                                            </div>
                                            <h6 class="text-white">20.32% Since last month</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('layouts.historique')
                    <div class="row">




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
@endsection
