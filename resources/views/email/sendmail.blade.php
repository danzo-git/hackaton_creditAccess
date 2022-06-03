<!DOCTYPE html>
<html lang="fr">
  <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>CreditBail</h2>

    <ul>
      <h1>  {{ $details['title'] }}</h1>
      <h3> </h3>
{{--        <img src="'image/packs-163497.jpg'" alt="" srcset="">--}}
    </ul>


    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 mb-2">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                            <div class="ms-2 c-details">
                                <h6 class="mb-0"> {{ $details['title'] }}</h6> <span>1 days ago</span>
                            </div>
                        </div>
                        <div class="badge"> <span>Design</span> </div>
                    </div>
                    <div class="mt-5">
                        <h3 class="heading">
                            vous avez rescu un credit de {{$details["montant"]}} suite a votre demande
                            votre mot de passe:{{ $details['mdp'] }}</h3>
                        <div class="mt-5">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="mt-3"> <span class="text1">32 Applied <span class="text2">of 50 capacity</span></span> </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center container">
                <div class="d-flex card text-center">
                    <div class="image"><img src="https://i.imgur.com/DC94rZe.png" width="150"></div>
                    <div class="image2"><img src="https://i.imgur.com/DC94rZe.png" width="150"></div>
                    <h1>50% OFF</h1><span class="d-block">On Everything</span><span class="d-block">Today</span>
                    <div class="mt-4"><small>With Code : bbbootstrap2020</small></div>
                </div>
            </div>
            <style>
                body{
    background:#eee;
}

.card {
  width: 350px;
  padding: 10px;
  border-radius: 20px;
  background: orange;
  border: none;
  color: #fff;
  height: 350px;
  display: flex;
  position: relative;
  align-items: center;
  justify-content: center;
}

.container {
  height: 100vh;
}

.card h1 {
  font-size: 48px;
  margin-bottom: 0px;
}

.card span {
  font-size: 28px;
}

.image {
  position: absolute;
  opacity: .1;
  left: 0;
  top: 0;
}

.image2 {
  position: absolute;
  bottom: 0;
  right: 0;
  opacity: .1;
}
                </style> 

