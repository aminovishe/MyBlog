<?php require_once 'lib/c_footerRandomPosts.php' ?>
<div class="row">
    <div class="col-12">
        <div class="show-widget">
            <div class="div-title-widget d-flex flex-row justify-content-between align-items-center">
                <p class="m-0 widget-title d-inline-block">RANDOM POSTS</p>
            </div>
            <div class="div-content-widget">
                <div class="row">
                    <?php foreach ($TabRandPosts as $key => $value) { ?>
                        <div class="col-4">
                            <img class="w-100" height="200" src="<?= $value['image'] ?>" alt="">
                            <a href="#"><h4><?= $value['title'] ?></h4></a>
                            <p><strong><?php echo $value['firstName'] . ' ' . $value['lastName']; ?></strong> - <span
                                        class="badge badge-dark"><?= date('d-m-Y h:i:s', strtotime($value['creationTimestamp'])); ?></span>
                            </p>
                            <p class="text-justify"><?= $value['highlight'] ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row text-center footer-copy d-flex flex-column justify-content-center align-items-center">
    <div>CopyRight &copy; By Mohamed Amin HADRICH</div>
</div>