<?php
/**
 * User: Habib
 * Date: 06.02.14
 * Time: 14:49
 */
class  Pql{
    private $sql;
    private $fields = array();
    private $values = array();

    public  function insert($sql){
        $this-$sql = $sql;
        mysql_query($this->sql) or die("Cannot insert to database ! <br/> See log :".mysql_error());
    }


    public function update($sql){
        $this-$sql = $sql;
        mysql_query($this->sql) or die("Cannot insert to database ! <br/> See log :".mysql_error());
    }
    public function delele($sql){
        $this-$sql = $sql;
        mysql_query($this->sql) or die("Cannot insert to database ! <br/> See log :".mysql_error());
    }

    public function get($sql){
        $this-$sql = $sql;
        mysql_query($this->sql) or die("Cannot insert to database ! <br/> See log :".mysql_error());
    }
}