<?php
/**
 * Class that handle Functions
 * 
 * @author Andrea Storci <AndrewStorci7>
 */

namespace iLearn\Bin;

final class Functions {

    public static function fetchCourse( string $where_course_sku_clause, int $fn = 1, int $year = 0 ) {

        if ( $where_course_sku_clause !== null && $where_course_sku_clause !== "" && $where_course_sku_clause !== "undefined" ) {
        
            global $db;

            $ret = $db->select(
                "course",
                [
                    "course" => [ "id", "title", "sku" ],
                    "typecourse" => "css_class"
                ],
                [ "JOIN" => "typecourse" ],
                [ 
                    "course" => "type_course", 
                    "typecourse" => "id" 
                ],
                [ "course.sku" => $where_course_sku_clause ]
            );

            if ( ! empty( $ret ) ) {

                switch ( $fn ) {
                    case 0: {
                        $subjects = self::fetchSubject( $ret[0]['course_sku'] );
                        return new iLearn\Box\Course( $ret[0]['course_id'], $ret[0]['course_title'], $ret[0]['typecourse_css_class'], $ret[0]['course_sku'], $subjects );
                    }
                    case 1: {
                        $subjects = self::fetchSubject( $ret[0]['course_sku'], $year );
                        return new iLearn\Box\Course( $ret[0]['course_id'], $ret[0]['course_title'], $ret[0]['typecourse_css_class'], $ret[0]['course_sku'], $subjects );
                        break;
                    }
                    case 2: {
                        $lessons =  
                        break;
                    }
                }
            }

        } else {
            return "Error";
        }
    }

    public static function fetchSubject( string $where_course_sku_clause, int $where_course_year_clause = 0 ) {

        if ( $where_course_sku_clause !== null && $where_course_sku_clause !== "" && $where_course_sku_clause !== "undefined" ) {
        
            global $db;

            $where_clause = null;
            if ( $where_course_year_clause !== 0 ) {
                $where_clause = [ "course.sku" => $where_course_sku_clause, "subject.year" => $where_course_year_clause, "condition" => "ORDER BY", "order_by" => "subject.title", "condition_2" => "ASC" ];
            } else {
                $where_clause = [ "course.sku" => $where_course_sku_clause, "condition" => "ORDER BY", "order_by" => "subject.title", "condition_2" => "ASC" ];
            }

            $select = $db->select(
                "subject",
                [
                    "subject" => [ "id", "title", "short_desc", "image", "difficulty", "year", "hint" ],
                ],
                [ "JOIN" => "course" ],
                [ 
                    "course" => "id", 
                    "subject" => "id_course" 
                ],
                $where_clause
            );

            $array_ret = [];
            if ( ! empty( $select ) ) {

                foreach ( $select as $i => $_sub ) {
                    $sub = new iLearn\Box\Subject( $_sub['subject_id'], $_sub['subject_title'], $_sub['subject_short_desc'], $_sub['subject_hint'], $_sub['subject_image'], $_sub['subject_difficulty'], $_sub['subject_year'], null );
                    array_push( $array_ret, $sub );
                }
            } else {
                // Handle Error or Empty Select
                return 0;
            }

            return $array_ret;
        } else {
            return "Error";
        }
    }

    public static function fetchLesson( string $where_course_sku_clause, string $where_subj_img_clause, int $where_subj_year_clause ) {

        if ( $where_course_sku_clause !== null && $where_course_sku_clause !== "" && $where_course_sku_clause !== "undefined" ) {
        
            global $db;

            $array_ret = [];

            $select = $db->select(
                "lesson",
                [
                    "lesson" => [ "id", "title", "date", "last_upd", "short_desc", "hint", "link", "content" ]
                ],
                [ "JOIN" => [ "subject", "course" ] ],
                [ 
                    [ "course" => "id", "subject" => "id_course" ],
                    [ "lesson" => "id_subject", "subject" => "id" ] 
                ],
                [ "course.sku" => $where_course_sku_clause, "condition" => "AND", "subject.image" => $where_subj_img_clause, "condition_2" => "AND", "subject.year" => $where_subj_year_clause ]
            );

            if ( ! empty( $select ) ) {

                foreach ( $select as $i => $_les ) {
                    $les = new iLearn\Box\Lesson( $_les['lesson_id'], $_les['lesson_title'], $_les['lesson_date'], $_les['lesson_link'], $_les['lesson_last_upd'], $_les['lesson_hint'], $_les['lesson_short_desc'], $_les['lesson_content'] );
                    array_push( $array_ret, $les );
                }
            } else {
                // Handle Error or Empty Select
                return 0;
            }

            return $array_ret;
        } else {
            return "Error";
        }
    }
}