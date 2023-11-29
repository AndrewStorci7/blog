<?php
/**
 * Config File
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

require_once __DIR__ . "/../vendor/autoload.php";

global $db, $gb_boxes;

use iLearn\Content\Bin\ContentSubject;
use iLearn\Content\Bin\ContentCourse;
use iLearn\Content\Bin\ContentLesson;
use iLearn\Content\ContentFooter;
use iLearn\Content\ContentHeader;
use iLearn\Content\ContentMain;
use iLearn\Box\ArrayListCourse;
use iLearn\Box\ArrayListLesson;
use iLearn\Sql\DBCONN;
use iLearn\Box\Lesson;

if (class_exists("iLearn\\Sql\\DBCONN")) {
    $db = new DBCONN("ilearn");
}

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain = $_SERVER['HTTP_HOST'];

define( 'ILEARNPATH', `{$protocol}://{$domain}` );