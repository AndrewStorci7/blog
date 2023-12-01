<?php
/**
 * Super Class that handle Lateral Bar Information
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Bar;

use iLearn\Box\Box;

class LateralBar {

    private $title;

    private array|Box $courses_lessons;

    public function __construct( string $title = "", array|Box $courses_lessons ) {
        $this->title = $title;
        $this->courses_lessons = $courses_lessons;
    }

    public function getTitle() { return $this->title; }

    public function drawLateralBar( $_course = null, $_year = null, $_subject = null ) {

        $ret = "";
        if ( ! empty( $this->courses_lessons ) ) {
            $ret .= "<div class=\"title-lateral-navbar position-relative\">
                        <h4 class=\"position-absolute top-50 start-50 translate-middle\">
                            {$this->getTitle()}
                        </h4>
                    </div>";
            foreach ( $this->courses_lessons as $i => $course ) {
                $class_fix_padding = ( $i === array_key_first( $this->courses_lessons ) ) ? "fix-margin-first-lb" : "";
                $ret .= "<div class=\"dropdown-box-information\"><div class=\"information-courses $class_fix_padding \">{$course['course']->getTitle()} <svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"15\" height=\"15\" viewBox=\"0,0,256,256\"
                        style=\"fill:#000000;\">
                        <g fill=\"#ffffff\" fill-rule=\"nonzero\" stroke=\"none\" stroke-width=\"1\" stroke-linecap=\"butt\" stroke-linejoin=\"miter\" stroke-miterlimit=\"10\" stroke-dasharray=\"\" stroke-dashoffset=\"0\" font-family=\"none\" font-weight=\"none\" font-size=\"none\" text-anchor=\"none\" style=\"mix-blend-mode: normal\"><g transform=\"scale(8,8)\"><path d=\"M16,3c-7.16797,0 -13,5.83203 -13,13c0,7.16797 5.83203,13 13,13c7.16797,0 13,-5.83203 13,-13c0,-7.16797 -5.83203,-13 -13,-13zM16,5c6.08594,0 11,4.91406 11,11c0,6.08594 -4.91406,11 -11,11c-6.08594,0 -11,-4.91406 -11,-11c0,-6.08594 4.91406,-11 11,-11zM15,10v5h-5v2h5v5h2v-5h5v-2h-5v-5z\"></path></g></g>
                        </svg></div><div class=\"dropdown-box-under hide\" data-show=\"false\">";

                if ( ! empty( $course['lessons'] ) ) {
                    foreach ( $course['lessons'] as $i => $lesson ) {
                        $ret .= "<a href=\"/blog/$_course/$_year/$_subject/{$lesson->getLink()}/\" class=\"dropdown-lb\">
                                    <img style=\"width: 10px; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5klEQVR4nO2TSw6CQBBE30YOo16InXgV2IpGwh3UK6hHkI14ED87NRiSJpl0BHvcqImVVEKG7qqZ/sAfv4AhMANK4CIs5az+9zYCIAfuQNXCG5BJrLf4tkNYc+NrkiuBHRADI2H9XaiYuVV8KE9vEhdA2MKlKtfAYjBTNw9f0H1JajE4OAmxwSBx4vcWg7OTEBkMIif+ZDE4eRqMnfjjV5Ro6iQUnk2eWAwGakyXHeIrNaZ9jMjUEhVSikiYPFm0erzNCGT9KyPXQM/HoDGZq3JpXuXm3uK6J6lMyFm4l4aaa/7H5/AAFx6UWjNj8D4AAAAASUVORK5CYII=\">
                                    {$lesson->getTitle()}
                                </a>";
                    }
                }
                $ret .= "</div></div>";
            }
        }
        return $ret;
    }
}