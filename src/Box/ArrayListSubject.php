<?php
/**
 * Class that handle an Array of BoxSubject
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Box;

class ArrayListSubject {

    public static function drawBoxes( array|string $array ) {

        $res = '';
        if ( ! empty( $array ) ) {
            foreach ( $array as $i => $box ) {

                $ct = $box->course->getSku(); // Course Sku
                $lower_ct = strtolower( $ct );
                $lower_im = strtolower( $box->getImage() );
                $lower_css_class = strtolower( $box->course->getCssClass() );
                $lower_diff = strtolower( $box->getDifficulty() );

                $res .= "<div class=\"col-4\">
                            <div class=\"card-note\">
                                <h3>{$box->getTitle()}</h3>
                                <img class=\"img-{$lower_im}\" src=\"assets/webp/{$lower_im}.webp\">
                            </div>
                            <div class=\"content\">
                                <div class=\"category\">
                                    <div class=\"mini-box primary primary-{$box->getYear()}y\">
                                    </div>
                                    <div class=\"mini-box secondary {$lower_css_class}\">
                                        {$ct}
                                    </div>
                                    <div class=\"mini-box difficulty-{$lower_diff}\"></div>
                                </div>
                                <div class=\"text\">
                                    <span>
                                        {$box->getShortDesc()}
                                    </span>
                                    <a href=\"/blog/{$lower_ct}/{$box->getyear()}/{$lower_im}/\">
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