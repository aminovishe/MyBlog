<?php require_once 'lib/c_showComments.php' ?>
<?php require_once 'lib/c_nbrCommentsContacts.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Mohamed Amin Hadrich">
    <meta name="description" content="this is a advance cms system developed with udemy">
    <link rel="shortcut icon" href="../pics/logo.ico" type="image/x-icon">
    <title>Manage comments - AmiBlog</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|ZCOOL+XiaoWei" rel="stylesheet">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- jQuery -->
    <script src="js/jQuery-2.1.3.min.js"></script>
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
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i>
                        <span>Manage posts</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu" style="display: block;">
                        <li><a href="showPostsAdmin.php"><i class="far fa-circle fa-sm"></i> Show all posts</a>
                        </li>
                        <li><a href="addPostAdmin.php"><i class="far fa-circle fa-sm"></i> Add a post</a>
                        </li>
                        <li><a href="restoreDeletePost.php"><i class="far fa-circle fa-sm"></i> Restore/Delete a post</a></li>
                    </ul>
                </li>
                <li class="active">
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
                <small>Manage comments</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="showComments.php">Manage comments</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">All comments</h3>
                </div>
                <div class="box-body">
                    <table id="table_id" class="display">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Comment date</th>
                            <th>Comment</th>
                            <th>Post's title</th>
                            <th>Category</th>
                            <th>Delete comment</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($allComments as $key => $value) { ?>
                            <tr>
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['creationTimestamp'] ?></td>
                                <td style="width: 30%"><?= $value['contents'] ?></td>
                                <td style="width: 30%">
                                    <a href="showOnePostAdmin.php?id=<?= $value['post_Id'] ?>"><?= $value['title'] ?></a><br>
                                    <a class="btn btn-link btn-sm" href="../onePost.php?id=<?= $value['post_Id'] ?>" target="_blank"><i class="fas fa-arrow-right"></i> Show on blog</a>
                                </td>
                                <td><a href="../allPosts.php?idLabel=<?= $value['category_Id'] ?>"><?=$value['name'] ?></a></td>
                                <td style="text-align: center">
                                    <a href="lib/c_deleteComment.php?id=<?= $value['id'] ?>" type="button" class="btn btn-danger">Delete</a>
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
        <strong>Copyright &copy; 2019 <a href="http://almsaeedstudio.com">Amin HADRICH</a>.</strong> All rights
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