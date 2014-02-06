<?php
/**
 * User: Habib
 * Date: 06.02.14
 * Time: 15:41
 */
class App{
    private $app_title;
    private $app_logo;
    private $app_desc;
    private $app_path;
    private $app_meta_datas;
    private $app_tags;

    public function setAppTags($app_tags)
    {
        $this->app_tags = $app_tags;
    }

    public function getAppTags()
    {
        return $this->app_tags;
    }

    public function setAppDesc($app_desc)
    {
        $this->app_desc = $app_desc;
    }

    public function getAppDesc()
    {
        return $this->app_desc;
    }

    public function setAppLogo($app_logo)
    {
        $this->app_logo = $app_logo;
    }

    public function getAppLogo()
    {
        return $this->app_logo;
    }

    public function setAppMetaDatas($app_meta_datas)
    {
        $this->app_meta_datas = $app_meta_datas;
    }

    public function getAppMetaDatas()
    {
        return $this->app_meta_datas;
    }

    public function setAppPath($app_path)
    {
        $this->app_path = $app_path;
    }

    public function getAppPath()
    {
        return $this->app_path;
    }

    public function setAppTitle($app_title)
    {
        $this->app_title = $app_title;
    }

    public function getAppTitle()
    {
        return $this->app_title;
    }




}