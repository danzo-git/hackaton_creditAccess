@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des utilisateurs</div>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Nom</th>
                        <th scope="col">Email</th>
                        <th scope="col">role</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                      <tr>
                        <th scope="row">{{ $item->id}}</th>
                        <td> {{ $item->name}}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{implode(',', $item->roles()->get()->pluck('name')->toArray())}}</td>

                        <td>
                            @can('edit-users')
                            <a href="{{route('admin.users.edit',$item->id)}}"><button class="btn btn-primary">editer</button></a>
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
                  <a href="/dash">retour</a>
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
@endsection
