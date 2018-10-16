@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de Artigos">
            <migalhas :lista="{{$listaMigalhas}}"></migalhas>
                  
            <tabela-lista 
                :titulos="['#', 'Titulo', 'Descrição', 'Data']"
                :itens="{{$listaArtigos}}"
                ordem="desc" ordemCol="2"
                criar="#" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="676557454"
                modal="sim"
            ></tabela-lista>
                                
        </painel>
    </pagina>
    <modal nome="adicionar" titulo="Adicionar">
    <formulario  id="formAdicionar" css="" action="{{route('artigos.store')}}" method="post" enctype="" token="{{ csrf_token() }}">

        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" placeholder="Título">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="data"  name="data" placeholder="Data">
        </div>
        <div class="form-group">
            <label for="conteudo">Conteúdo</label>
            <textarea class="form-control" name="conteudo" id="conteudo"></textarea>
        </div>
        <div class="form-group">
            <label for="descricao">Data</label>
            <input type="datetime-local" class="form-control" id="descricao"  name="descricao">
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