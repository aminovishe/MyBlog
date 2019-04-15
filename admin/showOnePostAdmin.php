<?php require_once 'lib/c_onePostAdmin.php' ?>
<?php require_once 'lib/c_nbrCommentsContacts.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Mohamed Amin Hadrich">
    <meta name="description" content="this is a advance cms system developed with udemy">
    <link rel="shortcut icon" href="../pics/logo.ico" type="image/x-icon">
    <title>Add post - AmiBlog</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|ZCOOL+XiaoWei" rel="stylesheet">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="style/bootstrap.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="style/AdminLTE.css" rel="stylesheet" type="text/css"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="style/skin-blue.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="style/styleAdmin.css">


    <!--Start Text editor-->
    <!--    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>-->
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=mbxkeisggyw9bpyz0i50i1xf33vgdutpx2dgft2irtft6wg9"></script>
    <script>tinymce.init({selector: '.textEditor'});</script>
    <!--End Text editor-->

</head>
<body class="skin-blue">
<div class="wrapper">

    <header class="main-header">
        <a href="admin.php" class="logo"><img style="height: 40px; " src="img/logo_admin.png"
                                              alt=""></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../index.php" class="logo" target="_blank"><img style="height: 40px;" src="img/logo_blog.png"
                                                                                 alt=""></a>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/amin.jpg" class="user-image" alt="User Image"/>
                            <span class="hidden-xs">Amin HADRICH</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="img/amin.jpg" class="img-circle" alt="User Image"/>
                                <p>
                                    Amin HADRICH - Web Developer
                                    <small>Co-founder of <b>AmiBlog</b></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- ========================================================================= -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="img/amin.jpg" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p>Amin HADRICH</p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">AmiBlog |
                    <small>Admin Panel</small>
                </li>
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-edit"></i>
                        <span>Manage posts</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu menu-open" style="display: block;">
                        <li class="treeview-menu-item-active"><a href="showPostsAdmin.php"><i class="far fa-circle fa-sm"></i> <?php if (isset($_GET['idLabel'])) {
                                    echo $allPosts[0]['name'] . " post's";
                                } else {
                                    echo 'Show all posts';
                                } ?></a>
                        </li>
                        <li><a href="addPostAdmin.php"><i class="far fa-circle fa-sm"></i> Add a post</a>
                        </li>
                        <li><a href="restoreDeletePost.php"><i class="far fa-circle fa-sm"></i> Restore/Delete a post</a></li>
                    </ul>
                </li>
                <li>
                    <a href="showComments.php">
                        <i class="fas fa-eraser"></i> <span>Manage comments</span>
                        <small class="label pull-right bg-green"><?=$numberComments['nbrComments']?></small>
                    </a>
                </li>
                <li>
                    <a href="showContactMessageAdmin.php">
                        <i class="fas fa-envelope"></i> <span>Visitor's message</span>
                        <small class="label pull-right bg-green"><?=$numberContact['nbrContact']?></small>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-users"></i> <span>User's profile</span>
                        <small class="label pull-right bg-green">5</small>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- ========================================================================= -->

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                AmiBlog |
                <small>Show all posts <?php if (isset($_GET['idLabel'])) { ?><span
                        class="label label-warning"><?= $allPosts[0]['name'] ?><?php } ?></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Manage posts</a></li>
                <li class="active"><?php if (isset($_GET['idLabel'])) {
                        echo $allPosts[0]['name'] . " post's";
                    } else {
                        echo 'Show all posts';
                    } ?></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $tabOnePost['name'] ?></h3>
                </div>
                <div class="box-body">
                        <div class="showOnePostAdmin">
                            <div class="row">
                                <div class="col-lg-3"
                                     style="height: 200px;background: url('../img/upload_img/<?= $tabOnePost['image'] ?>') center no-repeat;background-size: cover"></div>
                                <div class="col-lg-9">
                                    <h2><?= $tabOnePost['title'] ?></h2>
                                    <p><a href="#"><?php echo $tabOnePost['firstName'] . ' ' . $tabOnePost['lastName']; ?></a> |
                                        <span class="badge badge-dark"><?= $tabOnePost['creationTimestamp'] ?></span>
                                        <?php
                                        if (!is_null($tabOnePost['updateTimestamp']) ){
                                            ?><br><span class="label label-primary">Updated in : <?= $tabOnePost['updateTimestamp'] ?></span><?php
                                        }
                                        ?>
                                    </p>
                                    <h4><?= $tabOnePost['highlight'] ?></h4>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="editPostAdmin.php?id=<?= $tabOnePost['id'] ?>" type="button" class="btn btn-success">Edit</a>
                                        <?php
                                        if ($tabOnePost['trashed']==0){ ?>
                                            <a href="lib/c_trashPost.php?id=<?= $tabOnePost['id'] ?>" type="button" class="btn btn-warning">Trash</a>
                                        <?php } else { ?>
                                            <a href="lib/c_deletePost.php?id=<?= $tabOnePost['id'] ?>" type="button" class="btn btn-danger">Delete</a>
                                        <?php } ?>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <p style="font-size: 20px;line-height: 30px;margin: 20px;"><?= $tabOnePost['contents'] ?></p>
                            </div>
                        </div>
                </div><!-- /.box-body -->


                <!--                <div class="box-footer">-->
                <!--                    Footer-->
                <!--                </div><!-- /.box-footer-->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- ========================================================================= -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2019 <a href="http://almsaeedstudio.com">Amin HADRICH</a>.</strong> All rights
        reserved.
    </footer>
</div><!-- ./wrapper -->
<script src="js/jQuery-2.1.3.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>
</body>
</html>