{{-- Extender o layout principal --}}
@extends('admin.layouts.principal')

{{-- Section para o titulo --}}
@section('titulo','Pratos')

{{-- Section para a acao --}}
@section('acao', 'Listar')

{{-- Section Principal --}}
@section('conteudo-principal') {{-- Tem que colocar o nome do yeild onde quero jogar o conteudo  --}}

<link rel="stylesheet" href="bootstrap.min.css">

<a href="#" class="btn btn-primary mt-n4 mb-2 float-right">
    Adicionar
</a>

<table class="table table-hover">
    @forelse ($pratos as $prato)
        <tr>
            <td>{{$prato->nome}}</td>
            <td class="d-flex justify-content-end">
                <span class="btn btn-info btn-sm" title="Editar">
                    <i class="fas fa-edit fa-fw"></i>
                </span>
                <button class="btn btn-danger btn-sm ml-1" title="Excluir">
                    <i class="far fa-trash-alt fa-fw"></i>
                </button>
            </td>

            <td>{{$prato->conteudo}}</td>
            <td class="d-flex justify-content-end">
                <span class="btn btn-info btn-sm" title="Editar">
                    <i class="fas fa-edit fa-fw"></i>
                </span>
                <button class="btn btn-danger btn-sm ml-1" title="Excluir">
                    <i class="far fa-trash-alt fa-fw"></i>
                </button>
            </td>

            <td>{{$prato->preco}}</td>
            <td class="d-flex justify-content-end">
                <span class="btn btn-info btn-sm" title="Editar">
                    <i class="fas fa-edit fa-fw"></i>
                </span>
                <button class="btn btn-danger btn-sm ml-1" title="Excluir">
                    <i class="far fa-trash-alt fa-fw"></i>
                </button>
            </td>

        </tr>
    @empty
        <tr>
            <td>Não há pratos cadastrados!</td>
        </tr>
    @endforelse

</table>

@endsection
