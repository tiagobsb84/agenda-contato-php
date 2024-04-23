@extends('layouts.main')

@section('title', 'Novo contato')

@section('content')
    <div class="container formulario">
        <div class="conteudo-formulario">
            <h1 class="titulo-formulario">Novo Contato</h1>
            <form action="/formulario/salvar" method="POST" class="d-flex flex-column formulario-adicionar" >
                @csrf
                <label for="name" class="form-label">Nome</label>
                <input type="text" id="name">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" placeholder="(xx)xxxxx xxxx">
                <label for="obs" class="form-label">Observação</label>
                <textarea name="obs" id="obs" cols="10" rows="10"></textarea>

                <button class="btn btn-primary mt-4" type="submit">Salvar</button>
                <a href="/lista" class="btn btn-danger mt-3" type="button">Cancelar</a>
            </form>
        </div>
    </div>
@endsection