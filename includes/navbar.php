<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mr-2">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link" href="allPosts.php?page=0">All Posts</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <?php if (isset($_SESSION['connect'])) { ?>
                <li class="nav-item mr-2">
                    <a class="nav-link" href="admin/admin.php" target="_blank">Admin panel</a>
                </li>
            <?php } ?>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
            <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>