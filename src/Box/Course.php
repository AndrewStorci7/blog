<?php
/**
 * Class that handle the Course Information
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Box;

final class Course {

    private $title;

    private $css_class;

    public function __construct( $title, $css_class ) {
        $this->title = $title;
        $this->css_class = $css_class;
    }

    public function getTitle() { return $this->title; }

    public function getCssClass() { return $this->css_class; }
}