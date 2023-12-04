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

        if ( ! empty( $this->array ) && $this->array !== null ) {
            
            if ( get_class( $this->array[0] ) == 'iLearn\\Box\\Course' ) {
                return ArrayListCourse::drawCourses( $this->array );
            } else if ( get_class( $this->array[0] ) == 'iLearn\\Box\\Lesson' ) {
                return ArrayListLesson::drawLessons( $this->array );
            } else if ( get_class( $this->array[0] ) == 'iLearn\\Box\\Subject' ) {
                return ArrayListSubject::drawBoxes( $this->array );
            } else {
                return 'Errore';
            }
        } else {
            return "<div class=\"container position-relative\" style=\"height: 500px\">
                        <div class=\"container position-absolute top-50 start-50 translate-middle\" style=\"height: auto\">
                            <div class=\"container position-relative box-sw-tailwind\" style=\"background-color: var(--clr-box-spotify); border-radius: 20px; height: 200px;\">
                                <p class=\"position-absolute top-0 start-50 translate-middle-x\" style=\"font-size: 30px; top: 20px !important;\">Ancora Nessuna Lezione</p>
                                <img style=\"top: 55% !important;\" class=\"position-absolute top-50 start-50 translate-middle\" src=\"data:image/png;base64,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\">
                            </div>
                        </div>
                    </div>";
        }
    }
}