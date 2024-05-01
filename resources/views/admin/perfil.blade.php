<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="/css/perfil.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    @include('admin.partials.menu')
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="image"><i class='bx bx-user'></i></label>
        <input type="file" name="image" id="image">
        <p id="nome">{{Auth::user()->name}}</p>
        <p id="detalhe1">/--------------/</p>
        <p id="detalhe2">/--------------/</p>
        <p id="email">EMAIL: {{Auth::user()->email}}</p>
        <p id="pontos">PONTUAÇÃO:</p>

    </form>


</body>
</html>
