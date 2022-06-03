
    <div class="col-xl-12 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body px-0 overflow-auto">
                <h4 class="card-title pl-8">Dossier en attente</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-light">
                        <tr>
                            <th>Dossiers</th>
                            <th>Date de remboursement </th>
                            <th>Statut</th>
                            <th>Montant Demandé</th>
                            <th>decision</th>
                            <th>recouvreur</th>
                            <th>confirmer recouvreurs</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($queries as $query)

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/faces/face1.jpg" alt="image" />
                                        <div class="table-user-name ml-3">
                                            {{--                                                            @php--}}
                                            {{--                                                                $clients= \DB::table('clients')->get()->first();--}}
                                            {{--                                                                // dd($clients);--}}
                                            {{--                                                            @endphp--}}

                                            <p class="mb-0 font-weight-medium"> {{$query->nom}} </p>
                                            <small> Payement</small>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$query->date_fin}}</td>
                                <td>

                                    <div class="">
                                        @if($query->status==1)
                                            <a  href="{{route("verifie.status",$query->id)}}" class="badge badge-inverse-danger"> pas à jour</a>
                                        @else
                                            <a  href="{{route("verifie.status",$query->id)}}" class="badge badge-inverse-success"> A jour</a> </div>

                                    @endif
                                </td>
                                <td>{{intval($query->montant)}}</td>

                                <td >

                                    @if($query->isclient)



                                        <a href="{{route('client.bloquer',"$query->id")}}">bloquer le compte</a>
                                    @else
                                        <a href="{{route("client.valider","$query->id")}}">accepter</a>
                                </td>
                                @endif

                                <td>
                                    @php
                                        $recouvreurs= \DB::table('recouvreurs')->get();

                                    @endphp

                                    <select id="recou" name="recouvreurs" >
                                        @foreach($recouvreurs as $i=>$recouvreur)
                                        <option data-pos="{{$i}}" value="{{$recouvreur->id}}"  >
                                            {{$recouvreur->nom}}
                                        </option>
                                        @endforeach
                                    </select>

                                </td>
                                <td>
                                    <input type="hidden" id="id" value="{{$query->id}}">
                                   <a id="lien" href="{{route('gestion.valider_recouvreur',[$query->id,$recouvreur->id])}}">choix recouvreurs</a>
                                </td>
                            </tr>
                        @endforeach

<script>
    document.getElementById('recou').addEventListener('change', function() {

        var id = document.getElementById('id').value;
        document.getElementById('lien').href="/valide_recouv/"+id+"/"+this.value;
        // alert(this.value);
});

</script>



                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

