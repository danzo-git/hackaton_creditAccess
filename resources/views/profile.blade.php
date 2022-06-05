<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>


    <div class="container">
      <div class="main-body">
      
            <!-- Breadcrumb -->
         
            <!-- /Breadcrumb -->
      
            <div class="row gutters-sm">
              <div class="col-md-4 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <img src="https://creditaccess.ci/wp-content/uploads/2021/02/Logo_CREDIT-ACCESS.png" alt="Admin" class="rounded-circle" width="150">
                      <div class="mt-3">
                        <h4></h4>
                        @foreach($clients as $client)
                        <p class="text-secondary mb-1">{{$client->profession}}</p>
                      
                        @endforeach
                     
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card mt-3">
                  <ul class="list-group list-group-flush">
                      
                    @foreach($comptes as $compte)
                  
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0">Credit</h6>
                      <span class="text-secondary">{{$compte->credit}}</span>
                    </li>
                   
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0">montant à rembourser</h6>
                      <span class="text-secondary">{{$compte->montant_rembourser}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0">Reste a payé</h6>
                      <span class="text-secondary">{{$compte->reste_payer}}</span>
                    </li>
                  
                  @endforeach
                  </ul>
                </div>
              </div>
              @foreach($clients as $client)
              <div class="col-md-8">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Nom Complet</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{$client->nom}} {{$client->prenom}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{$client->email}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">telePhone</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                       {{$client->telephone}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Mobile</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        (320) 380-4539
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Addresse</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      {{$client->com_res}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      
                    </div>
                  </div>
                </div>
  @endforeach
                <div class="row gutters-sm">
                  <div class="col-sm-6 mb-3">
                    <div class="card h-100">
                      <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2 text-dark">Dossier</h6>
                       @foreach($dossiers as $dossier)
                       
                       
                       
                        
                        <hr>
                   <p>Montant demandé :{{$dossier->montant}}</p> 
                  <p> date estimé emprunt:{{$dossier->date_debut}}</p> 
                  <p>date estime fin {{$dossier->date_fin}}</p>  
                  <hr>
                            @endforeach
                            
                        
                       
                      
                        
                      </div>
                    </div>
                  </div>
                 
                </div>
  
  
  
              </div>
            </div>
  
          </div>
      </div>

      <style>

body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e73c1d;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

      </style>
  

  <!-- Button trigger modal -->



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
