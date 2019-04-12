<div class="show-widget">
    <div class="div-title-widget d-flex flex-row justify-content-between align-items-center">
        <p class="m-0 widget-title d-inline-block">Technology</p>
        <a href="#">View all <i class="fas fa-chevron-right"></i></a>
    </div>
    <div class="div-content-widget">
        <div class="row">

            <?php foreach ($showLabelsPostsTechnology as $key => $value) { ?>
                <div class="col-6">
                    <img height="200" class="w-100" src="<?= $value['image'] ?>" alt="">
                    <a href="onePost.php?id=<?= $value['id'] ?>"><h4><?= $value['title'] ?></h4></a>
                    <p><strong><?php echo $value['firstName'] . ' ' . $value['lastName']; ?></strong> - <span
                                class="badge badge-dark"><?= date('d-m-Y h:i:s a', strtotime($value['creationTimestamp'])); ?></span>
                    </p>
                    <p class="text-justify"><?= $value['highlight'] ?></p>
                </div>
            <?php } ?>

        </div>
    </div>
</div>