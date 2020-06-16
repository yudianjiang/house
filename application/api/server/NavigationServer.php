<?php

namespace app\api\server;


use app\api\model\navigation;

class NavigationServer
{

    //保存全局实例
    private static $instance;

    //单例访问统一入口
    public static function getInstance()
    {
        if(!(self::$instance instanceof self))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }


    /**
     * 导航数据
     * @return array
     */
    public function index()
    {
        $data = navigation::getInstance()->index();
        return $data;
    }

    /**
     * 添加导航
     * @return mixed
     */
    public function add($data = [])
    {
        $data = navigation::getInstance()->add($data);
        return $data;
    }
}