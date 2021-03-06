<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de Interesses | Atendti</title>
    <link rel="stylesheet" href="../styles/header/header.css">
    <link rel="stylesheet" href="../styles/interest/interest.css">
    <link rel="stylesheet" href="../styles/header/header-index.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    html,body {
        width: 100%;
        height: 100vh;
    }
</style>
<body>
    <header class="menu_container">
          <img src="../img/menu.svg" alt="Menu" class="header_menu">
          <img src="../img/logo-mobile.png" alt="logomarca" class="header_logo">
  
          <nav class="header_links">
              <a href="index.html">Home</a>
              <a href="quem-somos.html">Quem somos?</a>
              <a href="interesses.php">Produtos</a>
              <a href="nossos-servicos.html">Serviços</a>
              <a href="#">Entre em contato</a>
              <a href="#">Help Desk</a>
          </nav>
  
          <section class="header_login">
              <span class="login">Entrar</span>
              <button class="register">
                  Se registre Agora
              </button>
          </section>
      </header>

    <main class="interest-wrapper">
        <img class="background-image-interest" src="../img/programming.png" alt="">
        <div class="interest-container">
            
            <div class="interest-title-container">
                <h1 class="interest-title">Qual área você têm interesse?</h1>              
            </div>

            <div class="interest-boxes">
                <a href="produtos.php?interesse=l">
                    <div class="interest-box">
                        <img src="../img/logistica.png" alt="Logística">
                        <p class="interest-description">Logística</p>
                    </div>
                </a>
                
                <a href="produtos.php?interesse=m">
                    <div class="interest-box">
                        <img src="../img/manufatura.png" alt="Manufatura">
                        <p class="interest-description">Manufatura</p>
                    </div>
                </a>

                <a href="produtos.php?interesse=d">
                    <div class="interest-box">
                        <img src="../img/distribuicao.png" alt="Distribuição">
                        <p class="interest-description">Distribuição</p>
                    </div>
                </a>

                <a href="produtos.php?interesse=p">
                    <div class="interest-box">
                        <img src="../img/customer-service.png" alt="Prestadores de Serviços">
                        <p class="interest-description">Prestadores de Serviços</p>
                    </div>
                </a>

                <a href="produtos.php?interesse=f">
                    <div class="interest-box">
                        <img src="../img/financeiro.png" alt="Financeiro">
                        <p class="interest-description">Financeiro</p>
                    </div>
                </a>
            
                <a href="produtos.php?interesse=v">
                    <div class="interest-box">
                        <img src="../img/varejo.png" alt="Varejo">
                        <p class="interest-description">Varejo</p>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <script>

      const login = document.querySelector('.login')
      login.addEventListener('click',()=>{
        window.location.href = 'login.html'
      })

      const register = document.querySelector('.register')
      register.addEventListener('click',()=>{
        window.location.href = 'register.html'
      })

  </script>
</body>
</html>