<?php require_once 'lib/c_oneLabelPost.php' ?>
<div class="oneLabelPost">
    <div class="row">
        <div class="col-4">
            <a href="onePost.php?id=<?= $oneLabelPostBusiness['id'] ?>">
                <div class="card h-100 position-relative">
                    <img class="card-img img-fluid h-100" src="<?= $oneLabelPostBusiness['image'] ?>" alt="Card image">
                    <span class="oneLabelPostLabel position-absolute">Business</span>
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?= $oneLabelPostBusiness['title'] ?></span><br>
                            <small class="small"><?= date('d-m-Y h:i:s a', strtotime($oneLabelPostBusiness['creationTimestamp'])); ?></small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="onePost.php?id=<?= $oneLabelPostMusic['id'] ?>">
                <div class="card h-100 position-relative">
                    <img class="card-img img-fluid h-100" src="<?= $oneLabelPostMusic['image'] ?>" alt="Card image">
                    <span class="oneLabelPostLabel position-absolute">Music</span>
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?= $oneLabelPostMusic['title'] ?></span><br>
                            <small class="small"><?= date('d-m-Y h:i:s a', strtotime($oneLabelPostMusic['creationTimestamp'])); ?></small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <div class="card h-100 position-relative">
                <img class="card-img img-fluid h-100" src="pics/bannerAd.jpg" alt="Card image">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <a href="onePost.php?id=<?= $oneLabelPostNature['id'] ?>">
                <div class="card h-100 position-relative">
                    <img class="card-img img-fluid h-100" src="<?= $oneLabelPostNature['image'] ?>" alt="Card image">
                    <span class="oneLabelPostLabel position-absolute">Nature</span>
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?= $oneLabelPostNature['title'] ?></span><br>
                            <small class="small"><?= date('d-m-Y h:i:s a', strtotime($oneLabelPostNature['creationTimestamp'])); ?></small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="onePost.php?id=<?= $oneLabelPostSport['id'] ?>">
                <div class="card h-100 position-relative">
                    <img class="card-img img-fluid h-100" src="<?= $oneLabelPostSport['image'] ?>" alt="Card image">
                    <span class="oneLabelPostLabel position-absolute">Sport</span>
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?= $oneLabelPostSport['title'] ?></span><br>
                            <small class="small"><?= date('d-m-Y h:i:s a', strtotime($oneLabelPostSport['creationTimestamp'])); ?></small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="onePost.php?id=<?= $oneLabelPostTechnology['id'] ?>">
                <div class="card h-100 position-relative">
                    <img class="card-img img-fluid h-100" src="<?= $oneLabelPostTechnology['image'] ?>"
                         alt="Card image">
                    <span class="oneLabelPostLabel position-absolute">Technology</span>
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?= $oneLabelPostTechnology['title'] ?></span><br>
                            <small class="small"><?= date('d-m-Y h:i:s a', strtotime($oneLabelPostTechnology['creationTimestamp'])); ?></small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>