<?php
/**
 * @file  test
 * @since  2020/6/15 14:01
 * @author  yudj
 * @version  1.1
 *
 */

namespace app\api\model;
/**
 * Class test
 */
class test
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