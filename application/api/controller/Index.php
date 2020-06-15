<?php
/**
 * @file  index
 * @since  2020/6/15 11:19
 * @author  yudj
 * @version  1.1
 *
 */
namespace app\api\controller;

use app\api\server\TestServer;

use think\Controller;

/**
 * Class index
 * @package app\api\controller
 */
class Index extends Controller
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
        $result = TestServer::getInstance()->index();
        return return_json($result,100,'msg');
    }

    /**
     * 测试 带model
     * @return mixed
     */
    public function test()
    {
        $result = TestServer::getInstance()->getModel();
        return return_json($result);
    }


}