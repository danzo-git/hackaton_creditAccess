@extends('pages.app')
<br><br><br>
<div class="container-fluid page-body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <a href="#" class="nav-link">
            <div class="nav-profile-image">
              <img src="../../assets/images/faces/face1.jpg" alt="profile">
              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column">
              <span class="font-weight-bold mb-2">  {{ Auth::user()->name }}</span>

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
        <li class="nav-item">

          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{route('liste.dash')}}">listes</a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">modifier</a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">bloquer</a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">creer</a></li>
            </ul>
          </div>
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
         <a class="nav-link" href="{{route('gestion.contrat')}}">
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
        {{-- <li class="nav-item">
          <a class="nav-link" href="../../pages/charts/chartjs.html">
            <span class="menu-title">Charts</span>
            <i class="mdi mdi-chart-bar menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../pages/tables/basic-table.html">
            <span class="menu-title">Tables</span>
            <i class="mdi mdi-table-large menu-icon"></i>
          </a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">


          </a>
          <div class="collapse" id="general-pages">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item sidebar-actions">
          <span class="nav-link">
            <div class="border-bottom">

            </div>
            <button class="btn btn-block btn-lg btn-gradient-primary mt-4"></button>
            <div class="mt-4">
              <div class="border-bottom">
                <p class="text-secondary">Categories</p>
              </div>
              <ul class="gradient-bullet-list mt-4">
                <li>Free</li>
                <li>Pro</li>
              </ul>
            </div>
          </span>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title"> CreditBail </h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">

            </ol>
          </nav>
        </div>
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Demande de credit  refuser /accepter</h4>
                <p class="card-description">
                    <a href="/deconnexion" class="btn btn-outline-success">deconnexion</a> </p>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Liste des administrateurs</div>

                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">numero client</th>
                                        <th scope="col">  type materiel</th>
                                        <th scope="col">designation</th>
                                        <th scope="col"> loyer</th>
                                        <th scope="col">marque</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contrat as $contra)
                                      <tr>
                                        <th scope="row">{{ $contra->id_client}}</th>


                                        <td> {{ $contra->type_materiel}}</td>

                                        <td>{{$contra->marque}}</td>
                                        <td>{{$contra->loyer}}</td>

                                        <td>
                                            @can('edit-users')
                                            <a href="{{route('client.edit',$item->id)}}"><button class="btn btn-primary">editer</button></a>
                                            @endcan
                                            @can('delete-users')
                                            <form action="{{route('admin.users.destroy',$item->id)}}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-warning">supprimer</button>

                                            </form>
                                            @endcan
                                            {{-- <a href=""><button class="btn btn-success">editer</button></a> --}}
                                        </td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                                <div class="card-body">
                                    {{-- @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif --}}




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{-- <script>
var hidden = false;
function action() {
    hidden = !hidden;
    if(hidden) {
        document.getElementById('togglee').style.visibility = 'none';
    } else {
        document.getElementById('togglee').style.visibility = 'visible';
    }
}
</script> --}}



  {{-- <button >refuser</button> --}}



              </div>
            </div>
          </div>

          {{-- <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectGender">Gender</label>
                    <select class="form-control" id="exampleSelectGender">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCity1">City</label>
                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Textarea</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                  </div>
                  <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div> --}}
          {{-- <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Input size</h4>
                <p class="card-description"> Add classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>. </p>
                <div class="form-group">
                  <label>Large input</label>
                  <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                </div>
                <div class="form-group">
                  <label>Default input</label>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                </div>
                <div class="form-group">
                  <label>Small input</label>
                  <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username">
                </div>
              </div>
            </div>
          </div> --}}
          {{-- <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Select size</h4>
                <p class="card-description"> Add classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>. </p>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Large select</label>
                  <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect2">Default select</label>
                  <select class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect3">Small select</label>
                  <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </div>
          </div> --}}
           {{-- <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-gradient-primary" type="button">Search</button>
                    </div>
                  </div>
                </div> --}}



          {{-- <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Horizontal Two column</h4>
                <form class="form-sample">
                  <p class="card-description"> Personal info </p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-9">
                          <select class="form-control">
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
                          <input class="form-control" placeholder="dd/mm/yyyy" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Category</label>
                        <div class="col-sm-9">
                          <select class="form-control">
                            <option>Category1</option>
                            <option>Category2</option>
                            <option>Category3</option>
                            <option>Category4</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Membership</label>
                        <div class="col-sm-4">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Free </label>
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="card-description"> Address </p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address 1</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">State</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address 2</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Postcode</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">City</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Country</label>
                        <div class="col-sm-9">
                          <select class="form-control">
                            <option>America</option>
                            <option>Italy</option>
                            <option>Russia</option>
                            <option>Britain</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.html -->
      <footer class="footer">
        <div class="container-fluid clearfix">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates </a> from Bootstrapdash.com</span>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../../assets/js/off-canvas.js"></script>
<script src="../../assets/js/hoverable-collapse.js"></script>
<script src="../../assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="../../assets/js/file-upload.js"></script>
<script>
    //Pour masquer la division :
//document.getElementById(identifiant_de_ma_div).style.display = none;
///Pour afficher la division :
//document.getElementById(identifiant_de_ma_div).style.display = block;
</script>
<!-- End custom js for this page -->
</body>
</html>
