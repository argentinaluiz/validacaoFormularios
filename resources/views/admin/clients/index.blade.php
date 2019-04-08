@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Laravel: Validação de formularios</h2>
                <br>
                <h3>Listagem de Clientes</h3>
            </div>
            <div class="col-md-6">

                <a class="btn btn-primary float-right" href="{{route('clients.create')}}" role="button">
                    <i class="fa fa-user"></i>
                    Novo Cliente
                </a>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">CNPJ/CPF</th>
                <th scope="col">Data Nasc.</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">sexo</th>
                <th scope="col">Ação</th>
            </tr>
            </thead>
            <tbody>

            @foreach($clients as $c)
                <tr>
                    <th scope="row">{{$c->id}}</th>
                    <td>{{$c->name}}</td>
                    <td>{{$c->document_number}}</td>
                    <td>{{$c->data_birth}}</td>
                    <td>{{$c->email}}</td>
                    <td>{{$c->phone}}</td>
                    <td>{{$c->sex}}</td>
                    <td>
                        <a class="btn btn-success" href="#" role="button">
                            <i class="far fa-edit"></i>
                        </a>
                        <a class="btn btn-danger" href="#" role="button">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@stop
