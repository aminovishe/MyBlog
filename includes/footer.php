<?php
    require_once 'lib/c_randomPosts.php';
    $randomPosts = randomPosts(-1,3);
?>
<div class="row">
    <div class="col-12">
        <div class="show-widget">
            <div class="div-title-widget d-flex flex-row justify-content-between align-items-center">
                <p class="m-0 widget-title d-inline-block">RANDOM POSTS</p>
            </div>
            <div class="div-content-widget">
                <div class="row">
                    <?php foreach ($randomPosts as $key => $value) { ?>
                        <div class="col-4">
                            <div class="w-100 image"
                                 style="background: url('admin/img/upload_img/<?= $value["image"] ?>') center no-repeat;height: 250px;background-size: cover"></div>
                            <a href="onePost.php?id=<?= $value['id'] ?>"><h4><?= $value['title'] ?></h4></a>
                            <p><strong>Published by : <?php echo $value['firstName'] . ' ' . $value['lastName']; ?></strong><br>
                                <span class="badge badge-dark">Published in : <?= $value['creationTimestamp'] ?></span>
                                <?php
                                if (!is_null($value['updateTimestamp']) ){
                                    ?> <span class="badge badge-info">Updated in : <?= $value['updateTimestamp'] ?></span><?php
                                }
                                ?>
                            </p>
                            <!-- <p class="text-justify">--><?//= $value['highlight'] ?><!--</p>-->
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