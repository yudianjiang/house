<?php

namespace app\api\model;
/**
 * Class test
 */
class navigation
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
     * 这是备注
     * @return array
     */
    public function index()
    {
        $data = [];
        return $data;
    }

}