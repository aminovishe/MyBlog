<div class="col-8 show-labels-posts">
    <div class="div-title-widget d-flex flex-row justify-content-between align-items-center mb-3">
        <p class="m-0 widget-title d-inline-block"><?= $tabOnePost['name'] ?></p>
    </div>
    <div class="div-previous-next row d-flex flex-row justify-content-around align-items-center">
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
                 style="background-image: url('admin/img/upload_img/<?= $tabOnePost['image'] ?>')">
                <div class="card-img-overlay card-post-image">
                    <h1 class="mb-4"><?= $tabOnePost['title'] ?></h1>
                    <p class="mt-4 badge badge-dark">
                        <strong><?php echo "Published by : " . $tabOnePost['firstName'] . ' ' . $tabOnePost['lastName']; ?></strong><br>
                        <span class="badge badge-dark">Published in : <?= $tabOnePost['creationTimestamp'] ?></span>
                        <?php
                        if (!is_null($tabOnePost['updateTimestamp'])) {
                            ?><br><span class="badge badge-info">Updated in
                            : <?= $tabOnePost['updateTimestamp'] ?></span><?php
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="one-lable-highlight">
                <p><?= $tabOnePost['highlight'] ?></p>
            </div>
            <div class="mt-3 mb-3 between-highlight-content p-2">
                <div class="related-post"><i class="fas fa-map-marker-alt fa-2x"></i><em style="color: white">Related
                        Post</em></div>
                <div class="d-flex flex-row justify-content-center align-items-start">
                    <?php foreach ($tabRelatedPosts as $key => $value) { ?>
                        <div class="col-6 d-flex flex-row justify-content-start align-items-start">
                            <div class="w-35"
                                 style="background: url('admin/img/upload_img/<?= $value['image'] ?>') center no-repeat;height: 100px;background-size: cover"></div>
                            <div class="w-65 ml-2 text-left">
                    <span><a class="title-related-post"
                             href="onePost.php?id=<?= $value['id'] ?>"><?= $value['title'] ?></a><br>
                        <span class="badge badge-dark">Published in : <?= $value['creationTimestamp'] ?></span>
                        <?php
                        if (!is_null($value['updateTimestamp'])) {
                            ?><br><span class="badge badge-info">Updated in
                            : <?= $value['updateTimestamp'] ?></span><?php
                        }
                        ?></span>
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
    <div class="divAddComment m-5 row">
        <div class="inputComment w-100">
            <form id="formAddComment">
                <input type="hidden" value="<?= $_GET['id'] ?>" name="idPost">
                <div class="d-flex flex-row justify-content-center align-items-start">
                    <div class="w-65">
                        <input class="form-control" name="nickName" type="text" placeholder="Your nickname">
                    </div>
                    <div class="w-35 d-flex flex-row justify-content-start align-items-start">
                        <div class="boy ml-2">
                            <input type="radio" id="boy" name="iconVisitor" value="pics/boy.png"/>
                            <label class="rounded-circle" for="boy"></label>
                        </div>
                        <div class="girl ml-2">
                            <input type="radio" id="girl" name="iconVisitor" value="pics/girl.png"/>
                            <label class="rounded-circle" for="girl"></label>
                        </div>
                        <div class="men ml-2">
                            <input type="radio" id="men" name="iconVisitor" value="pics/men.png"/>
                            <label class="rounded-circle" for="men"></label>
                        </div>
                        <div class="women ml-2">
                            <input type="radio" id="women" name="iconVisitor" value="pics/women.png"/>
                            <label class="rounded-circle" for="women"></label>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-start align-items-start">
                    <div class="like">
                        <input type="radio" id="like" name="like" value="pics/like1.PNG"/>
                        <label class="m-2" for="like"></label>
                    </div>
                    <div class="likeNot">
                        <input type="radio" id="likeNot" name="like" value="pics/likeNot1.png"/>
                        <label class="m-2" for="likeNot"></label>
                    </div>
                </div>
                <div>
                    <textarea class="form-control" name="commentContent" id="commentContent" rows="3"
                              placeholder="Your comment here"></textarea>
                </div>
                <div class="btn w-100 d-flex flex-row justify-content-end align-items-center">
                    <button id="btnSubmitComment" class="button6 m-0" type="submit" name="submitComment">Send your comment</button>
                </div>
                <span id="errorComment" class="badge badge-danger hide">Invalid comment</span>
            </form>
        </div>
    </div>

    <div class="divShowAllComments m-4">
        <?php foreach ($showAllComments as $key => $value) { ?>
        <div class="showOneComment w-100 mt-3">
            <div class="d-flex flex-row justify-content-start align-items-center w-100">
                <img class="w-10" src="<?=$value['image_visitor']?>" alt="user">
                <div class="w-90 d-flex flex-column justify-content-center align-items-center w-100 ml-2 mr-3 mb-2">
                    <div class="d-flex flex-row justify-content-between align-items-center w-100">
                        <p class="nickName"><?=$value['nickName']?></p>
                        <img src="<?=$value['like_post']?>">
                        <span class="badge badge-info"><?=$value['creationTimestamp']?></span>
                    </div>
                    <div class="w-100">
                        <p class="m-0 text-left"><?=$value['contents']?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>