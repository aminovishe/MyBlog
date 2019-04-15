<?php require_once 'lib/c_allPosts.php' ?>
<div class="col-8 show-labels-posts">
    <div class="div-title-widget d-flex flex-row justify-content-between align-items-center">
        <p class="m-0 widget-title d-inline-block">All posts<?php if (isset($_GET['idLabel'])) { ?><span class="ml-3 badge badge-warning"><?= $allPosts[0]['name'] ?><?php } ?></p>
    </div>
    <?php foreach ($allPosts as $key => $value) { ?>
        <div class="div-content-widget row d-flex flex-row justify-content-start align-items-start mt-3 mb-3">
            <div class="col-4">
                <img class="w-100" src="admin/img/upload_img/<?= $value['image'] ?>" alt="">
            </div>
            <div class="col-8 pl-2 text-left">
                <a href="onePost.php?id=<?= $value['id'] ?>"><h4><?= $value['title'] ?></h4></a>
                <strong><?php echo $value['firstName'] . ' ' . $value['lastName']; ?></strong> | <span class="badge badge-warning"><?= $value['name'] ?></span>
                | <span class="badge badge-dark">Published in : <?= $value['creationTimestamp'] ?></span>
                <?php
                    if (!is_null($value['updateTimestamp']) ){
                        ?><br><span class="badge badge-info">Updated in : <?= $value['updateTimestamp'] ?></span><?php
                    }
                ?>
                <p class="text-justify"><?= $value['highlight'] ?></p>
            </div>
        </div>
        <?php if ($key != count($allPosts)-1) { echo '<hr class="separation-posts">';}else{continue;}; ?>
    <?php } ?>
</div>