<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Lista de Contato</title>

</head>
<body>
    <div class="container contato">
        <h1 class="titulo-contato">Contatos</h1>
        <div class="pesquisa-adiciona-contato">
            <input class="campo-pesquisa-contato" type="search" placeholder="Pesquisar contato....">
            <a href="/formulario" class="btn btn-primary">Novo Contato</a>
        </div>
        <div class="conteudo-lista-contato">
            <ul class="list-group list-group-flush lista-contato">
                @foreach ($lista as $list)
                <li class="list-group-item item-contato d-flex justify-content-between">
                    {{ $list }}
                    <span>
                        <a href="">E</a>
                        <a href="">X</a>
                    </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>