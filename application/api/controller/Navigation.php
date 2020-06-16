<?php

namespace app\api\controller;

use app\api\server\NavigationServer; 


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
     * 
     * @return mixed
     */
    public function index()
    {
        $result = NavigationServer::getInstance()->index();
        return return_json($result,100,'msg');
    }

    /**
     * 测试 带model
     * @return mixed
     */
    public function test()
    {
        $result = NavigationServer::getInstance()->getModel();
        return return_json($result);
    }

}