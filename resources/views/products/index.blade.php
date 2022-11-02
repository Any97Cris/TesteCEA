@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Produtos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="produtos/create" class="btn btn-primary">Cadastrar</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                          <tr>
                            <th scope="row">{{$product->name}}</th>
                            <td>{{$product->image}}</td>
                            <td>
                                <a href="#">Delete</a>
                                <a href="#">Editar</a>
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
