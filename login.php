<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Controltech</title>

    <!--Stylo-->
    <link rel="stylesheet" href="./styles/login.css">
    <link rel="icon" href="./assets/fotos/iconp.png">

</head>
<body>

    <form action="logar.php" method="POST">

        
        <div class="main-login">
            <div    class="left-login">
                <h1>Solicite seu atendimento</h1>
                <img class="controltech" src="./assets/fotos/button-style-animate.svg" alt="">
            </div>
    
            <div class="right-login">
                <div class="card-login">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="user" placeholder="Usuário">
    
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>

                <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') : ?>
                    <div class="text-danger text-center">
                        <p class="invalid">Usuário ou senha inválido(s)</p>
                    </div>
                <?php endif; ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'):?>
                    <div class="text-danger text-center">
                        <p>login necessário!</p> 
                    </div>
                <?php endif; ?>

                    <button class="btn-login">Login</button>
                    
                </div>
            </div>
        </div>

    </form>

</body>
</html>