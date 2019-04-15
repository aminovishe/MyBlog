<?php
if(isset($_GET['demand'])){
    $demand="We thank you<br>We will contact you as soon as possible";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Mohamed Amin Hadrich">
    <meta name="description" content="this is a advance cms system developed with udemy">
    <link rel="shortcut icon" href="pics/logo.ico" type="image/x-icon">
    <title>AmiBlog</title>
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="style/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php require_once 'includes/header.php' ?>
<div class="container big-div mt-3 mb-3">
    <?php require_once 'includes/navbar.php' ?>
    <?php require_once 'includes/marqueeNews.php' ?>
    <?php if(isset($_GET['demand'])){ ?>
        <h3 class="text-center"><span class="badge badge-success text-center"><?=$demand?></span></h3>
    <?php } ?>
    <?php require_once 'includes/oneLabelPost.php' ?>
    <div class="row row-posts-widgets">
        <?php require_once 'includes/showLabelsPosts.php' ?>
        <?php require_once 'includes/rightSideBar.php' ?>
    </div>
</div>
<div class="container footer">
    <?php require_once 'includes/footer.php' ?>
</div>
<a id="btn-to-top"><i class="far fa-arrow-alt-circle-up"></i></a>
<script src="js/jquery-3.3.0.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script>
</body>
</html>