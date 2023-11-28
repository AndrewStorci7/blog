<?php
/**
 * Class that handle an Array of BoxSubject
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Box;

class ArrayListBoxSubject {

    public static function drawBoxes( array|string $array ) {

        $res = '';
        if ( ! empty( $array ) ) {
            foreach ( $array as $i => $box ) {
                $res .= "<div class=\"col-4\">
                            <div class=\"card-note\">
                                <h3>{$box->getTitle()}</h3>
                                <img class=\"img-{$box->getImage()}\" src=\"assets/webp/{$box->getImage()}.webp\">
                            </div>
                            <div class=\"content\">
                                <div class=\"category\">
                                    <div class=\"mini-box primary primary-{$box->getYear()}y\">
                                    </div>
                                    <div class=\"mini-box secondary {$box->getCourseCssClass()}\">
                                        {$box->getCourseTitle()}
                                    </div>
                                    <div class=\"mini-box difficulty-{$box->getDifficulty()}\"></div>
                                </div>
                                <div class=\"text\">
                                    <span>
                                        {$box->getShortDesc()}
                                    </span>
                                    <a href=\"{$box->getLink()}\">
                                        Vai agli appunti
                                    </a>
                                </div>
                            </div><!-- END ALGORITMI CARD -->
                        </div>";
            }
            return $res;
        }
        return "Vuoto";
    }
}