@extends('admin.layouts.principal')
@extends('admin.layouts.header')
@extends('admin.layouts.footer')

@section('titulo', 'Pratos')

@section('acao', 'Formulário')

@section('conteudo-principal')

<link rel="stylesheet" href="bootstrap.min.css">

    <form method="post" action="">

        <div class="form-group">
            <label for="nome">Nome</label>
            <input id="nome" class="form-control" type="text" name="nome">

            <label for="conteudo">Ingredientes</label>
            <input id="conteudo" class="form-control" type="text" name="conteudo">

            <label for="preco">Preço</label>
            <input id="preco" class="form-control" type="text" name="preco"> 
        </div>

        <button class="btn btn-primary">Salvar</button>

    </form>

@endsection
