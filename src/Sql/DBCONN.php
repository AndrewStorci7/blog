<?php
/**
 * Database Connection Class
 * For Authentications
 * 
 * @author Andrea Storci
 */

namespace iLearn\Sql;

final class DBCONN {

    /**
     * Database Engine
     * 
     * @var string
     */
    private $db_engine = '';
    
    /**
     * Database Name
     * 
     * @var string
     */
    private $db_name = '';
    
    /**
     * Database's User Name
     */
    private $db_user = '';

    /**
     * Database's User Password
     * 
     * @var string
     */
    private $db_password = '';

    /**
     * Database Host
     * 
     * @var string
     */
    private $db_host = '';

    /**
     * Database Charset
     * 
     * @var string
     */
    private $db_charset = '';

    /**
     * Database Chraset Collate
     * 
     * @var string
     */
    private $db_collate = '';

    /**
     * Instance of \PDO Interface
     * 
     * @var \PDO 
     */
    private $pdo;

    public function __construct( $db_name = 'oauth', $db_host = '127.0.0.1', $db_user = 'root', $db_pw = '' ) {

        $this->db_engine    = 'mysql';
        $this->db_host      = $db_host;
        $this->db_name      = $db_name;
        $this->db_user      = $db_user;
        $this->db_password  = $db_pw;
        $this->db_charset   = '';
        $this->db_collate   = '';
        
        try {
            $this->pdo = new \PDO(
                $this->db_engine . ":host=" . $this->db_host . ";dbname=" . $this->db_name, 
                $this->db_user, 
                $this->db_password, 
                [ \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" ]
            );
        
            $this->pdo->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
            $this->pdo->setAttribute( \PDO::ATTR_EMULATE_PREPARES, false );
        } catch ( \PDOException $e ) {
            exit( "Impossibile connettersi al database: " . $e->getMessage() );
        }
    }

    /**
     * Function to insert a new record into a db's table
     * 
     * @param string
     * @param array
     * 
     * @return  bool|ArrayContentException
     */
    public function insert( string $table_name, array $array_content ) {

        if ( $array_content === null )
            return "Error: Array empty";

        $snz_tb     = $this->sanitize_str( $table_name ); 
        $query      = "INSERT INTO $snz_tb";
        $values     = " VALUES";
        $stmt       = '';
        $bind_type  = \PDO::PARAM_STR;

        foreach ( $array_content as $k => $content ) {

            $snz_k  = $this->sanitize_str( $k );
            $check  = $this->sanitize_str( $content ); 
            if ( $k === array_key_first( $array_content ) ) {

                $query    .= "( $snz_k, ";
                if ( $check === null ) {
                    $values   .= "( '$content', ";
                } else {
                    $values   .= "( :$snz_k, ";
                }
            } else if ( $k === array_key_last( $array_content ) ) {
                
                $query    .= "$snz_k )";
                if ( $check === null ) {
                    $values   .= "'$content' )";
                } else {
                    $values   .= ":$snz_k )";
                }
            } else {

                $query    .= "$snz_k, ";
                if ( $check === null ) {
                    $values   .= "'$content', ";
                } else {
                    $values   .= ":$snz_k, ";
                }
            }
        }
        $query .= " $values;";
        
        // echo $query . "</br></br>";
        $stmt   = $this->pdo->prepare( $query );

        foreach ( $array_content as $k => $content ) {

            $snz_k          = $this->sanitize_str( $k );
            $snz_content    = $this->sanitize_str( $content );

            if ( $snz_content !== null ) {

                switch ( gettype( $snz_content ) ) {
                    case 'string':
                        $bind_type = \PDO::PARAM_STR;
                        break;
                    case 'integer':
                        $bind_type = \PDO::PARAM_INT;
                        break;
                    case 'double':
                        $bind_type = '';
                        break;
                    case 'float':
                        $bind_type = '';
                        break;
                    case 'boolean':
                        $bind_type = \PDO::PARAM_BOOL;
                        break;
                    default:
                        $bind_type = \PDO::PARAM_NULL;
                }
    
                $stmt->bindValue( ":$snz_k", $snz_content, $bind_type );
            }
        }

        $check_exe = $stmt->execute();
        return $check_exe;
    }

    /**
     * @param string $where must be:
     * Array [
     *      'condition|<name_column>' => 'AND|OR|LIKE|NOT|<value_to_upd>',
     *      'condition|<name_column>' => 'AND|OR|LIKE|NOT|<value_to_upd>',
     *      ...
     *      'condition|<name_column>' => 'AND|OR|LIKE|NOT|<value_to_upd>',
     * ]
     * OR
     * '<table_name>.<column_name> = "value" AND|OR|LIKE|NOT'
     */
    public function update( string $table_name, array $array_content, string|array $where = '1' ) {

        if ( $array_content === null ) {
            return "Error: Array empty";
        }

        $snz_tb     = $this->sanitize_str( $table_name ); 
        $query      = "UPDATE $snz_tb SET ";
        $where_cond = " WHERE ";
        $stmt       = '';
        $bind_type  = \PDO::PARAM_STR;

        foreach ( $array_content as $k => $content ) {
            
            $snz_k  = $this->sanitize_str( $k );

            $query  .= "$snz_k = '$content'";

            if ( $k !== array_key_last( $array_content ) )
                $query .= ", ";
        }

        if ( $where === '1' )
            $where_cond .= '1';
        else if ( gettype( $where ) !== 'array' ) 
            return "Error: Array empty";
        else {
            
            $isLike = false;
            foreach ( $where as $c => $condition ) {

                $snz_c = $this->sanitize_str( $c );
                if ( $snz_c === 'condition' ) {
                    if ( $this->sanitize_str( $condition ) === 'AND' || $this->sanitize_str( $condition ) === 'and' || 
                         $this->sanitize_str( $condition ) === 'OR' || $this->sanitize_str( $condition ) === 'or' ||
                         $this->sanitize_str( $condition ) === 'NOT' || $this->sanitize_str( $condition ) === 'not' )
                        $where_cond .= $this->sanitize_str( $condition );
                    else if ( $this->sanitize_str( $condition ) === 'LIKE' || $this->sanitize_str( $condition ) === 'like' )
                        $isLike = true;
                } else if ( $snz_c !== 'condition' ) {
                    if ( $isLike ) {
                        $where_cond .= " $snz_c LIKE '{$this->sanitize_str( $condition )}' ";
                        $isLike = false;
                    } else
                        $where_cond .= " $snz_c = '{$this->sanitize_str( $condition )}' ";
                }
            }
        }

        $query  .= $where_cond;
        // echo $query;
        $stmt   = $this->pdo->prepare( $query );

        // DA SISTEMARE
        // foreach ( $array_content as $k => $content ) {

        //     $snz_k          = $this->sanitize_str( $k );
        //     $snz_content    = $this->sanitize_str( $content );

        //     switch ( gettype( $snz_content ) ) {
        //         case 'string':
        //             $bind_type = \PDO::PARAM_STR;
        //             break;
        //         case 'integer':
        //             $bind_type = \PDO::PARAM_INT;
        //             break;
        //         case 'double':
        //             $bind_type = '';
        //             break;
        //         case 'float':
        //             $bind_type = '';
        //             break;
        //         case 'boolean':
        //             $bind_type = \PDO::PARAM_BOOL;
        //             break;
        //         default:
        //             $bind_type = \PDO::PARAM_NULL;
        //     }

        //     $stmt->bindValue( ":$snz_k", $snz_content, $bind_type );
        // }

        $check_exe = $stmt->execute();
        return $check_exe;
    }

    /**
     * 
     */
    public function delete( string $table_name, array|string $where = '1' ) {

        if ( $where === null ) {
            return "Error: Array empty";
        }

        $snz_tb     = $this->sanitize_str( $table_name ); 
        $query      = "DELETE FROM $snz_tb WHERE ";
        $stmt       = '';
        $bind_type  = \PDO::PARAM_STR;

        if ( gettype( $where ) === 'array' ) {
            
            $isLike = false;
            foreach ( $where as $c => $condition ) {

                $snz_c = $this->sanitize_str( $c );
                if ( $snz_c === 'condition' ) {
                    if ( $this->sanitize_str( $condition ) === 'AND' || $this->sanitize_str( $condition ) === 'and' || 
                         $this->sanitize_str( $condition ) === 'OR' || $this->sanitize_str( $condition ) === 'or' ||
                         $this->sanitize_str( $condition ) === 'NOT' || $this->sanitize_str( $condition ) === 'not' ) 
                        $query .= $this->sanitize_str( $condition );
                    else if ( $this->sanitize_str( $condition ) === 'LIKE' || $this->sanitize_str( $condition ) === 'like' )
                        $isLike = true;
                } else if ( $snz_c !== 'condition' ) {
                    if ( $isLike ) {
                        $query .= " $snz_c LIKE '{$this->sanitize_str( $condition )}' ";
                        $isLike = false;
                    } else
                        $query .= " $snz_c = '{$this->sanitize_str( $condition )}' ";
                }
            }
        } else if ( $where === '1' )
            $query .= '1';
        else
            return "Error: Array empty";

        $stmt = $this->pdo->prepare( $query );
        $check_exe = $stmt->execute();
        return $check_exe;
    }

    /**
     * 
     */
    public function select( string $table_name, array|string $array_columns_to_show = null, array|string $array_tables = null, array|string $array_relations = null, array|string $where = '1' ) {

        $snz_tb     = $this->sanitize_str( $table_name ); 
        $stmt       = '';
        $bind_type  = \PDO::PARAM_STR;

        $query      = "SELECT ";
        if ( $array_columns_to_show === '' || $array_columns_to_show === null )
            $query .= $array_columns_to_show;
        else if ( gettype( $array_columns_to_show ) !== 'array' )
            return "Error: Array empty";
        else {
            foreach ( $array_columns_to_show as $tb => $cn ) {
                if ( gettype( $cn ) === 'array' && count( $cn ) > 1 ) {
                    foreach ( $cn as $i => $column ) {
                        if ( $tb === array_key_last( $array_columns_to_show ) ) {
                            if ( $i !== array_key_last( $cn ) )
                                $query .= "{$this->sanitize_str( $tb )}.{$this->sanitize_str( $column )} AS {$this->sanitize_str( $tb )}_{$this->sanitize_str( $column )}, ";    
                            else $query .= "{$this->sanitize_str( $tb )}.{$this->sanitize_str( $column )} AS {$this->sanitize_str( $tb )}_{$this->sanitize_str( $column )}"; 
                        } else $query .= "{$this->sanitize_str( $tb )}.{$this->sanitize_str( $column )} AS {$this->sanitize_str( $tb )}_{$this->sanitize_str( $column )}, "; 
                    }
                } else {
                    if ( $tb !== array_key_last( $array_columns_to_show ) )
                        $query .= "{$this->sanitize_str( $tb )}.{$this->sanitize_str( $cn )} AS {$this->sanitize_str( $tb )}_{$this->sanitize_str( $cn )}, ";    
                    else $query .= "{$this->sanitize_str( $tb )}.{$this->sanitize_str( $cn )} AS {$this->sanitize_str( $tb )}_{$this->sanitize_str( $cn )}";
                }
            }
        }

        $query .= " FROM $snz_tb";
        if ( $array_tables === '' || $array_tables === null )
            $query .= $array_tables;
        else if ( gettype( $array_tables ) !== 'array' )
            return "Error: Array empty";
        else {
            foreach ( $array_tables as $join => $tb ) {
                if ( $this->sanitize_str( $join ) === 'JOIN' || $this->sanitize_str( $join ) === 'join' ||
                     $this->sanitize_str( $join ) === 'LEFT JOIN' || $this->sanitize_str( $join ) === 'left join' ||
                     $this->sanitize_str( $join ) === 'RIGHT JOIN' || $this->sanitize_str( $join ) === 'right join' ||
                     $this->sanitize_str( $join ) === 'INNER JOIN' || $this->sanitize_str( $join ) === 'inner join' ||
                     $this->sanitize_str( $join ) === 'FULL JOIN' || $this->sanitize_str( $join ) === 'full join' ) {

                    if ( count( $tb ) >= 2 ) {
                        foreach ( $tb as $cn ) {
                            $query .= " {$this->sanitize_str( $join )} {$this->sanitize_str( $cn )} ";
                        }
                    } else {
                        $query .= " {$this->sanitize_str( $join )} {$this->sanitize_str( $tb )} ";
                    }
                }
            }
        }

        if ( $array_relations === '' || $array_relations === null )
            $query .= $array_relations;
        else if ( gettype( $array_relations ) !== 'array' )
            return "Error: Array empty";
        else {

            $query .= " ON ";
            foreach ( $array_relations as $k => $rel ) {
                if ( count( $rel ) != 2 )
                    return "Error: Array empty";
                foreach ( $rel as $tb => $cn ) {
                    if ( $tb === array_key_first( $rel ) )
                        $query .= "{$this->sanitize_str( $tb )}.{$this->sanitize_str( $cn )} = ";
                    else $query .= "{$this->sanitize_str( $tb )}.{$this->sanitize_str( $cn )}";
                }
                if ( $k !== array_key_last( $array_relations ) )
                    $query .= " AND ";
            }
        }

        $query .= " WHERE ";
        if ( $where === '1' || $where === null )
            $query .= '1';
        else if ( gettype( $where ) !== 'array' )
            return "Error: Array empty";
        else {
            $isLike = false;
            foreach ( $where as $c => $condition ) {

                $snz_c = $this->sanitize_str( $c );
                if ( $snz_c === 'condition' ) {
                    if ( $this->sanitize_str( $condition ) === 'AND' || $this->sanitize_str( $condition ) === 'and' || 
                        $this->sanitize_str( $condition ) === 'OR' || $this->sanitize_str( $condition ) === 'or' ||
                        $this->sanitize_str( $condition ) === 'NOT' || $this->sanitize_str( $condition ) === 'not' ) 
                        $query .= " {$this->sanitize_str( $condition )}";
                    else if ( $this->sanitize_str( $condition ) === 'LIKE' || $this->sanitize_str( $condition ) === 'like' )
                        $isLike = true;
                } else if ( $snz_c !== 'condition' ) {
                    if ( $isLike ) {
                        $query .= " $snz_c LIKE :{$this->sanitize_param( $snz_c )}"; // '{$this->sanitize_str( $condition )}' ";
                        $isLike = false;
                    } else
                        $query .= " $snz_c = :{$this->sanitize_param( $snz_c )}"; // '{$this->sanitize_str( $condition )}' ";
                }
            }
        }

        // echo $query . "<br><br>";

        $stmt = $this->pdo->prepare( $query );

        if ( $where !== '1' ) {
            
            foreach ( $where as $c => $condition ) {

                $snz_c          = $this->sanitize_str( $c );
                $snz_condition  = $this->sanitize_str( $condition );
    
                if ( $snz_c !== 'condition' ) {
    
                    switch ( gettype( $snz_condition ) ) {
                        case 'string':
                            $bind_type = \PDO::PARAM_STR;
                            break;
                        case 'integer':
                            $bind_type = \PDO::PARAM_INT;
                            break;
                        case 'double':
                            $bind_type = '';
                            break;
                        case 'float':
                            $bind_type = '';
                            break;
                        case 'boolean':
                            $bind_type = \PDO::PARAM_BOOL;
                            break;
                        default:
                            $bind_type = \PDO::PARAM_NULL;
                    }

                    $stmt->bindValue( ":{$this->sanitize_param( $snz_c )}", $snz_condition, $bind_type );
                }
            }
        }

        $json       = array();
        $stmt->execute();
        $res        = $stmt->fetchAll( \PDO::FETCH_ASSOC );
        $i          = 0;
        foreach ( $res as $row ) {
            $json[$i] = array();
            foreach ( $row as $col => $_r )
                $json[$i][$col] = $_r;
            $i++;
        }
        
        // return json_encode( $json );
        return $json;
    }

    /**
     * Function that sanitize the string, replacing the special character not allowed
     * 
     * @param string
     * 
     * @return string 
     */
    public function sanitize_str( $str ) {

        /*
        if ( strpos( $str, "-----BEGIN PUBLIC KEY-----" ) !== false ) {
            return null;
        }
        */

        $ret = str_replace( 
            array( '\'', "\"", '*', '=', '!', '?', '$', '\\', '/' ),
            '',
            $str
        );

        $ret = filter_var( $ret, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH );

        return $ret;
    }

    /**
     * Used only for parameters for binding
     * 
     * @param string
     * 
     * @return string 
     */
    private function sanitize_param( $str ) {
        return str_replace(
            [ '.' ],
            '_',
            $str
        );
    }
}

