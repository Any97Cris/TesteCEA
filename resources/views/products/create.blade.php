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
                    <form action="/produtos/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Nome: </label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Nome do Produto">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="image">Imagem do produto: </label>
                            <input type="file" class="form-control-file" id="image" name="image" required placeholder="Inserir imagem do produto">
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
