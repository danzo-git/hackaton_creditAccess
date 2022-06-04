@extends('layouts.headdash')
@section('content')
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

                            {{-- <span class="font-weight-normal">$8,753.00</span> --}}
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
@endcan    <li class="nav-item">
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
                        
                        @include('layouts.historique')
                    <div class="row">




                
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
