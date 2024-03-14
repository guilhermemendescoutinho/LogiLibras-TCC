<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="/css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>

    <div class="sidebar" class=".collapse.navbar-collapse">
        <div class="logo_details">
          <!-- <i class="bx bxl-audible icon"></i> -->
          <div class="logo_name">LogiLibras</div>
          <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
          <li>
            <a href="">
              <i class="bx bx-grid-alt"></i>
              <span class="link_name">Cursos</span>
            </a>
            <span class="tooltip">Cursos</span>
          </li>
          <li>
            @auth
            <a href="#">
              <i class="bx bx-user"></i>
              <span class="link_name">Olá {{Auth::user()->name}} </span>
            </a>
            <span class="tooltip">Usuário</span>
          </li>
          @endauth
          <li>
            <a href="#">
              <i class="bx bx-chat"></i>
              <span class="link_name">Glossário</span>
            </a>
            <span class="tooltip">Glossário</span>
          </li>
          <li>
            <a href="#">
              <i class="bx bx-pie-chart-alt-2"></i>
              <span class="link_name">Pontuações</span>
            </a>
            <span class="tooltip">Pontuações</span>
          </li>
          <li>
            <a href="#">
              <i class="bx bx-cog"></i>
              <span class="link_name">Configurações</span>
            </a>
            <span class="tooltip">Configurações</span>
          </li>
          <li class="profile">
            <div class="profile_details">
              <!-- <img src="profile.jpeg" alt="profile image"> -->
              <div class="profile_content">
                <div class="name">----</div>
                <div class="designation">----</div>
              </div>
            </div>
           <li><a href="{{route('admin.logout')}}">Logout</a></li>
        </ul>
      </div>

<script src="/js/sidebar.js"></script>
</body>
</html>
