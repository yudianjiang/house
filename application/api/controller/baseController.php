<?php
/**
 * @file  baseController
 * @since  2020/6/15 17:03
 * @author  Administrator
 * @version  1.1
 *
 */


namespace app\api\controller;


use think\Controller;
use think\Exception;
use think\Request;
use think\Validate;

/**
 * Class baseController
 * @package app\api\controller
 */
class baseController extends Validate
{
    protected $validate;

    public function __construct()
    {
        $this->validate = new Validate();
    }

    /**
     * 校验
     * @return bool
     */
    public function goCheck($rules)
    {
        $rule = [
            'name'  => 'require|max:25',
            'age'   => 'number|between:1,120',
            'email' => 'email',
        ];

        $msg = [
            'name' => '名称必须',
            'name.max'     => '名称最多不能超过25个字符',
            'age.number'   => '年龄必须是数字',
            'age.between'  => '年龄只能在1-120之间',
            'email'        => '邮箱格式错误',
        ];

        $data = [
            'name'  => 'thinkphp',
            'age'   => 3123123,
            'email' => 'thinkphp@qq.com',
        ];

        $validate = new Validate($rule, $msg);
        $result   = $validate->check($data);
        if(!$result){
            echo $validate->getError();
        }  else {
            return true;
        }
    }

}