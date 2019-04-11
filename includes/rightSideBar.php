<?php require_once 'lib/c_rightSideBar.php'?>
<div class="col-4 right-side-bar">
    <div class="show-widget social-widget">
        <div class="div-title-widget">
            <p class="m-0 widget-title d-inline-block">SOCIAL PLUGIN</p>
        </div>
        <div class="div-content-widget">
            <a class="one-social-widget twitter" href="https://twitter.com/" target="_blank"><i
                        class="fab fa-twitter-square"></i></a>
            <a class="one-social-widget google" href="https://plus.google.com/" target="_blank"><i
                        class="fab fa-google-plus-square"></i></a>
            <a class="one-social-widget facebook" href="https://www.facebook.com/amin7hadrich"
               target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a class="one-social-widget instagram" href="https://www.instagram.com/amin7hadrich/"
               target="_blank"><i class="fab fa-instagram"></i></a>
            <a class="one-social-widget linkedin" href="https://www.linkedin.com/in/hadrich-mohamedamin/"
               target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
    <div class="show-widget popular-post-widget">
        <div class="div-title-widget">
            <p class="m-0 widget-title d-inline-block">POPULAR POSTS</p>
        </div>
        <div class="div-content-widget">
            <div class="d-flex flex-row justify-content-center align-items-start mt-2">
                <img src="pics/sport2.jpg" alt="">
                <div class="ml-2 text-left">
                    <span>Baseball player running the game field<br><span
                                class="badge badge-dark">23/03/2019</span></span>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-center align-items-start mt-2">
                <img src="pics/Business1.jpg" alt="">
                <div class="ml-2 text-left">
                    <span>Baseball player running the game field<br><span
                                class="badge badge-dark">23/03/2019</span></span>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-center align-items-start mt-2">
                <img src="pics/music2.jpg" alt="">
                <div class="ml-2 text-left">
                    <span>Baseball player running the game field<br><span
                                class="badge badge-dark">23/03/2019</span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="show-widget follow-by-email-widget">
        <h4>Follow by Email</h4>
        <p>Get all latest content delivered straight to your inbox.</p>
        <input class="form-control mb-1" type="email" name="email" placeholder="Email Address">
        <input class="form-control btn btn-outline-danger mt-1" type="submit" value="SUBSCRIBE">
    </div>
    <div class="show-widget">
        <div class="div-title-widget">
            <p class="m-0 widget-title d-inline-block">OUR FANS</p>
        </div>
        <div class="div-content-widget">
            <div class="widget-content small-wid">
                <div class="w-100" id="fb-root">
                    <div class="fb-page" data-href="https://www.facebook.com/jaaw.chi5a.tn/"
                         data-tabs="timeline" data-height="180" data-small-header="false"
                         data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/jaaw.chi5a.tn/"
                                    class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/jaaw.chi5a.tn/">Jaaw#Chi5a.Tn</a>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="show-widget labels-widget">
        <div class="div-title-widget">
            <p class="m-0 widget-title d-inline-block">LABELS</p>
        </div>
        <div class="div-content-widget">
            <div class="widget-content">
                <ul class="list-group">
                    <a href="#">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Business
                            <span class="badge badge-dark badge-pill"><?=$numberPostsBusiness?></span>
                        </li>
                    </a>
                    <a href="#">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Music
                            <span class="badge badge-dark badge-pill"><?=$numberPostsMusic?></span>
                        </li>
                    </a>
                    <a href="#">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Sport
                            <span class="badge badge-dark badge-pill"><?=$numberPostsSport?></span>
                        </li>
                    </a>
                    <a href="#">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Nature
                            <span class="badge badge-dark badge-pill"><?=$numberPostsNature?></span>
                        </li>
                    </a>
                    <a href="#">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Technology
                            <span class="badge badge-dark badge-pill"><?=$numberPostsTechnology?></span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>