<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div .class="container" >
        <div class="container mt-5 text-info">
            <h1 class="text-center">creer un compte</h1>
        </div>
        <div class="container mt-5">
            <form method="POST" action="../controllers/security.php">

            <div class="form-group row">
                    <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nom" 
                        value="<?php echo !isset($_SESSION['array_error']['nom_error'])?$_POST['nom']:''; ?>"
                        >
                        <span class="text-danger">
                        <?php echo isset($_SESSION['array_error']['nom_error'])?$_SESSION['array_error']['nom_error']:''; ?>
                        </span>
                    </div>

                </div>

                <div class="form-group row">
                    <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="prenom" placeholder=""
                        value="<?php echo !isset($_SESSION['array_error']['prenom_error'])?$_POST['prenom']:''; ?>"
                        >
                        <span class="text-danger">
                        <?php echo isset($_SESSION['array_error']['prenom_error'])?$_SESSION['array_error']['prenom_error']:''; ?>
                        </span>
                    </div>

                </div>

                <div class="form-group row">
                    <label for="login" class="col-sm-2 col-form-label">Login</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="login" 
                        value="<?php echo !isset($_SESSION['array_login']['login_error'])?$_POST['login']:''; ?>"
                        >
                        <span class="text-danger">
                        <?php echo isset($_SESSION['array_error']['login_error'])?$_SESSION['array_error']['login_error']:''; ?>
                        </span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="password"  placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password2" class="col-sm-2 col-form-label">Confirmer Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="password2"  placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="role"  placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-sm-0 col-sm-6">
                        <button type="submit" class="btn btn-primary" value="register" name="submit_button">Se Connecter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
