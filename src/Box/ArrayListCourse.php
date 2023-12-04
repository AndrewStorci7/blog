<?php
/**
 * Class that handle a List of Course Classes Infromation
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Box;

class ArrayListCourse {

    public static function drawCourses( array|string $array ) {

        $res = '';
        if ( ! empty( $array ) ) {

            foreach ( $array as $i => $course ) {

                $res .= "<div class=\"col-4\">
                            <div class=\"ciupapi\" data-link=\"/blog/{$lower_ct}/{$lower_im}/\">
                                <div class=\"card-note fix-h3\">
                                    <h3>{$course->getTitle()}</h3>
                                </div>
                                <div class=\"content\">
                                    <div class=\"category\">
                                        <div class=\"mini-box primary primary-date\">

                                        </div>
                                    </div>
                                    <div class=\"text\">
                                        <span>
                                            {$course->getShortDesc()}
                                        </span>
                                        <a href=\"/blog/{$lower_ct}/{$lower_im}/\">
                                            Vai agli appunti
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>";
            }
        }
        return "empty";
    }

}