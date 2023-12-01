<?php
/**
 * Show content
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

require_once __DIR__ . "/config.php";

use iLearn\Box\ArrayListLesson;
use iLearn\Content\Bin\Content;
use iLearn\Bar\LateralBar;
use iLearn\Box\Subject;
use iLearn\Box\Course;
use iLearn\Box\Lesson;

/// $isSearch           = isset( $_POST['search'] )         ? $_POST['search']          : false;
/// $lesson_to_search   = isset( $_POST['text-to-search'] ) ? $_POST['text-to-search']  : null;
$inf_get_course     = isset( $_GET['course'] )          ? $_GET['course']           : null;
$inf_get_year       = isset( $_GET['year'] )            ? $_GET['year']             : null;
$inf_get_subject    = isset( $_GET['subject'] )         ? $_GET['subject']          : null;
$inf_get_lesson     = isset( $_GET['lesson'] )          ? $_GET['lesson']           : null;

$course_current = null;
$subject_current = null;
$content_page_current = null;
$array_lesson_current = [];
$array_subject = [];

if ( ( ! empty( $inf_get_course ) && $inf_get_course !== null && $inf_get_course !== '' ) &&
     ( ! empty( $inf_get_year ) && $inf_get_year !== null && $inf_get_year !== '' ) &&
     ( ! empty( $inf_get_subject ) && $inf_get_subject !== null && $inf_get_subject !== '' ) ) {

    global $db;

    $select_data_for_lesson = null;

    $id_course = $db->select(
        "course",
        [
            "course" => "id"
        ],
        null,
        null,
        [
            "course.sku" => strtolower( $inf_get_course )
        ]
    );

    $select_data_for_content_header = $db->select(
        "subject",
        [
            "subject" => [
                "image",
                "title",
                "hint",
                "year",
                "difficulty"
            ],
            "course" => [
                "title",
                "sku"
            ],
            "typecourse" => "css_class"
        ],
        [
            "JOIN" => [
                "typecourse",
                "course"
            ]
        ],
        [
            [
                "course" => "type_course",
                "typecourse" => "id"
            ],
            [
                "subject" => "id_course",
                "course" => "id"
            ]
        ],
        [
            "subject.image" => strtolower( $inf_get_subject ),
            "condition" => "AND",
            "course.id" => $id_course[0]['course_id']
        ]
    );

    

    foreach ( $select_data_for_content_header as $i => $cnt_header ) {
        $course = new Course( $cnt_header['course_title'], $cnt_header['typecourse_css_class'], $cnt_header['course_sku'] );
        $subject = new Subject( 0, $cnt_header['subject_title'], null, $cnt_header['subject_hint'], $cnt_header['subject_image'], $cnt_header['subject_difficulty'], $cnt_header['subject_year'], $course );
    }

    $select_data_for_content_main = $db->select(
        "subject",
        [
            "subject" => [
                "id",
                "title",
                "image"
            ]
        ],
        [ "JOIN" => "course" ],
        [
            "subject" => "id_course",
            "course" => "id"
        ],
        [
            "course.id"     => $id_course[0]['course_id'],
            "condition_1"   => "AND",
            "subject.year"  => $inf_get_year,
            "condition_2"   => "ORDER BY",
            "order_by"      => "subject.title",
            "condition_3"   => "ASC"
        ]
    );

    foreach ( $select_data_for_content_main as $i => $sub ) {
        $_sub = new Subject( $sub['subject_id'], $sub['subject_title'], null, null, $sub['subject_image'], null, 0, new Course() );
        $select_data_for_lesson = $db->select(
            "lesson",
            [
                "lesson" => [
                    "title",
                    "date",
                    "link"
                ]
            ],
            [ "JOIN" => "subject" ],
            [
                "subject" => "id",
                "lesson"  => "id_subject"
            ],
            [
                "subject.id"    => $sub['subject_id']
            ]
        );

        $array_lesson = [];
        $array_cl = [
            "course"    => $_sub,
            "lessons"   => null
        ];
        foreach ( $select_data_for_lesson as $i => $lesson ) {

            if ( ! empty( $lesson ) ) {
                $_lesson = new Lesson( $lesson['lesson_title'], $lesson['lesson_date'], $lesson['lesson_link'] );
                array_push( $array_lesson, $_lesson );
            }
        }
        $array_cl['lessons'] = $array_lesson;
        array_push( $array_subject, $array_cl );
    }

    $lateral_bar = new LateralBar( "Tutti i Corsi", $array_subject );
    $lateral_bar_draw = $lateral_bar->drawLateralBar( $inf_get_course, $inf_get_year, $inf_get_subject );

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
            "subject.year" => $inf_get_year,
            /// "condition_1"   => "AND",
            /// "condition_2"   => "LIKE",
            /// "lesson.title"  => $lesson_to_search
        ]
    );

    foreach ( $current_lesson_page as $i => $lesson ) {
        $_course = new Course( null, null, $lesson['course_sku'] );
        $_subject = new Subject( 0, null, null, null, $lesson['subject_image'], null, $lesson['subject_year'], $_course ); 
        $_lesson = new Lesson( $lesson['lesson_title'], $lesson['lesson_date'], $lesson['lesson_link'], null, null, $lesson['lesson_short_desc'], $_subject );
        array_push( $array_lesson_current, $_lesson );
    }

    $Content = new Content( "Tutte le Lezioni", null, null, null, $array_lesson_current );
    $content_page_current = $Content->draw();

    // $content_page_current = ArrayListLesson::drawLessons( $array_lesson_current, $inf_get_course, $inf_get_year, $inf_get_subject );
    
    // $select_data_for_content_footer = $db->select(
    //    ""
    // );
}

require_once __DIR__ . "/header.php";
require_once __DIR__ . "/header_panel.php";
/// require_once __DIR__ . "/search.php";
require_once __DIR__ . "/main.php";
require_once __DIR__ . "/footer.php";