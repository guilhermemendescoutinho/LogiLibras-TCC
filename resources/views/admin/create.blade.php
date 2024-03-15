<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>

    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/cadastro.css">

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

        <section class="cadastro-container" >

            @if ($errors->any())
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            @endif
            
            <form method="post" action="{{route('users.store')}}">
            @csrf

                <h1>Cadastro</h1>

                <input type="text" placeholder="Nome:" name="name" class="campo">
                <span class="erroNome"></span>
                <input type="email" placeholder="Email:" name="email" class="campo">
                <span class="erroEmail erro"></span>
                <input type="password" placeholder="Senha:" name="password" class="campo">
                <span class="erroSenha erro" ></span>
                <input type="password" placeholder="Confirme a senha:" name="password" class="campo">
                <span class="erroSenha" ></span>

                <button type="submit" class="campo botao" name="enviar">Enviar</button>
                <p>Já possui uma conta? <a href="{{route('login')}}" style="color: aqua; cursor: pointer; text-decoration: underline;">Faça Login</a></p>


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
