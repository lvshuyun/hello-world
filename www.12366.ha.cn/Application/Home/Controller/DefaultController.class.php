<?php
/**
 * Created by PhpStorm.
 * User: taffy
 * Date: 15/4/25
 * Time: 09:51
 */

namespace Home\Controller;
use Think\Controller;
class DefaultController extends Controller {

    public function top() {
        $result = M('table_info')->field('root_name')->where('table_type=3')->select();
        $this->assign('web_name', $result[0]['root_name']);
        $this->display('top');
    }

    public function home() {
        $this->show();
    }

    public  function  save_name() {
        $data['root_name']  = I('post.name');
        $data['table_name'] = I('post.name');
        $data['table_data'] = I('post.name');
        $data['table_type'] = 3;
        $data['table_url']  = I('post.name');
        $data['id'] = 123456789;
        M('table_info')->add($data, $options=array(), $replace=true);
    }
}