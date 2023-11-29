<?php 
require_once __DIR__ . "/src/init.php";
require_once __DIR__ . "/src/header.php";
?>
    <!-- SECTION PARALLAX -->
    <section class="img-parallax position-relative" id="img-parallax-id">
        <div class="position-absolute vignette"></div>
        <img src="assets/img/Prova 2/Sfondo.png" data-speedx="0.3" data-speedy="0.28" class="position-absolute parallax-img parallax-bg">
        <img src="assets/img/Prova 2/Livello 1.png" data-speedx="0.04" data-speedy="0.038" class="position-absolute parallax-img parallax-img-first">
        <img src="assets/img/Prova 2/Livello 2.png" data-speedx="0.06" data-speedy="0.058" class="position-absolute parallax-img parallax-img-2">
        <img src="assets/img/Prova 2/Livello 3.png" data-speedx="0.1" data-speedy="0.08" class="position-absolute parallax-img parallax-img-3">
        <img src="assets/img/Prova 2/Livello 4.png" data-speedx="0.13" data-speedy="0.1" class="position-absolute parallax-img parallax-img-4">
        <img src="assets/img/Prova 2/Livello 5.png" data-speedx="0.15" data-speedy="0.12" class="position-absolute parallax-img parallax-img-5">
        <img src="assets/img/Prova 2/Livello 6.png" data-speedx="0.18" data-speedy="0.15" class="position-absolute parallax-img parallax-img-6">
        <img src="assets/img/Prova 2/Livello 7.png" data-speedx="0.19" data-speedy="0.16" class="position-absolute parallax-img parallax-img-7">
        <img src="assets/img/Prova 2/Livello 8.png" data-speedx="0.2" data-speedy="0.18" class="position-absolute parallax-img parallax-img-8">
        <img src="assets/img/Prova 2/Livello 9.png" data-speedx="0.215" data-speedy="0.210" class="position-absolute parallax-img parallax-img-9">
        <img src="assets/img/Prova 2/Livello 10.png" data-speedx="0.225" data-speedy="0.220" class="position-absolute parallax-img parallax-img-10">
        <img src="assets/img/Prova 2/Livello 11.png" data-speedx="0.235" data-speedy="0.230" class="position-absolute parallax-img parallax-img-11">
        <img src="assets/img/Prova 2/Livello 12.png" data-speedx="0.245" data-speedy="0.240" class="position-absolute parallax-img parallax-img-12">
        <img src="assets/img/Prova 2/Livello 13.png" data-speedx="0.255" data-speedy="0.250" class="position-absolute parallax-img parallax-img-13">
        <h1 class="position-absolute top-50 start-50 translate-middle">
            <b>Studiare</b> non è mai stato così <span style="color: #00ADB5; font-weight: bolder;">facile</span>
        </h1>
        <a class="position-absolute btn-godown" href="#section-novita">
            <span>Visita i nostri Appunti</span>
            <div class="position-relative" style="padding-top: 50px;">
                <img style="width: 40px;" class="position-absolute top-50 start-50 translate-middle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABKElEQVR4nO2W60rDQBBG1zesoSU/9PUFQ1tfQOFIQNFiLpvN3Cxz/gVmwhw2s/lKSZIkSbwBTsAFeAEOJRjAI/AKvAH9XNEDcOaH99liB4D+a6ZvruPMc8XDr8IwMvyVGBmWGrqJBlcZpiXG526t8TjR+AE8m01/u7NTszyVGiLIsFciggxSEp4ySEt4yKAlYSmjLmEhYyahKWMuoSGjudinmtC48LetTgAt70AjNO6RaZTo1UKj0ECtPYNoaNwymLB4NyvSusw1PS2LjUdoXOpxkVD6DNT3yOpk7E9CWcZHQljGV0JIJoaEwAVgt9h3FRotZdwlJGTCSOy8AGJJtMiEldAOjS5Ih0ZXpEJjCPaGxlC0hsaQbA2NoaEyNP4LWAmNSZIkZQuflSDRkUYmNwIAAAAASUVORK5CYII=">
            </div>
        </a>
    </section> <!-- END SECTION PARALLAX -->

    <!-- SECTION NEWS -->
    <section class="container-fluid news" id="section-novita">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="container box-effect box-spotify box-sw-tailwind">
                        <div class="box-effect-novita">
                            Novità!
                        </div>
                        <div class="row">
                            <div class="col col-3">
                                <img src="data:image/png;base64,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">
                            </div>
                            <div class="col col-9">
                                <div style="font-size: 35px; padding-top: 30px;">
                                    Studia con <b style="color: #6CBD0F;">Spotify</b>
                                </div>
                            </div>
                        </div>
                        <span>
                            Playlist creata apposta per farti concentrare
                        </span>
                        <hr>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/7rJ1zBNNIjSBqPhGhc5JBe?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                        <!--<button class="btn btn-success btn-goto-spotify">
                            Vai alla Playlist
                        </button>-->
                    </div>
                </div>
                <div class="col-5">
                    <div class="container box-effect box-effect-paypal box-sw-tailwind">
                        <div class="row">
                            <div class="col col-3">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256" style="fill:#000000; padding: 20px 0 0 10px;">
                                    <g fill="#fcc419" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M11.40625,2c-1,0 -1.89453,0.6875 -2.09375,1.6875c0,0 -5.89844,27.00781 -7,32.40625c-0.19922,1.10156 0.07422,1.69531 0.375,2.09375c0.39844,0.5 1.01172,0.8125 1.8125,0.8125h7.5l5.90625,-27.1875c0.19922,-1 1.10547,-2.8125 3.90625,-2.8125h16.1875c-1.39844,-4.60156 -5.89453,-7 -10.09375,-7zM22,11.09375l-1.59375,0.3125c-0.30078,0.19922 -0.49219,0.60547 -0.59375,0.90625l-2.40625,11.1875c0.69922,-0.30078 1.38672,-0.40625 2.1875,-0.40625h7.21875c6.39844,0 9.98828,-2.58594 11.1875,-8.1875c0.19922,-1 0.3125,-1.79297 0.3125,-2.59375l-0.125,-1.125v-0.09375zM40.09375,11.3125l0.09375,0.6875c0.10156,1 -0.08203,1.89453 -0.28125,3.09375c-1.39844,6.5 -5.91797,9.8125 -13.21875,9.8125h-7.1875c-1.60156,0 -2.69922,0.69922 -3,2c-0.39844,1.80078 -3.89844,18.29297 -4,18.59375c-0.10156,0.5 0.00781,1.1875 0.40625,1.6875c0.30078,0.39844 0.78125,0.8125 1.78125,0.8125h8c1,0 1.92578,-0.71094 2.125,-1.8125c0.89844,-3.80078 2.08594,-9.57422 2.1875,-9.875c0,-0.10156 0.09375,-0.3125 0.09375,-0.3125h5.3125c7.80078,0 13.69531,-4.6875 15.09375,-12.1875c1,-4.60156 -0.29297,-7.52344 -1.59375,-9.125c-1.80078,-2.30078 -5.11328,-3.375 -5.8125,-3.375z"></path></g></g>
                                </svg>
                            </div>
                            <div class="col col-9">
                                <div style="font-size: 35px; padding-top: 30px;">
                                    Aiutaci a <b style="color: #FCC419;">Crescere</b> e <b style="color: #FCC419;">Migliorare</b>
                                </div>
                            </div>
                        </div>
                        <span style="padding-left: 15px;">
                            Il tuo <b>aiuto</b> è importante per noi
                        </span>
                        <button class="btn btn-goto-paypal">
                            Aiutaci
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- END SECTION NEWS -->

    <hr class="hr-styled">

    <section class="most-popular-notes">
        <div class="container">
            <div class="row">
                <?php
                global $gb_boxes;
                if ( ! empty( $gb_boxes ) ) {
                    echo $gb_boxes;
                } else {
                    echo 'risposta vuota';
                }
                ?>
            </div>
        </div>
    </section>

<?php
require_once __DIR__ . "/src/footer.php";
?>