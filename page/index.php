<?php
namespace page;

use fl\db\QueryBuilder;
use fl\db\connect;
use fl\db\transaction;

class index extends \fl\base\page
{

    function dohome($pathcmd)
    {
        try {
            $con = new connect('yiiiot');
            $l = $con->getQueryerBuilder();
            $condition = array();
            $condition['user.user_id'] = 1;
            $leftjoin = array();
            $leftjoin['usercfg'] = array(
                'left',
                'usercfg.user_id' => 'user.user_id'
            );
            $item=array();
            $item['id']='user.user_id';
            $item['id2']='usercfg.user_id';

            $data = $l->select('user', $condition, $item, 'order by yi_user.user_id desc', '', $leftjoin);
            // $l->update('user',array('showname'=>"飞雪欢春"),array('user_id=3'));
            // $l->delete('user',array('user_id'=>2));
            foreach ($data as $d) {
                print_r($d);
            }
        } catch (\Exception $e) {
            print_r($e);
        }
    }
}