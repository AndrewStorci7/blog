<?php
/**
 * Search handle file
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

require_once __DIR__ . "/config.php";

use iLearn\Content\Bin\Content;
use iLearn\Box\Subject;
use iLearn\Box\Course;
use iLearn\Box\Lesson;

$course             = isset( $_POST['course'] ) ? $_POST['course'] : "";
$year               = isset( $_POST['year'] ) ? $_POST['year'] : "";
$subject            = isset( $_POST['subject'] ) ? $_POST['subject'] : "";
$inf_post_search    = isset( $_POST['text-to-search'] ) ? $_POST['text-to-search'] : "";
$content_page_current = "";

global $db;

$array_lesson_current = [];

$current_lesson_page = $db->select(
        "lesson",
        [
            "lesson" => [
                "title",
                "date",
                "link",
                "short_desc"
            ],
            "subject" => [ 
                "image",
                "year" 
            ],
            "course" => "sku" ,
        ],
        [ 
            "JOIN" => [
                "subject",
                "course"
            ] 
        ],
        [
            [
                "subject" => "id",
                "lesson"  => "id_subject"
            ],
            [
                "subject" => "id_course",
                "course" => "id"
            ]
        ],
        [
            "course.sku"    => $course,
            "condition_1"   => "AND",
            "subject.year"  => $year,
            "condition_2"   => "AND",
            "subject.image" => $subject,
            "condition_3"   => "AND",
            "condition_4"   => "LIKE",
            "lesson.title"  => $inf_post_search
        ]
);

if ( ! empty( $current_lesson_page ) && count( $current_lesson_page ) > 0 ) {

    foreach ( $current_lesson_page as $i => $lesson ) {
        $_course = new Course( null, null, $lesson['course_sku'] );
        $_subject = new Subject( 0, null, null, null, $lesson['subject_image'], null, $lesson['subject_year'], $_course ); 
        $_lesson = new Lesson( $lesson['lesson_title'], $lesson['lesson_date'], $lesson['lesson_link'], null, null, $lesson['lesson_short_desc'], $_subject );
        array_push( $array_lesson_current, $_lesson );
    }

    $Content = new Content( "Tutte le Lezioni", null, null, null, $array_lesson_current );
    $content_page_current = $Content->draw();
}

if ( ! empty( $content_page_current ) && $content_page_current !== null && $content_page_current !== "" && $content_page_current !== "undefined" ) {
    echo $content_page_current;
} else {
    echo "<div class=\"nothing-found position-relative\">
                <div class=\"position-absolute top-50 start-50 translate-middle search-404 box-sw-tailwind\">
                    <div class=\"position-relative\" style=\"height: 120px;\">
                        <div style=\"margin-top: 10px; width: fit-content;\" class=\"position-absolute top-0 start-50 translate-middle-x\">
                            <h5>404 Not Found</h5>
                        </div>
                        <img class=\"position-absolute bottom-0 start-50 translate-middle-x\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEPElEQVR4nO1bTYgcRRTuTWLUGPwD8SBCEo0Hj15MPIo3jeJJEFdIBC8ezEZCIopMJBpFUIQgEkFwRxM1mKtIIJdcPXrxBwVPQjYz7dT3dY+iPnmzVUttp6anMzszNTvTBR8M/br7vfrqvdevXvckSWGIyC0kn8qy7AiAY7MAkksknxSRHcX5rg0RWQBwlGRKUmYUbWPMKzrX4uS3ADg7BQZOCl+sIwGrKy/zBA3xxIv5WXb7fmj3coImhykwJgoAPJFoUig54V+SyyTfsVi2xyrJhzSqeM+NoNSeTMOAZKPEoM/WZcskSaxxVeXD4Jp7bmQMsKcxiIDlwA2b1yEfBssjJqA5NAFYdZ+mV1A0AyHQV76BEGiOqAAaZE9jkAfMOho1Aaw9gPMdAgAWp8CQKDDGPNfbCOmPERUemwY6ZxHZMspHbj025ZDVXsBi7K5NBCz2QgDA87GTUSwAWKzrAM57HcCaANYewPiuWIcA6xzAOgmyfgpwcz8GAeQkD9st9pWS834E8Kr25S30909D6LxI8mkAX04LAUfdHoPkm33Oe0tEtgX2JNtInroOfX+IyE577U0A/o5KAIDf1RA3odALFwCnB23OAHxcUedL/nUkO7EJOOgbFCAgXVlZudXJsyzbD+CcfSu9zx1vt9u3k/xzgK6fReSGaSLgBxHZWkYAgK+crNvtPmDzhZPl3W53r+cFX5fpy7LsmaLnxCbgQNGggAe87a3+kcA9lrzJlOWC76/5wCEmAQAuh2I5QEDDMzakc5C8B2PMYyF90QjIsuwRZ4SIbB8zAd+FdEUjAMAFz6CbAbwwLgIA/AfgIe+cl6MSAOCfTqfzoDMAwHF/EmPwgM89sndqHRDbAz5xytM0vYPk1XERoEVOnuf3efITejwaAQDyLMvu9ZS/V5zEiAn40Mk6nc5dbrIxPeCUp/geABwXAQCMMeZuL9ROO1ksAlppmt7pKf40NIkREvCGO57n+W4Af0UlAF49r0lQk+E4CVCX91Z/3cecsTyg4a3ILi1MHPI83+PJ9mjm3igB/iSNMY/6+gqyZ0muTIKAE0nFISI3eh6yVgrbj5crlcKhsrffIHlyEgRcCu3nQ0OrxD6bob3FzVCe5/c7OYDzTqarXpHsrSS/nQQBAuA3241ZB33P6K3GiwC63nVpq9W6zZPv04+WLR4u1BRr22G9h+43Qvp8AgD8OqkcIFXyQ59y9qNBK0nyTFV9heumoiX2vrciH/Q5791iM8O68HavoKoE51G2iRKfAJIpgEO6KSrr6mhHB8Br2kdQAHgdwC9DEP6NbapemBYCZJOhURPA2gNYhwDjx2KdAxgrCZqSv8zMAZYS+yyWeQSAx7UC26F/IYttTAS0tJPdK0PnNAwO+3X4gt2VyZygGfr/8IJ9ZzfL4dDSlS9tsshqTtDEqF2b6N/1jwhLumlai3lv/A+Ktl7ZYosFkgAAAABJRU5ErkJggg==\">   
                    </div>
                </div>
            </div>";
}