<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Loging_admin</title>

    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/fonts/ionicons.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/Login-Form-blue-Gradient-Blue-gradient-login-form.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/Login-Form-blue-Gradient.css") ?>">
</head>

<body>
    <section>
        <div class="lgp-hd">
            <h2><strong>WELCOME TO YOUR REGISTRE PAGE</strong><br></h2>
            <h5><strong>LOGIN TO SEE YOUR PRINTING INFO</strong><br></h5>
        </div>
        <div class="container login-cont">
            <div class="row">
                <div class="col-10 col-sm-6 col-md-4 col-lg-4 offset-1 offset-sm-3 offset-md-4 offset-lg-4 login-col"><i class="icon ion-lock-combination"></i>
                    <form class="login-form" method="post" action="<?php echo base_url('index.php/UserC/signup')?>">
						<div class="form-group mb-3"><input class="form-control form-control-lg lg-frc" type="text" name="nom" required="" placeholder="Nom"></div>
                        <div class="form-group mb-3"><input class="form-control form-control-lg lg-frc" type="email" name="mail" required="" placeholder="Mail"></div>
                        <div class="form-group mb-3"><input class="form-control form-control-lg lg-frc" type="password" name="mdp" required="" placeholder="Enter Password"></div>
                        
                        <div class="form-group mb-3"><button class="btn btn-light btn-lg login-btn" type="submit"><strong>Register</strong></button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js")?> "></script>
</body>

</html>