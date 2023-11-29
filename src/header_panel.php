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
        </div>
    </div>
</section>