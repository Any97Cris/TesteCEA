@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastrar Produto') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    
                    <form action="/produtos/store" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Nome: </label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Produto">
                        </div>
                        <div class="form-group">
                            <label for="title">Imagem: </label>
                            <input type="text" class="form-control" id="image" name="image" placeholder="Inserir texto">
                        </div>
                        <br>
                        <br>
                        <a href="/produtos" class="btn btn-secondary">Voltar</a>
                        <input type="submit" value="Salvar" class="btn btn-primary">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
