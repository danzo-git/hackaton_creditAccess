@extends('pages.app')
   <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Liste des clients</p>
                    {{-- @if (!$clients->isclient)
                    <a href="{{route('client.valider',$info->id)}}" class="btn btn-primary" > accepter</a>

                    @endif
    <a href="{{route('client.bloquer',$info->id)}}"class="btn btn-primary"  > bloquer</a> --}}

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom & Prennom</th>
                                <th scope="col">Profession</th>
                                <th scope="col">Type de materiel</th>
                                <th scope="col">loyer</th>
                                {{-- <th scope="col">categorie</th> --}}
                                <th scope="col">nom fournisseur</th>
                                {{-- <th scope="col">action</th> --}}
                              </tr>
                            </thead>
                            @foreach ($clients as $client )
                           @php
                                 $contrat=\DB::table('contrats')->where('id_client',$client->id)->first();
                           @endphp
                            <tbody>
                              <tr>
                                <th scope="row">{{$client->id}}</th>
                                <td> {{$client->nom}}</td>
                                <td>{{$client->profession}}</td>
                                <td>{{$contrat->type_materiel}}</td>
                                <td> {{$contrat->loyer}}</td>
                                {{-- <td>{{$client->}}</td> --}}
                                <td>{{$contrat->fnom}}</td>
                                <td>
                                </td>

                              </tr>

                            </tbody>


                            @endforeach
                          </table>




                    </form>
                  </div>
                </div>
               </div>
