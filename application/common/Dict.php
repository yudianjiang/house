<?php
/**
 * @file  Dict
 * @since  2020/6/16 11:41
 * @author  Administrator
 * @version  1.1
 *
 */


namespace app\common;


class Dict
{
    # ---- 验证对象属性定义 ----
    # 请求方法字段
    const V_request_method = 'method';
    # 必填字段
    const V_require        = 'require';
    # 过滤规则
    const V_filter         = 'filter';
    # 验证规则
    const V_validate_rule  = 'validate_rule';
    # 字段名
    const V_field_name     = 'field';
    # 值类型
    const V_value_type     = 'value_type';

    # ---- 正则 ------
    # 手机号正则
    const Phone_Preg                = "#^1[3-9]\d{9}$#";
    # 姓名正则
    const Name_Preg                 = "#[\x{4e00}-\x{9fa5}\w\d]{1,20}#u";
    # 密码正则
    const Pass_Preg                 = "#[a-zA-Z\d]{6,16}#";
    # 纯数字正则
    const Number_Preg               = "\d+";



}