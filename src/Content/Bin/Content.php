<?php
/**
 * Super Class of Content Classes
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Bin;

use iLearn\Content\ContentHeader;
use iLearn\Content\ContentFooter;

class Content {

    private $title;

    private $date;

    private ContentHeader $header;

    private ContentFooter $footer;

    public function __construct( $title, $date, ContentHeader $header, ContentFooter $footer ) {
        $this->title = $title;
        $this->date = $date;
        $this->header = $header;
        $this->footer = $footer;
    }
    
    

}