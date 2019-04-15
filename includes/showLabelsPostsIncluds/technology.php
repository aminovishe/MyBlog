<div class="show-widget">
    <div class="div-title-widget d-flex flex-row justify-content-between align-items-center">
        <p class="m-0 widget-title d-inline-block">Technology</p>
        <a class="view-all" href="allPosts.php?idLabel=5">View all <i class="fas fa-chevron-right"></i></a>
    </div>
    <div class="div-content-widget">
        <div class="row">
            <?php foreach ($showLabelsPostsTechnology as $key => $value) { ?>
                <div class="col-6">
                    <div class="w-100 image"
                         style="background: url('admin/img/upload_img/<?= $value["image"] ?>') center no-repeat;height: 250px;background-size: cover"></div>
                    <a href="onePost.php?id=<?= $value['id'] ?>"><h4><?= $value['title'] ?></h4></a>
                    <p><strong><?php echo $value['firstName'] . ' ' . $value['lastName']; ?></strong><br>
                        <small class="small">
                            <span class="badge badge-dark">Published in : <?= $value['creationTimestamp'] ?></span>
                            <?php
                            if (!is_null($value['updateTimestamp'])) {
                                ?> | <span class="badge badge-info">Updated in
                                : <?= $value['updateTimestamp'] ?></span><?php
                            }
                            ?>
                        </small>
                    </p>
                    <p class="text-justify"><?= $value['highlight'] ?></p>
                </div>
            <?php } ?>

        </div>
    </div>
</div>