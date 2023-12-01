<?php
/**
 * Class that handle a List of Lesson Classes Infromation
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Box;

use iLearn\Box\Box;

class ArrayListLesson {

    public static function drawLessons( array|string|Box $array, $_course = null, $_year = null, $_subject = null ) {

        $ret = "";
        if ( ! empty( $array ) ) {
            
            foreach ( $array as $i => $lesson ) {

                $reduce_text = substr( $lesson->getShortDesc(), 0, 50 ) . " ...";
                $ret .= "<div class=\"col-4\">
                            <div class=\"card-note lesson-box\">
                                <h3>{$lesson->getTitle()}</h3>
                            </div>
                            <div class=\"content\">
                                <div class=\"category\">
                                    <div class=\"mini-box primary\">
                                        {$lesson->getDate()}
                                    </div>
                                </div>
                                <div class=\"text\">
                                    <span>
                                        {$reduce_text}
                                    </span>
                                    <a href=\"/blog/{$lesson->subject->course->getSku()}/{$lesson->subject->getYear()}/{$lesson->subject->getImage()}/{$lesson->getLink()}/\">
                                        Vai alla Lezione
                                    </a>
                                </div>
                            </div>
                        </div>";
            }
        }
        return $ret;
    }
}