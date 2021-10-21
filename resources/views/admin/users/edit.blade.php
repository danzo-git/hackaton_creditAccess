

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
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <strong>Modifier</strong> {{$user->name}}</div>

                <div class="card-body">
                <form action="{{route('admin.users.update',$user)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="email" class="col-md col-form-label ">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ??$user->email}}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md col-form-label ">{{ __('Nom utilisateur') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name')??$user->name }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @foreach ($roles as $role )
                    <div class="form-group form-check">
                       <input type="checkbox" class="form-check-input" name="roles[]"
                        value="{{$role->id}}" id="{{$role->id}}"
                      @if($user->roles->pluck('id')->contains($role->id))
                            checked
                      @endif>
                        <label for="{{$role->id}}" class="form-check-label">{{$role->name}}</label>

                    </div>
               @endforeach

                <button type="submit" class="btn btn-primary">Modifier les roles</button>


                 </form>

                </div>
            </div>
        </div>
    </div>
</div>
@extends('layouts.app')
