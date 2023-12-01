<?php
/**
 * Super Class of Content Classes
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Content\Bin;

use iLearn\Content\ContentHeader;
use iLearn\Content\ContentFooter;
use iLearn\Box\ArrayListSubject;
use iLearn\Box\ArrayListCourse;
use iLearn\Box\ArrayListLesson;
use iLearn\Box\Box;

class Content {

    private $title;

    private $date;

    private ContentHeader $header;

    private ContentFooter $footer;

    private array|Box $array;

    public function __construct( $title = null, $date = null, ContentHeader $header = null, ContentFooter $footer = null, array|string|Box $array = null ) {
        
        $this->title = $title;
        $this->date = $date;
        $this->header = ( $header === null ) ? new ContentHeader() : $header;
        $this->footer = ( $footer === null ) ? new ContentFooter() : $footer;
        $this->array = $array;
    }

    public function draw() {

        if ( get_class( $this->array[0] ) == 'iLearn\\Box\\Course' ) {
            return ArrayListCourse::drawCourses( $this->array );
        } else if ( get_class( $this->array[0] ) == 'iLearn\\Box\\Lesson' ) {
            return ArrayListLesson::drawLessons( $this->array );
        } else if ( get_class( $this->array[0] ) == 'iLearn\\Box\\Subject' ) {
            return ArrayListSubject::drawBoxes( $this->array );
        } else {
            echo 'Errore';
        }
    }
}