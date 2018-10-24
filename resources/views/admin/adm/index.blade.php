@extends('layouts.app')

@section('content')
    <pagina tamanho="12">

        @if($errors->all())
            <div class="alert alert-danger alert-dismissible text-center" role="alert">
                <strong>Campo(s) Obrigatório(s)!!!</strong> Você esqueceu de preencher:
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @foreach ($errors->all() as $key => $value)
                    <li>{{$value}}</li>
                @endforeach
            </div>
        @endif
        <painel titulo="Lista de Admin">
            <migalhas :lista="{{$listaMigalhas}}"></migalhas>
                  
            <tabela-lista 
                :titulos="['#', 'Nome', 'Email']"
                :itens="{{json_encode($listaModelo)}}"
                ordem="desc" ordemCol="1"
                criar="#" detalhe="/admin/adm/" editar="/admin/adm/"
                modal="sim"
            ></tabela-lista>
            <div align="center">
                {{$listaModelo}}
            </div>

                                
        </painel>
    </pagina>
    <modal nome="adicionar" titulo="Adicionar">
        <formulario  id="formAdicionar" css="" action="{{route('adm.store')}}" method="post" enctype="" token="{{ csrf_token() }}">

            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{old('name')}}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                 <input type="email" class="form-control" id="email"  name="email" placeholder="Email" value="{{old('email')}}">
            </div>

            <div class="form-group">
                <label for="admin">Admin</label>
                    <select class="form-control" name="admin" id="admin">
                        <option {{(old('admin') && old('admin') == 'N' ? 'selected' : '' )}} value="N">Não</option>
                        <option {{(old('admin') && old('admin') == 'S' ? 'selected' : '' )}} {{(!old('admin') ? 'selected' : '' )}} value="S">Sim</option>
                    </select>
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password"  name="password" value="{{old('password')}}">
            </div>

        </formulario>
        
        <!-- recebendo botoes do componente Modal.vue -->
        <span slot="botoes">
            <button form="formAdicionar" class="btn btn-info">Adicionar</button>
        </span>   

    </modal>

    <modal nome="editar" titulo="Editar">
        <formulario id="formEditar" css="" :action="'/admin/adm/' + $store.state.item.id" method="put" enctype="" token="{{ csrf_token() }}">

            <div class="form-group">
                <label for="name">Nome</label>
                <input name="name" type="text" class="form-control" id="name" v-model="$store.state.item.name" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                 <input type="email" class="form-control" id="email"  name="email" v-model="$store.state.item.email" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="admin">Admin</label>
                    <select class="form-control" name="admin" id="admin" v-model="$store.state.item.admin">
                        <option value="N">Não</option>
                        <option value="S">Sim</option>
                    </select>
            </div>            

            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password"  name="password">
            </div>

        </formulario>

        <!-- recebendo botoes do componente Modal.vue -->
        <span slot="botoes">
            <button form="formEditar" class="btn btn-info">Adicionar</button>
        </span>

    </modal>

    <modal nome="detalhe" :titulo="$store.state.item.name">
        <p>@{{$store.state.item.email}}</p>
    </modal>

@endsection