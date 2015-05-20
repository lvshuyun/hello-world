<?php

namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {

  private $status = false;

  //初始化表格数据
  function _initialize(){
        //根据url拿数据
        $table_data = $this->getData($this->get_url());
        //返回前台请求的url标识
        $this->assign('table_url',$this->get_url());
        if(empty($table_data)){
            //无数据
            $this->status = true;
        }else{
            $this->status = false;
            $this->assign('table_data',$table_data);
        }
        
   }

   public function get_url(){
        return CONTROLLER_NAME . '/' . ACTION_NAME;
   }

   public function judge_return(){
        if($this->status){
            //数据库中无数据或者数据不是本月最新，则显示一张新表格
            return ACTION_NAME;
        }else{
            //数据库中已有数据，直接呈现
            return 'Default:content';
        } 
    }

   public function getData($url){

        date_default_timezone_set('PRC');
        $start = date('Y-m-01', strtotime(date("Y-m-d")));
        $end_time   = strtotime("$start +1 month -1 day");
        $start_time = strtotime($start);
        if(empty($url)){
            return false;
        }
        $where['table_url'] = $url;
        $where['_string'] = " (create_time > " . $start_time  ." or create_time = " . $start_time . ") and (create_time < " . $end_time . " or create_time = " . $end_time . ") ";
        //得到表格原始数据
        $result = M()->table('table_info')->where($where)->select();
        if(!empty($result)){
            return $table_data = html_entity_decode($result[0]['table_data']);
        }
    }
}