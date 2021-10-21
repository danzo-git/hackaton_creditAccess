@extends('pages.app')
      <!-- partial -->
      <br><br> <br><br>
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  {{-- <img src="../../assets/images/faces/face1.jpg" alt="profile"> --}}
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">  <input type="hidden"  value="{{$userRole=Auth::user()->roles('name')->get()->first()}}">
              {{Auth::user()->name}}

                 <h6> agent connecté: {{$userRole->name}}</h6>
                </span>
    {{-- 
                    {{Auth::$user->roles()}} --}}
                  <span class="text-secondary text-small"> </span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.dashboard')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>


            @can('manage-client')
            <li class="nav-item">
              <a class="nav-link" href="{{route('liste.dash')}}">
                <span class="menu-title">Gestion Client</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            @endcan
            @can('manage-contrat')
            <li class="nav-item">
             <a class="nav-link" href="{{route('gestion.voir_contrat')}}">
                <span class="menu-title">Gestion Contrat</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            @endcan

            @can('manage-agent')
            <li class="nav-item">
             <a class="nav-link" href="{{route('gestion.agent')}}">
                <span class="menu-title">Gestion agent</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            @endcan

            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">

                </div>
                <button class="btn btn-block btn-lg btn-primary mt-4"><a href="/deconnexion" style="color: white;"> deconnexion</a></button>

              </span>
            </li>
          </ul>
        </nav>
<div class="">

    <img src="money.jpg" class="offset-1" height="490" alt="" srcset="">
</div>
        <!-- partial -->
