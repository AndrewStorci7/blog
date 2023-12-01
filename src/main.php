<?php
// Main Content File
?>

<main>
    <div class="container filter-panel position-relative <?php echo $subject->course->getCssClass(); ?>-fp">
        <form class="search-form">
            <div class="search-box">
                <button type="button" class="btn-search">
                    <i class="fas fa-search"></i>
                </button>
                <input type="text" class="input-search" id="text-to-search" name="text-to-search" placeholder="Type to Search...">
            </div>
        </form>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Filtri
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Dalla Più Recente</a></li>
                <li><a class="dropdown-item" href="#">Dalla Meno Recente</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3">            
                <div class="lateral-navbar <?php echo $subject->course->getCssClass(); ?>-fp box-sw-tailwind" style="width: 100%; height: 600px">
                    <?php echo $lateral_bar_draw; ?>
                </div>
            </div>
            <div class="col-8">
                <div class="container">
                    <div class="row content-page-current" id="show-search-content">
                        <?php echo $content_page_current; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>