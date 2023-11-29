<?php
/**
 * Class that handle Subject Information
 * 
 * @author Andrea Storci <AndrewStorci7> 
 */

namespace iLearn\Box;

use iLearn\Box\Course;

final class Subject {

    private $id;

    private $title;

    private $short_desc;

    private $hint;

    /* private $content; */

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

    public function __construct( int $id = 0, $title = null, $short_desc = null, $hint = null, $image = null, $difficulty = null, int $year = 0, Course $course = NULL ) {
        $this->id = $id;
        $this->title = $title;
        $this->short_desc = $short_desc;
        $this->hint = $hint;
        $this->image = $image;
        $this->difficulty = $difficulty;
        $this->year = $year;
        $this->course = $course;
    }

    public function getId() { return $this->id; }

    public function getTitle() { return $this->title; }

    public function getShortDesc() { return $this->short_desc; }

    public function getHint() { return $this->hint; }

    /* public function getContent() { return $this->title; } */

    public function getImage() { return $this->image; }

    public function getDifficulty() { return $this->difficulty; }

    public function getYear() { return $this->year; }

    // public function getCourseTitle() { return $this->course->getTitle(); }

    // public function getCourseCssClass() { return $this->course->getCssClass(); }
}
