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
use app\common\Dict;
use think\Controller;
use think\Validate;

/**
 * Class Test
 * @package app\api\controller
 */
class Test extends baseController
{
    protected $name;

    public function __construct()
    {
        $this->goCheck($this->_validate);

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

    /**
     * 验证规则
     * @var \array[][]
     */
    protected $_validate = array(
        # 获取验证码
        'test'   => array(
            Dict::V_request_method  => 'get',
            Dict::V_field_name => array(
                'name' => array(
                    Dict::V_require => true,
                    Dict::V_validate_rule  => Dict::Number_Preg,
                ),
                'age'  => array(
                    Dict::V_require => true
                )
            )
        ),
    );


}