<?php require_once 'lib/c_marqueeNews.php'?>
<div class="row marquee-row">
    <div class="col-2 marquee-badge d-flex flex-column justify-content-center align-items-center">
        <div><i class="fas fa-rss"></i> New Posts</div>
    </div>
    <div class="col-10 p-0">
        <marquee class="d-flex flex-row justify-content-center align-items-center" loop="0" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
            <div class="d-flex flex-row justify-content-center align-items-center">

                <?php foreach ($marqueeNews as $key => $value){ ?>
                <div class="d-flex flex-row justify-content-center align-items-center m-1">
                    <img src="<?=$value['image']?>">
                    <div class="ml-2 text-left d-flex flex-column justify-content-center align-items-start">
                        <span><a href="onePost.php?id=<?= $value['id'] ?>"><?=$value['title']?></a><br><span class="badge badge-dark"><?=date('d-m-Y h:i:s a', strtotime($value['creationTimestamp']));?></span></span>
                    </div>
                </div>
                <?php } ?>

            </div>
        </marquee>
    </div>
</div>