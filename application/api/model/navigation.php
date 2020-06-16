<?php

namespace app\api\model;
/**
 * Class test
 */
use think\Db;
class navigation
{
    //保存全局实例
    private static $instance;

    //单例访问统一入口
    public static function getInstance()
    {
        if(!(self::$instance instanceof self))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * 导航栏数据
     * @return array
     */
    public function index()
    {
        $data = Db::name('navigation')->field('id,name,url,sort,status')->select();
        return $data;
    }

    /**
     * 添加导航
     * @return array
     */
    public function add($data = [])
    {
        $res = Db::name('navigation')->insert($data);
        return $res;
    }

    /**
     * 修改导航
     * @return array
     */
    public function edit($data = [])
    {
        $res = Db::name('navigation')->where('id',$data['id'])->update($data);
        return $res;
    }

    /**
     * 删除导航
     * @return array
     */
    public function del($data = [])
    {
        $res = Db::name('navigation')->where('id',$id)->del();
        return $res;
    }

}