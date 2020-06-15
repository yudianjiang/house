<?php
/**
 * @file  Test
 * @since  2020/6/15 15:19
 * @author  Administrator
 * @version  1.1
 *
 */


namespace app\api\controller;


use app\api\server\TestServer;
use think\Controller;
use think\Validate;

/**
 * Class Test
 * @package app\api\controller
 */
class Test extends Controller
{
    protected $name;

    public function _initialize()
    {
        $this->name = '属性';
        parent::_initialize();
//        $rules = [
//            'name'  => 'require|max:25',
//            'age'   => 'number|between:1,120',
//        ];
//        $validate = new Validate($rules);
//        dump($validate);die;

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