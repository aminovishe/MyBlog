<div class="col-8 show-labels-posts">
    <div class="div-title-widget d-flex flex-row justify-content-between align-items-center mb-3">
        <p class="m-0 widget-title d-inline-block"><?= $tabOnePost['name'] ?></p>
    </div>
    <div class="row d-flex flex-row justify-content-around align-items-center">
        <?php if ($idPreviousPost != -1) { ?>
            <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                <a class="btn btn-link" href="onePost.php?id=<?= $idPreviousPost ?>"><i class="fas fa-arrow-left"></i>
                    Previous post</a>
            </div>
        <?php } else { ?>
            <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                <a class="btn btn-link <?php echo 'disabled' ?>" href="#"><i class="fas fa-arrow-left"></i> Previous
                    post</a>
            </div>
        <?php } ?>
        <?php if ($idNextPost != -1) { ?>
            <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                <a class="btn btn-link" href="onePost.php?id=<?= $idNextPost ?>">Next post <i
                            class="fas fa-arrow-right"></i></a>
            </div>
        <?php } else { ?>
            <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                <a class="btn btn-link <?php echo 'disabled' ?>" href="#">Next post <i
                            class="fas fa-arrow-right"></i></a>
            </div>
        <?php } ?>
    </div>
    <div class="div-content-widget row d-flex flex-row justify-content-start align-items-start mb-3">
        <div class="col-12 div-one-label">
            <div class="card mt-3 mb-3"
                 style="background-image: url('<?= $tabOnePost['image'] ?>')">
                <div class="card-img-overlay card-post-image">
                    <h1 class="mb-4"><?= $tabOnePost['title'] ?></h1>
                    <p class="mt-4 badge badge-dark">
                        <strong><?php echo $tabOnePost['firstName'] . ' ' . $tabOnePost['lastName']; ?></strong> | <span
                                class="badge badge-light"><?= date('d-m-Y h:i:s a', strtotime($tabOnePost['creationTimestamp'])); ?></span>
                    </p>
                </div>
            </div>
            <div class="one-lable-highlight">
                <p><?= $tabOnePost['highlight'] ?></p>
            </div>
            <div class="mt-3 mb-3 between-highlight-content p-2">
                <div class="related-post"><i class="fas fa-map-marker-alt fa-2x"></i>Related Post</div>
                <div class="d-flex flex-row justify-content-center align-items-start">
                    <?php foreach ($tabRelatedPosts as $key => $value) { ?>
                        <div class="col-6 d-flex flex-row justify-content-start align-items-start">
                            <div class="w-35"
                                 style="background: url('<?= $value['image'] ?>') center no-repeat;height: 100px;background-size: cover"></div>
                            <div class="ml-2 text-left">
                    <span><?= $value['title'] ?><br><span
                                class="badge badge-dark"><?= date('d-m-Y h:i:s a', strtotime($value['creationTimestamp'])); ?></span></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="mt-3 mb-3 one-lable-content">
                <p><?= $tabOnePost['contents'] ?></p>
            </div>
        </div>
    </div>
    <div class="mt-3 mb-3 between-highlight-content p-2">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div><i class="fas fa-share-alt"></i> Share this post</div>
        </div>
        <div class="elfsight-app-c350939c-9420-4fdf-86ad-04af6d3615ec"></div>
    </div>

</div>