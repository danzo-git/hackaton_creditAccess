@extends('pages.app')
<br><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Gestion Contrat</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form elements</li> --}}
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Demande de credit  refuser /accepter</h4>
                  <p class="card-description"> </p>







<table class="table">
<thead>
  <tr>

    <th scope="col">Nom &prenoms</th>
    <th scope="col">employeur</th>
    <th scope="col">Salaire</th>
    <th scope="col">Type Materiel</th>
    <th scope="col">designation</th>
    <th scope="col">loyer</th>
  </tr>
</thead>
@foreach ($client as $info )
<tbody>
  
  <tr>
      @php
          $contrat=\DB::table('contrats')->where('id_client',$info->id)->first();

      @endphp

    <td> {{$info->nom}} </td>
    <td>{{$info->employeur}}</td>
    <td> {{$contrat->type_materiel}}</td>
    <td>{{$info->salaire}}</td>


    <td> {{$contrat->loyer}}</td>

    <td>
      @if (!$info->isclient)
      <a href="{{route('client.valider',$info->id)}}" > accepter</a>

      @endif
      <a href="{{route('client.bloquer',$info->id)}}"  > bloquer</a>
    </td>
  </tr>

</tbody>
@endforeach
</table>





              </span>


                </div>
              </div>
            </div>

</body>
</html>
