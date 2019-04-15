<div class="col-6 m-0 pl-2">
    <div class="show-widget">
        <div class="div-title-widget d-flex flex-row justify-content-between align-items-center">
            <p class="m-0 widget-title d-inline-block">SPORT</p>
            <a class="view-all" href="allPosts.php?idLabel=4">View all <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="div-content-widget">
            <div class="row">
                <div class="col-12">
                    <div class="w-100 image"
                         style="background: url('admin/img/upload_img/<?= $showLabelsPostsSport[0]["image"] ?>') center no-repeat;height: 200px;background-size: cover"></div>
                    <a href="onePost.php?id=<?= $showLabelsPostsSport[0]['id'] ?>"><h4><?= $showLabelsPostsSport[0]['title'] ?></h4></a>
                    <p>
                        <strong><?php echo $showLabelsPostsSport[0]['firstName'] . ' ' . $showLabelsPostsSport[0]['lastName']; ?></strong><br>
                        <small class="small">
                            <span class="badge badge-dark">Published in : <?= $showLabelsPostsSport[0]['creationTimestamp'] ?></span>
                            <?php
                            if (!is_null($showLabelsPostsSport[0]['updateTimestamp'])) {
                                ?> | <span class="badge badge-info">Updated in
                                : <?= $showLabelsPostsSport[0]['updateTimestamp'] ?></span><?php
                            }
                            ?>
                        </small>
                    </p>
                    <p class="text-justify"><?= $showLabelsPostsSport[0]['highlight'] ?></p>
                </div>

                <?php for ($i = 1; $i < count($showLabelsPostsSport); $i++) { ?>
                    <div class="col-12 d-flex flex-row justify-content-start align-items-start mt-2">
                        <div class="w-35 image"
                             style="background: url('admin/img/upload_img/<?= $showLabelsPostsSport[$i]['image'] ?>') center no-repeat;height: 100px;background-size: cover"></div>
                        <div class="w-65 ml-2 text-left">
                            <span><a href="onePost.php?id=<?= $showLabelsPostsSport[$i]['id'] ?>"><?= $showLabelsPostsSport[$i]['title'] ?></a><br>
                               <small class="small">
                        <span class="badge badge-dark">Published in : <?= $showLabelsPostsSport[$i]['creationTimestamp'] ?></span>
                                   <?php
                                   if (!is_null($showLabelsPostsSport[$i]['updateTimestamp'])) {
                                       ?><br><span class="badge badge-info">Updated in
                                       : <?= $showLabelsPostsSport[$i]['updateTimestamp'] ?></span><?php
                                   }
                                   ?>
                    </small>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>