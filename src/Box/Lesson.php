<?php
/**
 * Class that handle the Lesson Information
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Box;

use iLearn\Box\Box;

final class Lesson extends Box {

    private $date;

    private $last_upd;

    private $hint;

    private $short_desc;

    private $link;

    private $content;

    public function __construct( int $id = 0, string $title = null, string $date = null, string $link = null, string $last_upd = null, string $hint = null, string $short_desc = null, string $content = null ) {
        
        parent::__construct( $id, $title );
        $this->date = $date;
        $this->last_upd = $last_upd;
        $this->hint = $hint;
        $this->short_desc = $short_desc;
        $this->link = $link;
        $this->content = $content;
    }

    public function getDate() { return $this->date; }

    public function getLastUpd() { return $this->last_upd; }

    public function getHint() { return $this->hint; }

    public function getContent() { return $this->content; }

    public function getShortDesc() { return $this->short_desc; }

    public function getLink() { return strtolower( $this->link ); }
}