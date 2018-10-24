@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Artigos">

            <h1 align="center">{{$artigo->titulo}}</h1>
            <p align="center">{{$artigo->descricao}}</p>
            <p>
                {!!$artigo->conteudo!!}
            </p>
            <p align="center">
                <small>{{$artigo->user->name}} - {{date('d/m/Y', strtoTime($artigo->data))}}</small>
            </p>

        </painel>
    </pagina>
@endsection
