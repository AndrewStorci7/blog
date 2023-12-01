<?php
/**
 * Class that handle Subject Information
 * 
 * @author Andrea Storci <AndrewStorci7> 
 */

namespace iLearn\Box;

use iLearn\Box\Course;
use iLearn\Box\Box;

final class Subject extends Box {

    private $id;

    private $short_desc;

    private $hint;

    // private $content;

    private $image;

    private $difficulty;

    private $year;

    public readonly Course $course;

    /*
    public function __costructor($title, $short_desc, $content, $image, $difficulty, $year, $course) {
        $this->title = $title;
        $this->short_desc = $short_desc;
        $this->content = $content;
        $this->image = $image;
        $this->difficulty = $difficulty;
        $this->year = $year;
        $this->course = $course;
    }
    */

    public function __construct( int $id = 0, $title = null, $short_desc = null, $hint = null, $image = null, $difficulty = null, int $year = 0, Course $course = null ) {
        
        parent::__construct( $title );
        $this->id = $id;
        $this->short_desc = $short_desc;
        $this->hint = $hint;
        $this->image = $image;
        $this->difficulty = $difficulty;
        $this->year = $year;
        $this->course = ( $course === null ) ? new Course() : $course;
    }

    public function getId() { return $this->id; }

    public function getShortDesc() { return $this->short_desc; }

    public function getHint() { return $this->hint; }

    // public function getContent() { return $this->title; }

    public function getImage() { return $this->image; }

    public function getDifficulty() { return $this->difficulty; }

    public function getYear() { return $this->year; }

    // public function getCourse() { return $this->course; }

    // public function getCourseCssClass() { return $this->course->getCssClass(); }
}
