<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link rel="stylesheet" href="../../assets/css/comum.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../../assets/css/icofont.min.css">
    <link rel="stylesheet" href="../../assets/css/login.css">

    <title>R-Ponto</title>
</head>
    <script>
        let str = 'ROGER'
        console.log(str)
        setTimeout(() => {
            document.getElementById('titulo').innerHTML = str
            // alert(str);
        }, 5000)

    </script>
<body>
    <form class="form-login" action="#" method="POST" name="forma">
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-user-suited mr-2"></i>
                <span class="font-weight-bold" id="titulo">R</span>
                <span class="font-weight-light">-Ponto</span>
            </div>
            
            
            <div class="card-body">
                <?php include(TEMPLATE_PATH . '/messages.php') ?>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" id="email" name="email"
                        class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" placeholder="Digite seu email"
                        autofocus
                        value="<?= $email ?>"
                    >
                    <div class="invalid-feedback">
                        <?= $errors['email'] ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Senha </label>
                    <input type="password" id="password" name="password"
                        class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>" placeholder="Digite sua senha"   
                    >
                    <div class="invalid-feedback">
                        <?= $errors['password'] ?>
                    </div>
                </div>
                
            </div>

            <div class="card-footer">
                <button class="btn btn-lg btn-primary">Entrar</button>
            </div>
        </div>
    </form>
    
</body>

</html>