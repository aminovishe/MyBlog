<div class="col-6 m-0 pr-2">
    <div class="show-widget">
        <div class="div-title-widget d-flex flex-row justify-content-between align-items-center">
            <p class="m-0 widget-title d-inline-block">MUSIC</p>
            <a href="allPosts.php?idLabel=2">View all <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="div-content-widget">
            <div class="row">

                <div class="col-12">
                    <img height="200" class="w-100" src="<?= $showLabelsPostsMusic[0]['image'] ?>">
                    <a href="onePost.php?id=<?= $showLabelsPostsMusic[0]['id'] ?>"><h4><?= $showLabelsPostsMusic[0]['title'] ?></h4></a>
                    <p>
                        <strong><?php echo $showLabelsPostsMusic[0]['firstName'] . ' ' . $showLabelsPostsMusic[0]['lastName']; ?></strong>
                        -
                        <span class="badge badge-dark"><?= date('d-m-Y h:i:s a', strtotime($showLabelsPostsMusic[0]['creationTimestamp'])); ?></span>
                    </p>
                    <p class="text-justify"><?= $showLabelsPostsMusic[0]['highlight'] ?></p>
                </div>

                <?php for ($i = 1; $i < 3; $i++) { ?>
                    <div class="col-12 d-flex flex-row justify-content-start align-items-start mt-2">
                        <div class="w-35"
                             style="background: url('<?= $showLabelsPostsMusic[$i]['image'] ?>') center no-repeat;height: 100px;background-size: cover"></div>
                        <div class="w-65 ml-2 text-left">
                            <span><a href="onePost.php?id=<?= $showLabelsPostsMusic[$i]['id'] ?>"><?= $showLabelsPostsMusic[$i]['title'] ?></a><br><span
                                        class="badge badge-dark"><?= date('d-m-Y h:i:s a', strtotime($showLabelsPostsMusic[$i]['creationTimestamp'])); ?></span></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>