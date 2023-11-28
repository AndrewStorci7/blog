<?php

require_once __DIR__ . "/../vendor/autoload.php";

global $db, $gb_boxes;

use iLearn\Box\ArrayListBoxSubject;
use iLearn\Box\BoxSubject;
use iLearn\Box\Course;

if (class_exists("iLearn\\Sql\\DBCONN")) {
    $db = new iLearn\Sql\DBCONN("ilearn");
}

$select_boxes = $db->select(
    "subject",
    [
        "subject" => [
            "title",
            "short_desc",
            "image",
            "difficulty",
            "year",
            "link"
        ],
        "course" => "title",
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

$array_boxes = [];

foreach ( $select_boxes as $i => $content ) {
    $link_esc = ( empty( $content['subject_link'] ) || $content['subject_link'] === '' || $content['subject_link'] === NULL || $content['subject_link'] === 'undefined' ) ? '#' : $content['subject_link'];
    $course = new Course( $content['course_title'], $content['typecourse_css_class'] );
    $box = new BoxSubject( $content['subject_title'], $content['subject_short_desc'], $content['subject_image'], $content['subject_difficulty'], $content['subject_year'], $course, $link_esc );
    $check = array_push( $array_boxes, $box );
    if ( ! $check ) {
        echo "Non aggiunto";
        break;
    }
}

$gb_boxes = ArrayListBoxSubject::drawBoxes( $array_boxes );

