<?php
/**
 * Class that handle Content Course Information
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Content\Bin;

use iLearn\Content\ContentHeader;
use iLearn\Content\ContentFooter;
use iLearn\Content\Bin\Content;
use iLearn\Box\ArrayListCourse;
use iLearn\Box\Course;

class ContentCourse extends Content {
    
    private $array_courses;

    public function __construct( $title = null, $date = null, ContentHeader $header, ContentFooter $footer, array|string|Course $array_courses = null ) {
        
        parent::__construct( $title, $date, $header, $footer );
        $this->array_courses = $array_courses;
    }

    public function draw() {
        return ArraListCourse::drawCourses( $this->array_courses );
    }
}