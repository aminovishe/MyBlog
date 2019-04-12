<div class="show-widget">
    <div class="div-title-widget d-flex flex-row justify-content-between align-items-center">
        <p class="m-0 widget-title d-inline-block">BUSINESS</p>
        <a href="#">View all <i class="fas fa-chevron-right"></i></a>
    </div>
    <div class="div-content-widget">
        <div class="row">
            <div class="col-6 d-flex flex-column justify-content-center align-items-start">
                <img class="w-100" src="<?= $showLabelsPostsBusiness[0]['image'] ?>">
                <a href="onePost.php?id=<?= $showLabelsPostsBusiness[0]['id'] ?>"><h4><?= $showLabelsPostsBusiness[0]['title'] ?></h4></a>
                <p>
                    <strong><?php echo $showLabelsPostsBusiness[0]['firstName'] . ' ' . $showLabelsPostsBusiness[0]['lastName']; ?></strong>
                    -
                    <span class="badge badge-dark"><?= date('d-m-Y h:i:s a', strtotime($showLabelsPostsBusiness[0]['creationTimestamp'])); ?></span>
                </p>
                <p class="text-justify"><?= $showLabelsPostsBusiness[0]['highlight'] ?></p>
            </div>
            <div class="col-6">
                <?php for ($i = 1; $i < 5; $i++) { ?>
                    <div class="col-12 d-flex flex-row justify-content-start align-items-start mt-2">
                        <img class="w-25" src="<?= $showLabelsPostsBusiness[$i]['image'] ?>" alt="">
                        <div class="ml-2 text-left">
                            <span><a href="onePost.php?id=<?= $showLabelsPostsBusiness[$i]['id'] ?>"><?= $showLabelsPostsBusiness[$i]['title'] ?></a><br><span
                                        class="badge badge-dark"><?= date('d-m-Y h:i:s a', strtotime($showLabelsPostsBusiness[$i]['creationTimestamp'])); ?></span></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>