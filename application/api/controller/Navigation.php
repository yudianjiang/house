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
     * 导航首页
     * @return mixed
     */
    public function index()
    {
        $result = NavigationServer::getInstance()->index();
        return return_json($result,100,'导航数据');
    }


    /**
     * 添加导航
     * @return mixed
     */
    public function add()
    {
        $result = NavigationServer::getInstance()->add();
        return return_json($result,100,'msg');
    }

    /**
     * 修改导航
     * @return mixed
     */
    public function edit()
    {
        $result = NavigationServer::getInstance()->edit();
        return return_json($result);
    }

}