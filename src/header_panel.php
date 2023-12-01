<?php 
//Header Panel File
?>

<section>
    <div class="container-fluid header-panel <?php echo $subject->course->getCssClass(); ?>">
        <div class="container">
            <h1 style="font-weight: bolder; letter-spacing: .05rem">
                <?php echo $subject->getTitle(); ?>
            </h1>
            <h5>
                <?php echo $subject->course->getTitle(); ?>
            </h5>
            <div class="category fix-padding">
                <div class="mini-box primary primary-<?php echo $subject->getYear(); ?>y"></div>
                <div class="mini-box difficulty-<?php echo $subject->getDifficulty(); ?>"></div>
            </div>
            <a class="goback-button" href="/blog/?#most-popular-notes-id">
                <img width="20" height="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA1ElEQVR4nO3WQUoDQRCF4W+vSx3Fy0SPoOQWyVayNh5I8R6iCzHJLZLRbRIZKCG4cnrCNAz9Qy+r3uvqruqmUBgYE1zmEp9ij0UuExU+wsQKV8WEUgkDuBMVHvGG70jUZX1Gzn8xRn0E0SQDY+wi6AkjnLQtXwykRdsBVR3s/D5BtJO4OPPfnfcu3vAegU3Zexdv+IrgU+25OGi7ZWrv14kGjiIuer5Jci3TczyPRM+5PiTn2ISJmUzcYRsmXnCTeCk7cYv1n1HaO2d4wGu0Z6EwPH4AMJtvAS2XOHoAAAAASUVORK5CYII=">
                Torna Indietro
            </a>
        </div>
    </div>
</section>