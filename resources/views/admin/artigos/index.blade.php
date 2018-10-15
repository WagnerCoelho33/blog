@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
            <migalhas :lista="{{$listaMigalhas}}"></migalhas>
                  
            <tabela-lista 
                :titulos="['#', 'Titulo', 'Descrição']"
                :itens="{{$listaArtigos}}"
                ordem="desc" ordemCol="2"
                criar="#" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="676557454"
                modal="sim"
            ></tabela-lista>
                                
        </painel>
    </pagina>
    <modal nome="adicionar" titulo="Adicionar">
    <formulario  id="formAdicionar" css="" action="#" method="put" enctype="multipart/form-data" token="123456">

        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" placeholder="Título">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao"  name="descricao" placeholder="Descrição">
        </div>

    </formulario>
    <!-- recebendo botoes do componente Modal.vue -->
    <span slot="botoes">
        <button form="formAdicionar" class="btn btn-info">Adicionar</button>
    </span>   

    </modal>
    <modal nome="editar" titulo="Editar">
        <formulario id="formEditar" css="" action="#" method="put" enctype="multipart/form-data" token="123456">

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" v-model="$store.state.item.titulo" placeholder="Título">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao"  name="descricao" v-model="$store.state.item.descricao" placeholder="Descrição">
                </div>

                <button form="formEditar" class="btn btn-info">Atualizar</button>

        </formulario>
        <!-- recebendo botoes do componente Modal.vue -->
        <span slot="botoes">
            <button form="formEditar" class="btn btn-info">Adicionar</button>
        </span>   
    </modal>

    <modal nome="detalhe" :titulo="$store.state.item.titulo">
        <p>@{{$store.state.item.descricao}}</p>
    </modal>
@endsection