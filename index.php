<?php include('valida_sessao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e08ed7ffaa.js" crossorigin="anonymous"></script>
    <title>HOME</title>
</head>
<body>
<!-- Área de navegação da página, apresenta a logo (criação pessoal :] e links para acessar outras áreas) -->
    <nav>
        <div class="red">
            <!-- Logo -->
            <div class="logo"><img src="Assets/LOGO.png" height="70px" alt="Logo da Marca"></div>
            <!-- Links de acesso -->
            <a href="index.php">HOME</a>
            <a href="1stTrip.html">1st. Trip</a>
            <a href="2ndTrip.html">2nd. Trip</a>
            <a href="friends.html">Friends</a>
            <a href="personal.html">Personal</a>
            <a href="logout.php">Logout</a>
        </div>
    </nav>

    <div class="banner">
        <img src="Assets/banner.png" width="85%" alt="Banner de introdução">
    </div>
   
    <aside>
        <div class="text">
            <h3>ABOUT:</h3>
            <p>In this page, I'm gonna show you things about my vacation!</p>
            <p>I'll show some of my trips to different beaches, and some fun time I had with my friends! And of course, show some things I did while I was alone. Hope you enjoy it!</p>
        </div>
        <div class="sidestar"><img src="Assets/imagem_2025-01-27_162144141-removebg-preview.png" height="120px" alt="Estrelas"></div>
    </aside>

    <!-- Área dos conteúdos principais (MAIN contents) da página -->
    <main>
        <!-- Div que engloba o todo -->
        <div class="container">
            <!-- Div's menores para a alteração personalizada -->
            <div class="card">
            <a href="1stTrip.html"><img src="Assets/1st.png" width="340px" alt="Imagem de número 1"></a>
            </div>
            <div class="card">
            <a href="2ndTrip.html"><img src="Assets/2nd.png" width="340px" alt="Imagem de número 2"></a>
            </div>
            <div class="card">
            <a href="friends.html"><img src="Assets/3rd.png" width="340px" alt="Imagem de número 3"></a>
            </div>
        </div>
        <div class="card4">
            <a href="personal.html"><img src="Assets/4th.png" width="85%" alt="Imagem de número 4"></a>
        </div>
    </main>
    
     <div class="redfoot">
         <footer>
            <p>@s.tefany.lino</p>
             </footer>
     </div>
</body>
</html>