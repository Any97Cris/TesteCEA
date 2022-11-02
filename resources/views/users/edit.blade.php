@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/usuarios/update/{{$user->id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Nome: </label>
                            <input type="text" class="form-control" id="name" name="name" required value="{{$user->name}}" placeholder="Nome do Usuario">
                        </div>
                        <div class="form-group">
                            <label for="title">E-mail: </label>
                            <input type="email" class="form-control" id="email" name="email" required value="{{$user->email}}" placeholder="Inserir texto">
                        </div>
                        <div class="form-group">
                            <label for="title">Nova senha: </label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Inserir nova senha">
                        </div>
                        <br>
                        <br>
                        <a href="/usuarios" class="btn btn-secondary">Voltar</a>
                        <input type="submit" value="Salvar" class="btn btn-primary">                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
