<?php
/**
 * Class that handle the Course Information
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Box;

use iLearn\Box\Course;
use iLearn\Box\Box;

final class Course extends Box {

    private $css_class;

    private $sku;

    public readonly array|Subject $subject;

    public function __construct( int $id = null, string $title = null, string $css_class = null, string $sku = null, array|Subject $subject = null ) {
        
        parent::__construct( $id, $title );
        $this->css_class = $css_class;
        $this->sku = $sku;
        $this->subject = ( $subject === null ) ? new Subject() : $subject;
    }

    public function getCssClass() { return $this->css_class; }

    public function getSku() { return $this->sku; }
}