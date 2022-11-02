@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Deletar') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/produtos/destroy/{{$product->id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            Deseja remover o produto {{$product->name}}?
                        </div>
                        <hr>
                        <a href="/produtos" class="btn btn-secondary">Não</a>
                        <input type="submit" value="Sim" class="btn btn-primary">                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
