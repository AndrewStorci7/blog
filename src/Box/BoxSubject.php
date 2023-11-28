<?php
/**
 * Class that handle Subject Information
 * 
 * @author Andrea Storci <AndrewStorci7> 
 */

namespace iLearn\Box;

use iLearn\Box\Course;

final class BoxSubject {

    private $title;

    private $short_desc;

    /* private $content; */

    private $image;

    private $difficulty;

    private $year;

    private $course;

    private $link;

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

    public function __construct($title, $short_desc, $image, $difficulty, $year, Course $course, $link) {
        $this->title = $title;
        $this->short_desc = $short_desc;
        $this->image = $image;
        $this->difficulty = $difficulty;
        $this->year = $year;
        $this->course = $course;
        $this->link = $link;
    }

    public function getTitle() { return $this->title; }

    public function getShortDesc() { return $this->short_desc; }

    /* public function getContent() { return $this->title; } */

    public function getImage() { return $this->image; }

    public function getDifficulty() { return $this->difficulty; }

    public function getYear() { return $this->year; }

    public function getCourseTitle() { return $this->course->getTitle(); }

    public function getCourseCssClass() { return $this->course->getCssClass(); }

    public function getLink() { return $this->link; }
}
