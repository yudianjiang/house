<?php

namespace app\api\controller;

use app\api\server\NavServer; 


use think\Controller;

/**
 * Class index
 * @package app\api\controller
 */
class Navigation extends Controller
{
    
    

    public function _initialize()
    {
        parent::_initialize();
        

    }

    /**
     * 测试
     * @return mixed
     */
    public function index()
    {
        $result = NavServer::getInstance()->index();
        return return_json($result,100,'msg');
    }

    /**
     * 测试 带model
     * @return mixed
     */
    public function test()
    {
        $result = NavServer::getInstance()->getModel();
        return return_json($result);
    }

}