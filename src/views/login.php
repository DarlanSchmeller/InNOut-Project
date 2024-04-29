<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>In n' Out</title>
</head>
<body>
    <form action="#" method="post" class='form-login'>
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-travelling mr-1"></i>

                <span class="font-weight-light">In</span>
                <span class="font-weight-bold mx-2">N'</span>
                <span class="font-weight-light">Out</span>

                <i class="icofont-runner-alt-1 ml-2"></i>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="email">E-mail</label> 
                    <input type="email" id="email" name="email"
                    class="form-control" value="<?= $_POST['email'] ?>" placeholder="Informe o e-mail" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label> 
                    <input type="password" id="password" name="password"
                    class="form-control" placeholder="Informe a senha" autofocus>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-lg btn-primary">Entrar</button>
            </div>
        </div>
    </form>
</body>
</html>