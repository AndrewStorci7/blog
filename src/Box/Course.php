<?php
/**
 * Class that handle the Course Information
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Box;

final class Course {

    private $title;

    private $css_class;

    private $sku;

    public function __construct( $title = null, $css_class = null, $sku = null ) {
        $this->title = $title;
        $this->css_class = $css_class;
        $this->sku = $sku;
    }

    public function getTitle() { return $this->title; }

    public function getCssClass() { return $this->css_class; }

    public function getSku() { return $this->sku; }
}