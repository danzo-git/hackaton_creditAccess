@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Interface {{$name=Auth::user()->roles->pluck('name')->contains('utilisateur','auteur','admin')
                }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    vous etes connectes en tant que {{Auth::user()->name}}!
                    <div class="container-fluid mb-5">
    <div class="text-center mt-5">
        <h1>Nos Services</h1>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <div class="our-services settings">
                    <div class="icon"> <a href=""> <img src="https://i.imgur.com/6NKPrhO.png"></a> </div>
                    <h4>Parametres</h4>
                    <p>Modifier votre compte</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="our-services speedup">
                    <div class="icon">  <img src="https://i.imgur.com/KMbnpFF.png"> </a></div>
                    <h4>CreditBail</h4>
                    <p>Faites la demande de materiel</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="our-services privacy">
                    <div class="icon"> <img src="https://i.imgur.com/AgyneKA.png"> </div>
                    <h4>Notre politique</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <div class="our-services backups">
                    <div class="icon"> <img src="https://i.imgur.com/vdH9LKi.png"> </div>
                    <h4>Sauvegarde de donnees</h4>
                    <p>Vous ne perdrez jamais vos données </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="our-services ssl">
                    <div class="icon"> <img src="https://i.imgur.com/v6OnUqu.png"> </div>
                    <h4>SSL secured</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="our-services database">
                    <div class="icon"> <img src="https://i.imgur.com/VzjZw9M.png"> </div>
                    <h4>Database</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins|Ubuntu&display=swap');

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0
}

body {
    background: #eee;
    font-family: 'Ubuntu', sans-serif
}

.box {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px
}

.our-services {
    margin-top: 75px;
    padding-bottom: 30px;
    padding: 0 60px;
    min-height: 198px;
    text-align: center;
    border-radius: 10px;
    background-color: #fff;
    transition: all .4s ease-in-out;
    box-shadow: 0 0 25px 0 rgba(20, 27, 202, .17)
}

.our-services .icon {
    margin-bottom: -21px;
    transform: translateY(-50%);
    text-align: center
}

.our-services:hover h4,
.our-services:hover p {
    color: #fff
}

.speedup:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #fb0054 0%, #f55b2a 100%)
}

.settings:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #34b5bf 0%, #210c59 100%)
}

.privacy:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #3615e7 0%, #44a2f6 100%)
}

.backups:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #fc6a0e 0%, #fdb642 100%)
}

.ssl:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #8d40fb 0%, #5a57fb 100%)
}

.database:hover {
    box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
    cursor: pointer;
    background-image: linear-gradient(-45deg, #27b88d 0%, #22dd73 100%)
}
</style>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
