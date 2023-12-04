<?php
/**
 * Class that handle Subject Information
 * 
 * @author Andrea Storci <AndrewStorci7> 
 */

namespace iLearn\Box;

use iLearn\Box\Lesson;
use iLearn\Box\Box;

final class Subject extends Box {

    private $short_desc;

    private $hint;

    private $image;

    private $difficulty;

    private $year;

    public readonly array|Lesson $lesson;

    public function __construct( int $id = 0, string $title = null, string $short_desc = null, string $hint = null, string $image = null, string $difficulty = null, int $year = 0, array|Lesson $lesson = null ) {
        
        parent::__construct( $id, $title );
        $this->short_desc = $short_desc;
        $this->hint = $hint;
        $this->image = $image;
        $this->difficulty = $difficulty;
        $this->year = $year;
        $this->course = ( $course === null ) ? new Course() : $course;
    }

    public function getShortDesc() { return $this->short_desc; }

    public function getHint() { return $this->hint; }

    public function getImage() { return $this->image; }

    public function getDifficulty() { return $this->difficulty; }

    public function getYear() { return $this->year; }
}
