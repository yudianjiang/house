<?php
/**
 * @file  baseController
 * @since  2020/6/15 17:03
 * @author  Administrator
 * @version  1.1
 *
 */


namespace app\api\controller;


use app\common\Dict;
use app\common\ErrorCode;
use think\Request;
use think\Validate;


/**
 * Class baseController
 * @package app\api\controller
 */
class baseController extends Validate
{

    /**
     * 校验
     * @return bool
     */
    public function goCheck()
    {
        if(Request::instance()->isOptions()){
            return_json();
        }
        $action_name = Request::instance()->action(true);
        if (property_exists($this, '_validate') &&
            array_key_exists($action_name,$this->_validate) &&
            is_array($this->_validate[$action_name]) &&
            !empty($this->_validate[$action_name])){
            $this->validateParams($this->_validate[$action_name]);
        }
    }

    /**
     * 验证
     * @param array $rules
     * @return bool
     */
    private function validateParams(array $rules)
    {
        # 获取请求方法
        isset($rules[Dict::V_request_method])?$data = $_GET:$data = $_POST;
//        $msg = [
//            'name' => '名称必须',
//            'name.max'     => '名称最多不能超过25个字符',
//            'age.number'   => '年龄必须是数字',
//            'age.between'  => '年龄只能在1-120之间',
//            'email'        => '邮箱格式错误',
//        ];
        //转化格式
        $rule = $rules[Dict::V_field_name];
        foreach($rule as $k => $v){
            if(isset($v[Dict::V_validate_rule])){
                $rule[$k] = Dict::V_require.'|'.$v[Dict::V_validate_rule];
            }else{
                $rule[$k] = Dict::V_require;
            }
        }
        //验证
        $validate = new Validate($rule);
        $result   = $validate->check($data);
        if(!$result){
            return return_json([],ErrorCode::PARAM_EMPTY);
        }  else {
            return true;
        }

    }

}