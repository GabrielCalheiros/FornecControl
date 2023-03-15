@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Listagem</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Você está logado!</p>
                    @foreach($fornecedores as $fornecedor)
    <div>
        <h3>{{ $fornecedor->nome }}</h3>
        <p>{{ $fornecedor->email }}</p>
        <p>{{ $fornecedor->telefone }}</p>
    </div>
@endforeach

                </div>
            </div>
        </div>
    </div>
@stop

