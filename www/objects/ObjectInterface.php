<?php

/**
 * Created by JetBrains PhpStorm.
 * User: Habib
 * Date: 10.02.14
 * Time: 14:05
 * To change this template use File | Settings | File Templates.
 */
public interface Crud{

    public function insert($sql);

    public function update($sql);

    public function delete($sql);

    public function get($sql);
}