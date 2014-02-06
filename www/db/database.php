<?php
/**
 * User: Habib
 * Date: 06.02.14
 * Time: 14:19
 */
require_once "protected/defines.php";
class database
{
    private $host;
    private $db_user;
    private $db_pass;
    private $db_name;

    public function __construct(){
        $this->host = HOST;
        $this->db_user = DB_USER;
        $this->db_pass = DB_USER_PASSWORD;
        $this->db_name = DB_NAME;
        $this->connect($this->host , $this->db_user , $this->db_pass , $this->db_name);
    }

    private  function connect($h , $u , $p , $n){
        mysql_connect($h ,$u ,$p) or die("Cannot connect to database ! <br> See log : ".mysql_error());
        mysql_select_db($n) or die("Cannot select to database ! <br/> See log : ".mysql_error());
    }

}
$db = new database();