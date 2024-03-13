<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/login.css">

</head>
<body>
    <main>
        <section class="logo-container" >
            <div class="logo">
                <h2>Logi</h2>
                <h2>Libras</h2>
            </div>

            <div class="info">
                <p>Tradução com VLIBRAS fixado</p>
            </div>
        </section>

        <section class="login-container" >
            @if ($mensagem = Session::get('erro'))
                {{$mensagem}}
            @endif

            <form action="{{route("admin.logar")}}" method="post" >
            @csrf

                <h1>Login</h1>

                <input type="email" placeholder="Email:" name="email" id="input-email" class="campo">
                <input type="password" placeholder="Senha:" name="senha" id="input-senha" class="campo">


                <button type="submit" class="campo botao">Enviar</button>

                <div class="check">
                    <input type="checkbox" name="manter-logado">
                    <label for="manter-logado">Manter-me logado</label>
                </div>
                <p>Não possui uma conta? <a href="./cadastro.html" style="color: aqua; cursor: pointer; text-decoration: underline;">Cadastre-se</a></p>
            </form>
        </section>
    </main>

        <!-- VLIBRAS -->

        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>
</body>
