<?php session_start();
if (!isset($_SESSION['connect'])){
    header('Location: 404.phtml');
}
?>
<?php require_once 'lib/c_allPostsAdmin.php' ?>
<?php require_once 'lib/c_nbrComContDemUsers.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="author" content="Mohamed Amin Hadrich">
    <meta name="description" content="this is my first blog. AmiBlog is built with php / mysql ">
    <link rel="shortcut icon" href="../pics/logo.ico" type="image/x-icon">
    <title>All posts - AmiBlog</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|ZCOOL+XiaoWei" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- jQuery-->
    <script src="js/jQuery-2.1.3.min.js"></script>
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

    <!--Start Text editor-->
    <!--    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>-->
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=mbxkeisggyw9bpyz0i50i1xf33vgdutpx2dgft2irtft6wg9"></script>
    <script>tinymce.init({selector: '.textEditor'});</script>
    <!--End Text editor-->

    <!--Start datatables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <!--End datatables-->

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
                            <img src="img/user_img/<?=$_SESSION['image']?>" class="user-image" alt="User Image"/>
                            <span class="hidden-xs"><?php echo $_SESSION['firstName'].' '.$_SESSION['lastName']; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="img/user_img/<?=$_SESSION['image']?>" class="img-circle" alt="User Image"/>
                                <p>
                                    <?php echo $_SESSION['firstName'].' '.$_SESSION['lastName']; ?>
                                    <small><b><?php echo $_SESSION['admin'] == 1 ? "Administrator" : "Author"; ?></b></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="userProfile.php?id=<?= $_SESSION['id'] ?>" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="lib/c_logout.php" class="btn btn-default btn-flat">Sign out</a>
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
                    <img src="img/user_img/<?=$_SESSION['image']?>" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p><?php echo $_SESSION['firstName'].' '.$_SESSION['lastName']; ?></p>

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
                        <li class="treeview-menu-item-active"><a href="showPostsAdmin.php"><i
                                        class="fa fa-circle-o"></i> <?php if (isset($_GET['idLabel'])) {
                                    echo $allPosts[0]['name'] . " post's";
                                } else {
                                    echo 'Show all posts';
                                } ?></a>
                        </li>
                        <li><a href="addPostAdmin.php"><i class="fa fa-circle-o"></i> Add a post</a>
                        </li>
                        <li><a href="restoreDeletePost.php"><i class="fa fa-circle-o"></i> Restore/Delete a post</a></li>
                    </ul>
                </li>
                <li>
                    <a href="showComments.php">
                        <i class="fas fa-eraser"></i> <span>&nbsp;&nbsp;Manage comments</span>
                        <small class="label pull-right bg-green"><?=$numberComments['nbrComments']?></small>
                    </a>
                </li>
                <li>
                    <a href="showContactMessageAdmin.php">
                        <i class="fas fa-envelope"></i> <span>&nbsp;&nbsp;Visitor's message</span>
                        <small class="label pull-right bg-green"><?=$numberContact['nbrContact']?></small>
                    </a>
                </li>
                <?php if ($_SESSION['admin']==1) { ?>
                <li>
                    <a href="showDemandRegister.php">
                        <i class="far fa-plus-square"></i> <span>&nbsp;&nbsp;Visitor's demand</span>
                        <small class="label pull-right bg-green"><?= $numberDemande['nbrDemand'] ?></small>
                    </a>
                </li>
                <li>
                    <a href="showUsersProfile.php">
                        <i class="fas fa-users"></i> <span>&nbsp;&nbsp;User's profile</span>
                        <small class="label pull-right bg-green"><?= $numberUser['nbrUser'] ?></small>
                    </a>
                </li>
                <?php } ?>
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
                    <h3 class="box-title"><?php if (isset($_GET['idLabel'])) {
                            echo $allPosts[0]['name'];
                        } else {
                            echo 'All posts';
                        } ?></h3>
                </div>

                <div class="box-body">
                    <table id="table_id" class="display">
                        <thead>
                        <tr>
                            <th>Publication Date</th>
                            <th>Category</th>
                            <th>Cover</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Manage Post</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($allPosts as $key => $value) { ?>
                        <tr>
                            <td><span class="badge badge-dark"><?= $value['creationTimestamp'] ?></span></td>
                            <td><?= $value['name'] ?></td>
                            <td><div style="background: url('img/upload_img/<?= $value['image'] ?>') center no-repeat;background-size: cover;height: 75px;width: 75px;"></div></td>
                            <td><a href="showOnePostAdmin.php?id=<?= $value['id'] ?>"><?= $value['title'] ?></a></td>
                            <td><a href="#"><?php echo $value['firstName'] . ' ' . $value['lastName']; ?></a></td>
                            <td style="text-align: center">
                                <a href="editPostAdmin.php?id=<?= $value['id'] ?>" type="button" class="btn btn-success">Edit</a>
                                <a href="lib/c_trashPost.php?id=<?= $value['id'] ?>" type="button" class="btn btn-warning">Trash</a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
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
        <strong>Copyright &copy; 2019 <a href="https://www.linkedin.com/in/hadrich-mohamedamin/">Amin HADRICH</a>.</strong> All rights
        reserved.
    </footer>
</div><!-- ./wrapper -->
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>
</body>
</html>