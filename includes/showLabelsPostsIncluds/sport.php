<div class="col-6 m-0 pl-2">
    <div class="show-widget">
        <div class="div-title-widget d-flex flex-row justify-content-between align-items-center">
            <p class="m-0 widget-title d-inline-block">SPORT</p>
            <a href="#">View all <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="div-content-widget">
            <div class="row">


                <div class="col-12">
                    <img height="200" class="w-100" src="<?= $showLabelsPostsSport[0]['image'] ?>" alt="">
                    <a href="onePost.php?id=<?= $showLabelsPostsSport[0]['id'] ?>"><h4><?= $showLabelsPostsSport[0]['title'] ?></h4></a>
                    <p>
                        <strong><?php echo $showLabelsPostsSport[0]['firstName'] . ' ' . $showLabelsPostsSport[0]['lastName']; ?></strong>
                        -
                        <span class="badge badge-dark"><?= date('d-m-Y h:i:s a', strtotime($showLabelsPostsSport[0]['creationTimestamp'])); ?></span>
                    </p>
                    <p class="text-justify"><?= $showLabelsPostsSport[0]['highlight'] ?></p>
                </div>

                <?php for ($i = 1; $i < 3; $i++) { ?>
                    <div class="col-12 d-flex flex-row justify-content-start align-items-start mt-2">
                        <img class="w-25" src="<?= $showLabelsPostsSport[$i]['image']?>" alt="">
                        <div class="ml-2 text-left">
                            <span><a href="onePost.php?id=<?= $showLabelsPostsSport[$i]['id'] ?>"><?= $showLabelsPostsSport[$i]['title'] ?></a><br><span
                                        class="badge badge-dark"><?= date('d-m-Y h:i:s a', strtotime($showLabelsPostsSport[$i]['creationTimestamp'])); ?></span></span>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>