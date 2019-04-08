@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Cadastro</h2><br>
                <h3>Novo Cliente</h3>
            </div>
        </div>
        <div class="">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name"
                                   aria-describedby="nameHelp" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label for="document_number">Documento</label>
                            <input type="text" class="form-control" id="document_namber"
                                   aria-describedby="document_numberHelp" placeholder="Documento">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email"
                                   aria-describedby="emailHelp" placeholder="Seu E-mail">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="text" class="form-control" id="phone"
                                   aria-describedby="phoneHelp" placeholder="Telefone">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Estado Civil</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected>Selecione o estado civil</option>
                                <option value="1">Solteiro</option>
                                <option value="2">Casado</option>
                                <option value="3">Divorciado</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date_birth">Data Nasc.</label>
                            <input type="date" class="form-control" id="date_birth"
                                   aria-describedby="date_birthlHelp" placeholder="">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" id="masculino" value="m" checked>
                            <label class="form-check-label" for="masculino">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" id="feminino" value="f" checked>
                            <label class="form-check-label" for="feminino">
                                Feminino
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="physical_disability">Deficiencia Fisica</label>
                            <input type="text" class="form-control" id="physical_disability"
                                   aria-describedby="emailHelp" placeholder="Defeciencia Fisica">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Inadimplente ?</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

