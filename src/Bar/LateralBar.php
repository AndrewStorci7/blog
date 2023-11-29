<?php
/**
 * Super Class that handle Lateral Bar Information
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Bar;

use iLearn\Box\Course;

class LateralBar {

    private $title;

    private Course $courses_lessons;

    public function __construct( string $title = "", array|Course $courses_lessons ) {
        $this->title = $title;
        $this->courses_lessons = $courses_lessons;
    }

    public function getTitle() { return $this->title; }

    public static function drawLateralBar() {

        $ret = "";
        if ( ! empty( $this->courses_lessons ) ) {
            foreach ( $this->courses_lessons as $i => $lesson ) {
                // TODO
            }
        }
    }
}