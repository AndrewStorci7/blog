<?php
/**
 * Class that handle Main Content Informations
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Content;

use iLearn\Content\Bin\Content;
use iLearn\Bar\LateralBar;

final class ContentMain {

    private Content $content_page;

    private LateralBar $lateral_bar;

    public function __construct( Content $content_page, LateralBar $lateral_bar ) {
        $this->content_page = $content_page;
        $this->lateral_bar = $lateral_bar;
    }

    public function getContentPage() { return $this->content_page; }

    public function getLateralBar() { return $this->lateral_bar; }
}