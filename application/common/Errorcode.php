<?php
/**
 * @file  ErrorCode
 * @since  2020/6/16 13:52
 * @author  Administrator
 * @version  1.1
 *
 */


namespace app\common;


class ErrorCode
{

    const OK = '0';
    //通用错误code
    const ERROR                 = '100001';
    const UNKNOW_ERROR          = '100002';
    const PARAM_EMPTY           = '100003';


    const ADD_SUCCESS           = '200001';
    const ADD_ERROR             = '200002';
    const EDIT_SUCCESS          = '200003';
    const EDIT_ERROR            = '200004';

    # 上传状态码
    const UPLOAD_EXCEL_OVERTIME            = '300001';
    const UPLOAD_EXCEL_ERROR               = '300002';

    static public $message = array(
        self::OK                                => '成功',
        self::ERROR                             => '错误',
        self::UNKNOW_ERROR                      => '未知错误',
        self::PARAM_EMPTY                       => '参数错误',

        self::ADD_SUCCESS                       => '添加成功',
        self::ADD_ERROR                         => '添加失败',
        self::EDIT_SUCCESS                      => '编辑成功',
        self::EDIT_ERROR                        => '编辑失败',
        self::UPLOAD_EXCEL_OVERTIME             => '上传超时',
        self::UPLOAD_EXCEL_ERROR                => '上传错误',



    );

    static public function getMsg($code)
    {
        if (in_array($code, array_keys(self::$message))) {
            return self::$message[$code];
        }

        return '';
    }

}