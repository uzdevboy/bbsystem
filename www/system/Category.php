<?php
/**
 * User: Habib
 * Date: 06.02.14
 * Time: 14:48
 */
require_once "PQL.php";
class Category
{
    private $id;
    private $category_name;
    private $pql;
    public function insert_category(){
        $sql = "";
        $this->pql = new Pql();
        $this->pql->insert($sql);
    }
    public function update_category(){
        $sql = "";
        $this->pql = new Pql();
        $this->pql->update($sql);
    }
    public function delete_category(){
        $sql = "";
        $this->pql = new Pql();
        $this->pql->delele($sql);
    }
    public function get_category(){
        $sql = "";
        $this->pql = new Pql();
        $this->pql->get($sql);
    }


}
