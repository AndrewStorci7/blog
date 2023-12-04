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
            Studiare non è mai stato così <span style="color: var(--clr-bg-circle);">facile</span>
        </h1>
        <a class="position-absolute btn-godown" href="#most-popular-notes-id">
            <span>Visita i nostri Appunti</span>
            <div class="position-relative" style="padding-top: 50px;">
                <img style="width: 40px;" class="position-absolute top-50 start-50 translate-middle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABKElEQVR4nO2W60rDQBBG1zesoSU/9PUFQ1tfQOFIQNFiLpvN3Cxz/gVmwhw2s/lKSZIkSbwBTsAFeAEOJRjAI/AKvAH9XNEDcOaH99liB4D+a6ZvruPMc8XDr8IwMvyVGBmWGrqJBlcZpiXG526t8TjR+AE8m01/u7NTszyVGiLIsFciggxSEp4ySEt4yKAlYSmjLmEhYyahKWMuoSGjudinmtC48LetTgAt70AjNO6RaZTo1UKj0ECtPYNoaNwymLB4NyvSusw1PS2LjUdoXOpxkVD6DNT3yOpk7E9CWcZHQljGV0JIJoaEwAVgt9h3FRotZdwlJGTCSOy8AGJJtMiEldAOjS5Ih0ZXpEJjCPaGxlC0hsaQbA2NoaEyNP4LWAmNSZIkZQuflSDRkUYmNwIAAAAASUVORK5CYII=">
            </div>
        </a>
    </section> <!-- END SECTION PARALLAX -->

    <!-- SECTION NEWS -->
    <!--<section class="container-fluid z-101" id="section-novita">
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
    </section> -->
    <!-- END SECTION NEWS -->

    <section class="container-fluid z-102 private-lesson-section">
        <div class="container lezioni-private-content">
            <h1 style="font-weight: bold; letter-spacing: 0.05rem;">
                Richiedi la tua <span>Lezione Privata</span>
            </h1>
            <h3>Utilizzando il <span>form dedicato<span></h3>
            <div class="row">
                <div class="col-4">
                    <div class="steps position-relative background-image-calendar">
                        <div class="position-absolute top-0 start-0 translate-middle circle">
                            <div class="position-relative" style="height: 50px; font-size: 30px; font-weight: bold">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    1
                                </div>
                            </div>
                        </div>
                        <h3>Consulta il Calendario</h3>
                    </div>
                    <p>
                        Scegli il <b>giorno</b> e <b>l'orario</b> che preferisci consultando il calendario aggiornato.
                    </p>
                </div>
                <div class="col-4">
                    <div class="steps position-relative background-image-form">
                        <div class="position-absolute top-0 start-0 translate-middle circle">
                            <div class="position-relative" style="height: 50px; font-size: 30px; font-weight: bold">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    2
                                </div>
                            </div>
                        </div>
                        <h3>Compila il Form</h3>
                    </div>
                    <p>
                        Compila il <b>form</b> dedicato. Potrai scegliere le modalità di contatto, lo strumento per la videolezione e tante altre opzioni.
                    </p>
                </div>
                <div class="col-4 position-relative">
                    <div class="steps position-relative background-image-lezione">
                        <div class="position-absolute top-0 start-0 translate-middle circle">
                            <div class="position-relative" style="height: 50px; font-size: 30px; font-weight: bold">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    3
                                </div>
                            </div>
                        </div>
                        <h3>Goditi la Lezione</h3>
                    </div>
                    <p>
                        Goditi la tua <b>Lezione Privata</b>. Le nostre lezioni saranno create apposta per te a seconda delle tue esigenze.
                    </p>
                </div>
                <div class="container position-relative" style="height: 100px">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <a href="/blog/lezione-privata/">
                            Richiedi Subito
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid divisor z-101">
        <hr class="down-arrow">
    </section>

    <section class="container-fluid z-100 spotify-section">
        <svg class="svg-spotify" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="150" height="150" viewBox="0,0,256,256" style="fill:#000000;">
            <g fill="#f5f5f5" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25.009,1.982c-12.687,0 -23.009,10.322 -23.009,23.009c0,12.687 10.322,23.009 23.009,23.009c12.687,0 23.009,-10.321 23.009,-23.009c0,-12.688 -10.322,-23.009 -23.009,-23.009zM34.748,35.333c-0.289,0.434 -0.765,0.668 -1.25,0.668c-0.286,0 -0.575,-0.081 -0.831,-0.252c-2.473,-1.649 -6.667,-2.749 -10.167,-2.748c-3.714,0.002 -6.498,0.914 -6.526,0.923c-0.784,0.266 -1.635,-0.162 -1.897,-0.948c-0.262,-0.786 0.163,-1.636 0.949,-1.897c0.132,-0.044 3.279,-1.075 7.474,-1.077c3.5,-0.002 8.368,0.942 11.832,3.251c0.69,0.46 0.876,1.391 0.416,2.08zM37.74,29.193c-0.325,0.522 -0.886,0.809 -1.459,0.809c-0.31,0 -0.624,-0.083 -0.906,-0.26c-4.484,-2.794 -9.092,-3.385 -13.062,-3.35c-4.482,0.04 -8.066,0.895 -8.127,0.913c-0.907,0.258 -1.861,-0.272 -2.12,-1.183c-0.259,-0.913 0.272,-1.862 1.184,-2.12c0.277,-0.079 3.854,-0.959 8.751,-1c4.465,-0.037 10.029,0.61 15.191,3.826c0.803,0.5 1.05,1.56 0.548,2.365zM40.725,22.013c-0.373,0.634 -1.041,0.987 -1.727,0.987c-0.344,0 -0.692,-0.089 -1.011,-0.275c-5.226,-3.068 -11.58,-3.719 -15.99,-3.725c-0.021,0 -0.042,0 -0.063,0c-5.333,0 -9.44,0.938 -9.481,0.948c-1.078,0.247 -2.151,-0.419 -2.401,-1.495c-0.25,-1.075 0.417,-2.149 1.492,-2.4c0.185,-0.043 4.573,-1.053 10.39,-1.053c0.023,0 0.046,0 0.069,0c4.905,0.007 12.011,0.753 18.01,4.275c0.952,0.56 1.271,1.786 0.712,2.738z"></path></g></g>
        </svg>
        <div class="container">
            <div class="row position-relative">
                <div class="col-3"></div>
                <div class="col-9">
                    <h1>Studia con <b style="color: #6CBD0F;">Spotify</b></h1>
                    <span>
                        Playlist creata apposta per farti concentrare
                    </span>
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/7rJ1zBNNIjSBqPhGhc5JBe?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid divisor z-101">
        <hr class="down-arrow">
    </section>

    <section class="container-fluid z-100 paypal-section">
        <svg class="svg-paypal" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="250" height="250" viewBox="0,0,256,256" style="fill:#000000;">
            <g fill="#FCC419" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M11.4375,2c-1.05078,0 -1.93359,0.76172 -2.15625,1.71875v0.03125c0,0 -5.875,26.96484 -7.03125,32.34375v0.03125c-0.17187,0.85938 0,1.69141 0.5,2.21875c0.5,0.52734 1.13281,0.65625 1.65625,0.65625h8.5625c-0.26953,1.21875 -0.57031,2.55859 -0.78125,3.53125c-0.19141,0.87891 -0.35547,1.59375 -0.46875,2.125c-0.11328,0.53125 -0.15625,0.77344 -0.1875,0.9375c-0.08203,0.43359 -0.0625,0.92969 0.28125,1.46875c0.34375,0.53906 1.09766,0.9375 1.9375,0.9375h8.9375c1.07422,0 1.93359,-0.75 2.15625,-1.75c0,0 0.53516,-2.41016 1.0625,-4.84375c0.26172,-1.21875 0.51172,-2.42578 0.71875,-3.375c0.20703,-0.94922 0.375,-1.6875 0.375,-1.6875c0.05078,-0.21484 0.09375,-0.30859 0.09375,-0.3125c0,-0.00391 -0.09766,-0.03125 0.1875,-0.03125h5.125c7.38281,0 13.59375,-4.44531 15.25,-12.1875c0.93359,-4.37891 -0.18359,-7.71094 -2.3125,-9.8125c-1.87891,-1.85547 -4.46094,-2.73828 -6.9375,-2.9375c-0.29687,-2.97266 -1.71094,-5.29297 -3.625,-6.78125c-2.01172,-1.5625 -4.50391,-2.28125 -6.875,-2.28125zM11.4375,4h16.46875c1.95313,0 4.05078,0.625 5.65625,1.875c1.46484,1.14063 2.44922,2.83594 2.75,5.125h-15.375c-0.26172,0 -0.55078,-0.03125 -1,0.09375c-0.44922,0.125 -1,0.64844 -1.125,1.1875l-3.25,14.625v0.0625l-2.25,10.03125h-8.90625c-0.15234,0 -0.22656,-0.03906 -0.21875,-0.03125c0.00781,0.00781 -0.03125,-0.07031 0.03125,-0.4375c0.00391,-0.02734 -0.00781,0 0,-0.03125c1.16016,-5.39062 7.01953,-32.26172 7.03125,-32.3125v-0.03125c0.03125,-0.10156 0.08984,-0.15625 0.1875,-0.15625zM20.6875,13c0.08594,-0.00391 0.08203,0 0.25,0h15.46875c-0.04297,0.65234 -0.13281,1.34375 -0.3125,2.1875c-0.74219,3.47656 -2.24609,5.85156 -4.4375,7.4375c-2.19141,1.58594 -5.13672,2.375 -8.71875,2.375h-4.40625c-0.15234,0 -0.33984,0.04297 -0.53125,0.0625zM38.3125,13.15625c2.06641,0.18359 4.17969,0.85547 5.625,2.28125c1.65234,1.63281 2.57813,4.08594 1.75,7.96875c-1.48047,6.91406 -6.67187,10.59375 -13.28125,10.59375h-5.125c-0.74609,0 -1.39844,0.33203 -1.75,0.78125c-0.35156,0.44922 -0.42969,0.92578 -0.46875,1.09375c-0.04687,0.19141 -0.16797,0.76953 -0.375,1.71875c-0.20703,0.94922 -0.48828,2.1875 -0.75,3.40625c-0.52734,2.43359 -1.03125,4.8125 -1.03125,4.8125c-0.01953,0.08203 -0.18359,0.1875 -0.21875,0.1875h-8.9375c-0.16797,0 -0.22656,-0.02344 -0.25,-0.03125c-0.01562,0.07813 0.07422,-0.34375 0.1875,-0.875c0.11328,-0.53125 0.27734,-1.27734 0.46875,-2.15625c0.37891,-1.76172 0.875,-4.07031 1.375,-6.375c1,-4.60937 2,-9.1875 2,-9.1875c0.04688,-0.14453 0.08203,-0.17969 0.25,-0.25c0.1875,-0.07812 0.50781,-0.125 0.75,-0.125h4.40625c3.87891,0 7.25391,-0.85547 9.875,-2.75c2.62109,-1.89453 4.42578,-4.80469 5.25,-8.65625c0.1875,-0.87891 0.19922,-1.64844 0.25,-2.4375z"></path></g></g>
        </svg>
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <h1>Aiutaci a <b style="color: #FCC419;">Crescere</b> e <b style="color: #FCC419;">Migliorare</b></h1>
                    <span>
                        Il tuo aiuto è Importante per noi
                    </span>
                    <button class="paypal">

                    </button>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </section>

    <section class="most-popular-notes z-101" id="most-popular-notes-id">
        <div class="container">
            <div class="row">
                <h1>
                    <span>Appunti</span>
                </h1>
                <div class="hint position-relative">
                    <div class="position-absolute top-0 start-0 translate-middle circle">
                        <div class="position-relative" style="height: 50px; font-size: 30px; font-weight: bold">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 96.000000 96.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,96.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                        <path d="M440 560 l0 -140 40 0 40 0 0 140 0 140 -40 0 -40 0 0 -140z"/>
                                        <path d="M450 325 c-15 -18 -10 -45 13 -59 34 -22 73 27 47 59 -16 19 -44 19 -60 0z"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p>
                        I seguenti appunti derivano da un'accurata riflessione e sintesi delle lezioni tenute presso l'<b>Università degli Studi di Parma</b>. Il materiale presentato si basa sui concetti chiave esposti durante il corso accademico e rappresenta un riassunto essenziale delle conoscenze trasmesse in aula. La fonte primaria delle informazioni è rappresentata dalle lezioni ufficiali e dagli approfondimenti accademici forniti dal corpo docente dell'istituzione sopra citata. L'obiettivo di questo materiale è quello di offrire una panoramica esaustiva, seppur sintetica, dei principali argomenti trattati nel contesto universitario di riferimento. Si sottolinea l'importanza di integrare questi appunti con ulteriori fonti accademiche e consulenze specialistiche al fine di acquisire una comprensione completa ed approfondita dei temi trattati durante il corso.
                    </p>
                </div>
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