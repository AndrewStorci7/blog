<?php
/**
 * Init File
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

require_once __DIR__ . "/config.php";

use iLearn\Box\ArrayListSubject;
use iLearn\Box\Subject;
use iLearn\Box\Course;

$array_boxes = [];

$select_boxes = $db->select(
    "subject",
    [
        "subject" => [
            "id",
            "title",
            "short_desc",
            "image",
            "difficulty",
            "year",
            "hint"
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
    ]
);

foreach ( $select_boxes as $i => $content ) {
    $course = new Course( $content['course_title'], $content['typecourse_css_class'], $content['course_sku'] );
    $box = new Subject( $content['subject_id'], $content['subject_title'], $content['subject_short_desc'], $content['subject_hint'], $content['subject_image'], $content['subject_difficulty'], $content['subject_year'], $course );
    $check = array_push( $array_boxes, $box );
    if ( ! $check ) {
        echo "Non aggiunto";
        break;
    }
}

$gb_boxes = ArrayListSubject::drawBoxes( $array_boxes );

