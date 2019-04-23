<?php session_start();
if (isset($_SESSION['connect'])){
    header('Location: admin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - AmiBlog</title>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="author" content="Mohamed Amin Hadrich">
    <meta name="description" content="this is a advance cms system developed with udemy">
    <link rel="shortcut icon" href="../pics/logo.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato|Lobster|ZCOOL+XiaoWei" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap 3.3.2 -->
    <link href="style/bootstrap.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="style/AdminLTE.css" rel="stylesheet" type="text/css"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="style/skin-blue.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="style/styleAdmin.css">
</head>
<body class="login-page">
<div class="container-fluid">
    <div class="row big-login">
        <div style="height: 100vh" class="col-lg-6">
            <img src="img/logo.svg" alt="">
        </div>
        <div style="height: 100vh" class="col-lg-6 login-col">
            <div>
                <div class="login-logo">
                    <a style="font-family: 'Lobster', cursive;letter-spacing: 3px" href="admin.php"><b style="color:#9E2121;font-size: 50px;">A</b>mi<b style="color:#9E2121;font-size: 50px;">B</b>log
                    </a>
                </div><!-- /.login-logo -->
                <div class="login-box-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <form action="lib/c_startSession.php" method="post">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="email" placeholder="Email"/>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password" placeholder="Password"/>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-8">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                            </div><!-- /.col -->
                        </div>
                    </form>
                    <div style="text-align: left"><a href="#">I forgot my password</a></div>
                    <?php if (isset($_GET['error'])) { ?>
                        <div style="text-align: left;color: red;">Your email or password is incorrect. <b>Please try
                                again or <a href="#">click here</a></b></div>
                    <?php } ?>
                    <?php if (isset($_GET['empty'])) { ?>
                        <div style="text-align: left;color: red;">Invalid fields. <b>Please try again</b></div>
                    <?php } ?>
                </div><!-- /.login-box-body -->
            </div><!-- /.login-box -->
        </div>
    </div>
</div>

<!-- jQuery 2.1.3 -->
<script src="js/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>