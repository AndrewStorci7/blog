<?php
/**
 * Class that handle Content Lesson Information
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Content\Bin;

use iLearn\Content\ContentHeader;
use iLearn\Content\ContentFooter;
use iLearn\Content\Bin\Content;
use iLearn\Box\ArrayListLesson;
use iLearn\Box\Box;

class ContentLesson extends Content {

    private $array_lessons;

    public function __construct( $title = null, $date = null, ContentHeader $header, ContentFooter $footer, array|string|Lesson $array_lessons = null ) {
        
        parent::__construct( $title, $date, $header, $footer );
        $this->array_lessons = $array_lessons;
    }

    public function draw() {
        return ArrayListLesson::drawCourses( $this->array_lessons );
    }
}