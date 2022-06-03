@extends('layouts.headdash')

@section('content')
<div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas bg-white" id="sidebar"  >
      <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="https://creditaccess.ci/wp-content/uploads/2021/02/Logo_CREDIT-ACCESS.png" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <ul class="nav " >
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
            </div>
            <span class="badge badge-danger text-white ml-3 rounded">3</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.dashboard')}}">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">Tableau de bord</span>
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
          <li class="nav-item">
              <a class="nav-link" href="{{route("gestion.recouvreurs")}}">
                  <i class="mdi mdi-table-large menu-icon"></i>
                  <span class="menu-title">Gestion des Recouvreurs</span>
              </a>
          </li>

        <li class="nav-item sidebar-actions">
          <div class="nav-link">
            <div class="mt-4">

              <ul class="mt-4 pl-0">
                <li><a href="/deconnexion">Déconnexion</a></li>
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
          
          <ul class="navbar-nav navbar-nav-right ml-lg-auto">
          
            <li class="nav-item nav-profile dropdown border-0">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                <img class="nav-profile-img mr-2" alt="" src="assets/images/faces/face1.jpg" />
                <span class="profile-name">{{Auth::user()->name }}</span>
              </a>
              <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">

                <a class="dropdown-item" href="/deconnexion">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Deconnexion </a>
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
                @if(session()->has('info'))
                    <div class="notification is-success bg-success">
                        <span class="text-white d-flex justify-content-center">{{ session('info') }}</span>
                    </div>
                @endif
              <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
                <i class="mdi mdi-printer btn-icon-prepend"></i> Rapport général </button>
            </div>
          </div>
          <div class="row">
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
                    </div>
                  </div>
                </div>
                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                  <div class="card bg-danger">
                    <div class="card-body px-3 py-4">
                      <div class="d-flex justify-content-between align-items-start">
                        <div class="color-card">
                            @php
                            $dossier=count(\DB::Table('dossiers')->get());
                            @endphp
                          <p class="mb-0 color-card-head">Dossiers</p>
                          <h2 class="text-white"> {{$dossier}}
                          </h2>
                        </div>
                        <i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                  <div class="card bg-primary">
                    <div class="card-body px-3 py-4">
                      <div class="d-flex justify-content-between align-items-start">
                        <div class="color-card">
                          @php
                              $rec=count(\DB::table("recouvreurs")->get());
                          @endphp
                          <p class="mb-0 color-card-head">Nombre de recouvreurs</p>
                          <h2 class="text-white">{{$rec}}                            
                          </h2>
                        </div>
                        <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                      </div>                      
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-9 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-7">
                      <h5>Statistiques Globales</h5>                      
                    </div>
                    <div class="col-sm-5 text-md-right">
                      <button type="button" class="btn btn-icon-text mb-3 mb-sm-0 btn-inverse-primary font-weight-normal">
                        <i class="mdi mdi-email btn-icon-prepend"></i>Télécharger le rapport  </button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="card mb-3 mb-sm-0">
                        <div class="card-body py-3 px-4">
                          <p class="m-0 survey-head">Dossiers a jours </p>
                          <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                            <div>
                                @php
                                    $dossiers= count(\DB::table("dossiers")->where('status',0)->get());
                                @endphp
                              <h3 class="m-0 survey-value">{{$dossiers}} </h3>

                            </div>
                            <div id="earningChart" class="flot-chart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card mb-3 mb-sm-0">
                        <div class="card-body py-3 px-4">
                          <p class="m-0 survey-head">Dossiers en retards </p>
                          <div class="d-flex justify-content-between align-items-end flot-bar-wrapper">
                            <div>
                                @php
                                    $dossiers= count(\DB::table("dossiers")->where('status',1)->get());
                                @endphp
                              <h3 class="m-0 survey-value">{{$dossiers}} </h3>

                            </div>
                            <div id="productChart" class="flot-chart"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="row my-3">
                    <div class="col-sm-12">
                      <div class="flot-chart-wrapper">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Activités</h4>
                            <canvas id="pieChart" style="height: 250px;"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-4 col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  @php
                      $recouvreur=\DB::table("recouvreurs")->get();
                  @endphp
                 
                      
              
                  <h4 class="card-title text-black">Recouvreurs en action</h4>
                  
                  @foreach ($recouvreur as $recouvre)
                  <div class="row pt-2 pb-1">
                    <div class="col-12 col-sm-7">
                     
                      <div class="row">
                        <div class="col-4 col-md-4">
                          <img class="customer-img" src="assets/images/faces/face22.jpg" alt="" />
                        </div>
                        <div class="col-8 col-md-8 p-sm-0">
                          <h6 class="mb-0">{{$recouvre->nom}}</h6>
                          <p class="text-muted font-12">{{now()}}</p>
                        </div>
                      </div>
                    </div>
                   
                    
                  </div>
                  @endforeach
               
                 
                </div>
              </div>
            </div>
          </div>

          <div class="row">




        </div>        
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection
