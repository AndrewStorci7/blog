<?php
/**
 * Class that handle Header Content Informations
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Content;

final class ContentFooter {

    private $bg_color;

    private $title;

    private $course_year;

    private $course_title;

    private $course_diff;

    public function __construct( $bg_color = null, $title = null, $course_year = null, $course_title = null, $course_diff = null ) {
        
        $this->bg_color = $bg_color;
        $this->title = $title;
        $this->course_year = $course_year;
        $this->course_title = $course_title;
        $this->course_diff = $course_diff;
    }

    public function getBgColor() { return $this->bg_color; }

    public function getTitle() { return $this->title; }

    public function getCourseYear() { return $this->course_year; }

    public function getCourseTitle() { return $this->course_title; }

    public function getCourseDiff() { return $this->course_diff; }
}