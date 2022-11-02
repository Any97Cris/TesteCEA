@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastrar Usuario') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    
                    <form action="/usuarios/store" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Nome: </label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Nome do Usuario">
                        </div>
                        <div class="form-group">
                            <label for="title">Email </label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Inserir E-mail">
                        </div>
                        <div class="form-group">
                            <label for="title">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" required placeholder="Inserir Senha">
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

