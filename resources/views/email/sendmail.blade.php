<!DOCTYPE html>
<html lang="fr">
  <head>
     <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    {{-- <h2>CreditAccess</h2> --}}

     
    
{{--        <img src="'image/packs-163497.jpg'" alt="" srcset="">--}}
{{-- {{ $details['title'] }} --}}
                          
                        


<div class="container mt-5">
  <div class="row d-flex justify-content-center">
      <div class="col-md-5">
          <div class="card">
              <div class="text-right p-2"> <img src="https://creditaccess.ci/wp-content/uploads/2021/02/Logo_CREDIT-ACCESS.png" width="120"> </div>
              <div class="text-center"> <small class="text-uppercase flat"> {{ $details['title'] }}</small> </div>
              <div class="d-flex justify-content-center px-2">
                  <div class="d-flex flex-row">
                    <h2>vous avez recu:</h2>
                      <h1 class="mt-0 off">{{$details["montant"]}}</h1> <sup class="mt-2 text-primary star"></sup>
                  </div>
              </div>
              <div class="line">
                  <hr>
              </div>
              <div class="text-center mb-5"> <span class="text-uppercase">credit accepté!!!</span> </div>
              <div class="text-right p-1"> <small>votre mot de passe:{{ $details['mdp'] }}</small> </div>
          </div>
      </div>
  </div>
</div>
<style>
  body{background-color: #eee}.card{border:none;position: relative}.off{font-size: 60px;margin-top: -16px !important;color: blue}.flat{font-size: 20px}.star{margin-top: 25px !important;font-size: 28px}.line{padding-right: 8rem!important;padding-left: 8rem!important}.line hr{height: 2px}
</style>


    
                               
                     

            
 

