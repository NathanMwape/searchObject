

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <title>Connexion</title>
</head>
<body >
    <?php include 'Header.php' ?>
    <div class="d-flex
            justify-content-center align-items-center vh-90">
            <div class="w-400 p-5 shadow rounded">
                <form action="#" method="post">
                    <div class='d-flex justify-content-center align-items-center flex-column'> 
                        <i class="fa fa-user fa-5x"></i>
                        <h3 class="h3 mb-3 fw-normal">Connexion  </h3>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Utilisateur">
                        <label class="form-label">Utilisateur</label>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                        <label class="form-label">Mot de passe</label>
                    </div>
                    <button type="submit" class="btn-lg btn-primary justify-content-center"> <i class="fa fa-check"></i> Connecter</button>
                    <a href="#">S'enregistre</a>
                </form><br>
                <p class="mt-5 mb-3 text-muted text-center">&copy; copy right 2022</p>
            </div>
    </div>        
    
    <?php include 'footer.php' ?>
</body>
</html>
