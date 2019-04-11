<?php require_once 'lib/c_oneLabelPost.php'?>
<div class="oneLabelPost">
    <div class="row">
        <div class="col-6">
            <a href="#">
                <div class="card h-100">
                    <img class="card-img img-fluid h-100" src="<?=$oneLabelPostBusiness['image']?>" alt="Card image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?=$oneLabelPostBusiness['title']?></span><br>
                            <span class="oneLabelPostLabel">Business</span> -
                            <small class="small"><?=date('d-m-Y h:i:s', strtotime($oneLabelPostBusiness['creationTimestamp']));?></small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6">
            <a href="#">
                <div class="card h-100">
                    <img class="card-img img-fluid h-100" src="<?=$oneLabelPostMusic['image']?>" alt="Card image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?=$oneLabelPostMusic['title']?></span><br>
                            <span class="oneLabelPostLabel">Music</span> -
                            <small class="small"><?=date('d-m-Y h:i:s', strtotime($oneLabelPostMusic['creationTimestamp']));?></small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <a href="#">
                <div class="card h-100">
                    <img class="card-img img-fluid h-100" src="<?=$oneLabelPostNature['image']?>" alt="Card image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?=$oneLabelPostNature['title']?></span><br>
                            <span class="oneLabelPostLabel">Nature</span> -
                            <small class="small"><?=date('d-m-Y h:i:s', strtotime($oneLabelPostNature['creationTimestamp']));?></small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="#">
                <div class="card h-100">
                    <img class="card-img img-fluid h-100" src="<?=$oneLabelPostSport['image']?>" alt="Card image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?=$oneLabelPostSport['title']?></span><br>
                            <span class="oneLabelPostLabel">Sport</span> -
                            <small class="small"><?=date('d-m-Y h:i:s', strtotime($oneLabelPostSport['creationTimestamp']));?></small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="#">
                <div class="card h-100">
                    <img class="card-img img-fluid h-100" src="<?=$oneLabelPostTechnology['image']?>" alt="Card image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end m-3">
                        <p class="card-text">
                            <span class="card-text-title"><?=$oneLabelPostTechnology['title']?></span><br>
                            <span class="oneLabelPostLabel">Technology</span> -
                            <small class="small"><?=date('d-m-Y h:i:s', strtotime($oneLabelPostTechnology['creationTimestamp']));?></small>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>