<?php require_once 'lib/c_oneLabelPost.php' ?>
<div class="oneLabelPost">
    <div class="row">
        <div class="col-4">
            <a href="onePost.php?id=<?= $oneLabelPostBusiness['id'] ?>">
                <div class="card h-100 position-relative">
                    <div class="card-img img-fluid" style="background: url('admin/img/upload_img/<?= $oneLabelPostBusiness['image'] ?>') center no-repeat; background-size: cover;height: 300px;" alt="Card image"></div>
                    <span class="oneLabelPostLabel position-absolute">Business</span>
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?= $oneLabelPostBusiness['title'] ?></span><br>
                                <small class="small">
                                    <span class="badge badge-dark">Published in : <?= $oneLabelPostBusiness['creationTimestamp'] ?></span>
                                    <?php
                                    if (!is_null($oneLabelPostBusiness['updateTimestamp']) ){
                                        ?> | <span class="badge badge-info">Updated in : <?= $oneLabelPostBusiness['updateTimestamp'] ?></span><?php
                                    }
                                    ?>
                            </small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="onePost.php?id=<?= $oneLabelPostMusic['id'] ?>">
                <div class="card h-100 position-relative">
                    <div class="card-img img-fluid" style="background: url('admin/img/upload_img/<?= $oneLabelPostMusic['image'] ?>') center no-repeat; background-size: cover;height: 300px;" alt="Card image"></div>
                    <span class="oneLabelPostLabel position-absolute">Music</span>
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?= $oneLabelPostMusic['title'] ?></span><br>
                            <small class="small">
                                <span class="badge badge-dark">Published in : <?= $oneLabelPostMusic['creationTimestamp'] ?></span>
                                <?php
                                if (!is_null($oneLabelPostMusic['updateTimestamp']) ){
                                    ?> | <span class="badge badge-info">Updated in : <?= $oneLabelPostMusic['updateTimestamp'] ?></span><?php
                                }
                                ?>
                            </small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <div class="card h-100 position-relative">
                <div class="card-img img-fluid" style="background: url('pics/bannerAd.jpg') center no-repeat; background-size: cover;height: 300px;" alt="Card image"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <a href="onePost.php?id=<?= $oneLabelPostNature['id'] ?>">
                <div class="card h-100 position-relative">
                    <div class="card-img img-fluid" style="background: url('admin/img/upload_img/<?= $oneLabelPostNature['image'] ?>') center no-repeat; background-size: cover;height: 300px;" alt="Card image"></div>
                    <span class="oneLabelPostLabel position-absolute">Nature</span>
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?= $oneLabelPostNature['title'] ?></span><br>
                            <small class="small">
                                <span class="badge badge-dark">Published in : <?= $oneLabelPostNature['creationTimestamp'] ?></span>
                                <?php
                                if (!is_null($oneLabelPostNature['updateTimestamp']) ){
                                    ?> | <span class="badge badge-info">Updated in : <?= $oneLabelPostNature['updateTimestamp'] ?></span><?php
                                }
                                ?>
                            </small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="onePost.php?id=<?= $oneLabelPostSport['id'] ?>">
                <div class="card h-100 position-relative">
                    <div class="card-img img-fluid" style="background: url('admin/img/upload_img/<?= $oneLabelPostSport['image'] ?>') center no-repeat; background-size: cover;height: 300px;" alt="Card image"></div>
                    <span class="oneLabelPostLabel position-absolute">Sport</span>
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?= $oneLabelPostSport['title'] ?></span><br>
                            <small class="small">
                                <span class="badge badge-dark">Published in : <?= $oneLabelPostSport['creationTimestamp'] ?></span>
                                <?php
                                if (!is_null($oneLabelPostSport['updateTimestamp']) ){
                                    ?> | <span class="badge badge-info">Updated in : <?= $oneLabelPostSport['updateTimestamp'] ?></span><?php
                                }
                                ?>
                            </small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="onePost.php?id=<?= $oneLabelPostTechnology['id'] ?>">
                <div class="card h-100 position-relative">
                    <div class="card-img img-fluid" style="background: url('admin/img/upload_img/<?= $oneLabelPostTechnology['image'] ?>') center no-repeat; background-size: cover;height: 300px;" alt="Card image"></div>
                    <span class="oneLabelPostLabel position-absolute">Technology</span>
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?= $oneLabelPostTechnology['title'] ?></span><br>
                            <small class="small">
                                <span class="badge badge-dark">Published in : <?= $oneLabelPostTechnology['creationTimestamp'] ?></span>
                                <?php
                                if (!is_null($oneLabelPostTechnology['updateTimestamp']) ){
                                    ?> | <span class="badge badge-info">Updated in : <?= $oneLabelPostTechnology['updateTimestamp'] ?></span><?php
                                }
                                ?>
                            </small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>