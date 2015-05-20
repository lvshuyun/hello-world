<?php
/**
 * Created by PhpStorm.
 *
 * TableNode3   代表树节点的第一个二级目录
 *
 *
 * User: zyf
 * Date: 15/4/28
 * Time: 16:34
 */

namespace Home\Controller;
use Think\Controller;
class TableNode3Controller extends BaseController {

    public function index() {
        $this->show();
    }

    // 增值纳税申报表（一般个人使用）
    public function table1() {
        $this->display($this->judge_return());
    }

    public  function  table2() {
        $this->display($this->judge_return());
    }

    public  function  table3() {
        $this->display($this->judge_return());
    }

    public  function  table4() {
        $this->display($this->judge_return());
    }

    public  function  table5() {
        $this->display($this->judge_return());
    }
}