@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Usuarios') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="usuarios/create" class="btn btn-primary">Cadastrar</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                          <tr>
                            <th scope="row">{{$user->name}}</th>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="usuarios/edit/{{$user->id}}" class="btn btn-primary btn-sm">Editar</a>
                                <a href="usuarios/delete/{{$user->id}}" class="btn btn-danger btn-sm">Delete</a>                                
                            </td>                            
                          </tr>  
                          @endforeach                        
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
