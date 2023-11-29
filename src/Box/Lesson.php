<?php
/**
 * Class that handle the Lesson Information
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Box;

final class Lesson {

    private $title;

    private $date;

    private $last_upd;

    private $hint;

    private $short_desc;

    private $link;

    private $content;

    public function __construct( $title = null, $date = null, $last_upd = null, $hint = null, $short_desc = null, $link = null, $content = null ) {
        $this->title = $title;
        $this->date = $date;
        $this->last_upd = $last_upd;
        $this->hint = $hint;
        $this->short_desc = $short_desc;
        $this->link = $link;
        $this->content = $content;
    }

    public function getTitle() { return $this->title; }

    public function getDate() { return $this->date; }

    public function getLastUpd() { return $this->last_upd; }

    public function getShortDesc() { return $this->short_desc; }

    public function getLink() { return strtolower( $this->link ); }
}