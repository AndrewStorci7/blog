<?php
/**
 * Show content
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

require_once __DIR__ . "/config.php";

use iLearn\Box\Subject;
use iLearn\Box\Course;
use iLearn\Box\Lesson;

$inf_get_course     = isset( $_GET['course'] )  ? $_GET['course']   : null;
$inf_get_year       = isset( $_GET['year'] )    ? $_GET['year']     : null;
$inf_get_subject    = isset( $_GET['subject'] ) ? $_GET['subject']  : null;
$inf_get_lesson     = isset( $_GET['lesson'] )  ? $_GET['lesson']   : null;

$course_current = null;
$subject_current = null;
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
                    "date"
                ]
            ],
            [ "JOIN" => "subject" ],
            [
                "subject" => "id",
                "lesson"  => "id_subject"
            ],
            [
                "subject.id" => $sub['subject_id']
            ]
        );

        $array_lesson = [];
        $array_cl = [
            "course"    => $_sub,
            "lessons"   => $array_lesson
        ];
        foreach ( $select_data_for_lesson as $i => $lesson ) {
            $class_fix_padding = ( $i === array_key_first( $select_data_for_lesson ) ) ? "fix-padding-top-lb" : "";
            /*
            $lateral_bar_inf = "<div class=\"information-courses $class_fix_padding \">{$_sub->getTitle()} <svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"32\" height=\"32\" viewBox=\"0,0,256,256\"
                style=\"fill:#000000;\">
                <g fill=\"#ffffff\" fill-rule=\"nonzero\" stroke=\"none\" stroke-width=\"1\" stroke-linecap=\"butt\" stroke-linejoin=\"miter\" stroke-miterlimit=\"10\" stroke-dasharray=\"\" stroke-dashoffset=\"0\" font-family=\"none\" font-weight=\"none\" font-size=\"none\" text-anchor=\"none\" style=\"mix-blend-mode: normal\"><g transform=\"scale(8,8)\"><path d=\"M16,3c-7.16797,0 -13,5.83203 -13,13c0,7.16797 5.83203,13 13,13c7.16797,0 13,-5.83203 13,-13c0,-7.16797 -5.83203,-13 -13,-13zM16,5c6.08594,0 11,4.91406 11,11c0,6.08594 -4.91406,11 -11,11c-6.08594,0 -11,-4.91406 -11,-11c0,-6.08594 4.91406,-11 11,-11zM15,10v5h-5v2h5v5h2v-5h5v-2h-5v-5z\"></path></g></g>
                </svg></div>";
            */
            if ( ! empty( $lesson ) ) {
                $_lesson = new Lesson( $lesson['lesson_title'], $lesson['lesson_date'] );
                array_push( $array_lesson, $_lesson );
            }
        }
        array_push( $array_subject, $array_cl );
    }
    
    // $select_data_for_content_footer = $db->select(
    //    ""
    // );
}

require_once __DIR__ . "/header.php";
require_once __DIR__ . "/header_panel.php";
require_once __DIR__ . "/main.php";
require_once __DIR__ . "/footer.php";