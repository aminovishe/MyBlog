<?php require_once 'lib/c_onePostAdmin.php' ?>
<?php require_once 'lib/c_selectUsers.php' ?>
<?php require_once 'lib/c_nbrCommentsContacts.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Mohamed Amin Hadrich">
    <meta name="description" content="this is a advance cms system developed with udemy">
    <link rel="shortcut icon" href="../pics/logo.ico" type="image/x-icon">
    <title>Edit post - AmiBlog</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|ZCOOL+XiaoWei" rel="stylesheet">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="style/bootstrap.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css"/>

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="style/skin-blue.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="style/styleAdmin.css">
    <!-- Theme style -->
    <link href="style/AdminLTE.css" rel="stylesheet" type="text/css"/>

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
                        <li><a href="showPostsAdmin.php"><i class="far fa-circle fa-sm"></i> Show all posts</a>
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
                <small>Edit a post</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Manage posts</a></li>
                <li class="active">Edit a post</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $tabOnePost['title'] ?></h3>
                </div>

                <div class="box-body">
                    <form action="lib/c_editPostAdmin.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="<?= $tabOnePost['id'] ?>" name="id">
                        <div class="form-group">
                            <label for="postTitle">Title :</label>
                            <input type="text" class="form-control" id="postTitle" name="title"
                                   placeholder="Your post's title here" value="<?= $tabOnePost['title'] ?>">
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label for="authorSelect">Author :</label>
                                <select class="form-control" id="authorSelect" name="author">
                                    <?php foreach ($Users as $key => $value) { ?>
                                        <option value="<?=$value['id']?>" <?php if ($value['id']==$tabOnePost['author_Id']){echo 'selected';} ?>><?php echo $value['firstName'].' '.$value['lastName']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-lg-2">
                                <label for="categorySelect">Category :</label>
                                <select class="form-control" id="categorySelect" name="category">
                                    <option value="1" <?php if ($tabOnePost['category_Id']==1){echo 'selected';} ?>>Business</option>
                                    <option value="2" <?php if ($tabOnePost['category_Id']==2){echo 'selected';} ?>>Music</option>
                                    <option value="3" <?php if ($tabOnePost['category_Id']==3){echo 'selected';} ?>>Nature</option>
                                    <option value="4" <?php if ($tabOnePost['category_Id']==4){echo 'selected';} ?>>Sport</option>
                                    <option value="5" <?php if ($tabOnePost['category_Id']==5){echo 'selected';} ?>>Technology</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="imageUrl">Cover :</label>
                                <div class="image"
                                     style="background: url('img/upload_img/<?= $tabOnePost['image'] ?>') center no-repeat;height: 250px;width:25%;background-size: cover"></div>
                            </div>
                            <div class="form-group">
                                <label>Change the post's cover ?</label><br>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="changeImage1" name="changeImage"
                                           class="custom-control-input"
                                           value="Yes">
                                    <label class="custom-control-label" for="customRadio1">Yes</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="changeImage2" name="changeImage"
                                           class="custom-control-input"
                                           value="No" checked>
                                    <label class="custom-control-label" for="customRadio2">No</label>
                                </div>
                            </div>
                            <input type="file" class="form-control-file hide" id="imageUrlEdit" name="image"
                                   value="<?= $tabOnePost['image'] ?>"
                                   placeholder="https://www.website.com/image.jpg">
                        </div>
                        <div class="form-group">
                            <div class="verticalWordTextarea">
                                <div class="verticalWord w-10" style="background-color: #3C8DBC;"><p>HIGHLIGHT</p></div>
                                <div class="w-90 highlightEditor"><textarea rows="15" name="highlight"
                                                                            class="textEditor"><?= $tabOnePost['highlight'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="verticalWordTextarea">
                                <div class="verticalWord w-10" style="background-color: #2B3B92;"><p>CONTENT</p></div>
                                <div class="w-90 contentEditor"><textarea rows="25" name="contents"
                                                                          class="textEditor"><?= $tabOnePost['contents'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

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
<script src="../js/jquery-3.3.0.js"></script>
<script src="../js/script.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>
</body>
</html>