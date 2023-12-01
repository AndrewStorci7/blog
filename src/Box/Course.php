<?php
/**
 * Class that handle the Course Information
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Box;

use iLearn\Box\Box;

final class Course extends Box {

    private $css_class;

    private $sku;

    public function __construct( $title = null, $css_class = null, $sku = null ) {
        
        parent::__construct( $title );
        $this->css_class = $css_class;
        $this->sku = $sku;
    }

    public function getCssClass() { return $this->css_class; }

    public function getSku() { return $this->sku; }
}