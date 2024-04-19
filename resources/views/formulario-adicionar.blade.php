<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Adicionar Novo Contato</title>
</head>
<body>
    <div class="container formulario">
        <div class="conteudo-formulario">
            <h1 class="titulo-formulario">Novo Contato</h1>
            <form action="" method="POST" class="d-flex flex-column formulario-adicionar" >
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
</body>
</html>