<?php
/**
 * @file  tt
 * @since  2020/6/15 11:18
 * @author  yudj
 * @version  1.1
 *
 */

namespace app\api\server;


use app\api\model\test;

class TestServer
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

    /**
     * 这是备注
     * @return mixed
     */
    public function getModel()
    {
        $data = test::getInstance()->index();
        return $data;
    }
}