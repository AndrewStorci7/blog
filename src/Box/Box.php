<?php
/**
 * Super Class for Course, Lesson and Subject Classe
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Box;

class Box {

    private $id;

    private $title;

    public function __construct( int $id = 0, string $title = null ) {
        $this->id = $id;
        $this->title = $title;
    }

    public function getId() { return $this->id; }

    public function getTitle() { return $this->title; }
}