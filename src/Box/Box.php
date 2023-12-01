<?php
/**
 * Super Class for Course, Lesson and Subject Classe
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Box;

class Box {

    private $title;

    public function __construct( $title = null ) {
        $this->title = $title;
    }

    public function getTitle() { return $this->title; }
}