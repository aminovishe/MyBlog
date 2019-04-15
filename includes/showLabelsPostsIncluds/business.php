<div class="show-widget">
    <div class="div-title-widget d-flex flex-row justify-content-between align-items-center">
        <p class="m-0 widget-title d-inline-block">BUSINESS</p>
        <a class="view-all" href="allPosts.php?idLabel=1">View all <i class="fas fa-chevron-right"></i></a>
    </div>
    <div class="div-content-widget">
        <div class="row">
            <div class="col-6 d-flex flex-column justify-content-center align-items-start">
                <div class="w-100 image"
                     style="background: url('admin/img/upload_img/<?= $showLabelsPostsBusiness[0]["image"] ?>') center no-repeat;height: 250px;background-size: cover"></div>
                <a href="onePost.php?id=<?= $showLabelsPostsBusiness[0]['id'] ?>">
                    <h4><?= $showLabelsPostsBusiness[0]['title'] ?></h4></a>
                <p>
                    <strong><?php echo $showLabelsPostsBusiness[0]['firstName'] . ' ' . $showLabelsPostsBusiness[0]['lastName']; ?></strong><br>
                    <small class="small">
                        <span class="badge badge-dark">Published in : <?= $showLabelsPostsBusiness[0]['creationTimestamp'] ?></span>
                        <?php
                        if (!is_null($showLabelsPostsBusiness[0]['updateTimestamp'])) {
                            ?> | <span class="badge badge-info">Updated in
                            : <?= $showLabelsPostsBusiness[0]['updateTimestamp'] ?></span><?php
                        }
                        ?>
                    </small>
                </p>
                <p class="text-justify"><?= $showLabelsPostsBusiness[0]['highlight'] ?></p>
            </div>


            <div class="col-6">
                <?php for ($i = 1; $i < count($showLabelsPostsBusiness); $i++) { ?>
                    <div class="col-12 d-flex flex-row justify-content-start align-items-start mt-2">
                        <div class="w-35 image"
                             style="background: url('admin/img/upload_img/<?= $showLabelsPostsBusiness[$i]['image'] ?>') center no-repeat;height: 100px;background-size: cover"></div>
                        <div class="w-65 ml-2 text-left">
                            <span><a href="onePost.php?id=<?= $showLabelsPostsBusiness[$i]['id'] ?>"><?= $showLabelsPostsBusiness[$i]['title'] ?></a><br>
                    <small class="small">
                        <span class="badge badge-dark">Published in : <?= $showLabelsPostsBusiness[$i]['creationTimestamp'] ?></span>
                        <?php
                        if (!is_null($showLabelsPostsBusiness[$i]['updateTimestamp'])) {
                            ?><br><span class="badge badge-info">Updated in
                            : <?= $showLabelsPostsBusiness[$i]['updateTimestamp'] ?></span><?php
                        }
                        ?>
                    </small></span>
                        </div>
                    </div>
                <?php } ?>


            </div>


        </div>
    </div>
</div>