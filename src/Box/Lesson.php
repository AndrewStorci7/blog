<?php
/**
 * Class that handle the Lesson Information
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Box;

use iLearn\Box\Subject;
use iLearn\Box\Box;

final class Lesson extends Box {

    private $date;

    private $last_upd;

    private $hint;

    private $short_desc;

    private $link;

    public Subject $subject;

    private $content;

    public function __construct( $title = null, $date = null, $link = null, $last_upd = null, $hint = null, $short_desc = null, Subject $subject = null, $content = null ) {
        
        parent::__construct( $title );
        $this->date = $date;
        $this->last_upd = $last_upd;
        $this->hint = $hint;
        $this->short_desc = $short_desc;
        $this->link = $link;
        $this->subject = ( $subject === null ) ? new Subject() : $subject;
        $this->content = $content;
    }

    public function getDate() { return $this->date; }

    public function getLastUpd() { return $this->last_upd; }

    public function getShortDesc() { return $this->short_desc; }

    public function getLink() { return strtolower( $this->link ); }

    // public function getSubject() { return $this->subject; }
}