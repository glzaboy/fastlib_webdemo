<?php
namespace page;

use fl\db\connect;

class index extends \fl\base\page
{

    function dohome($pathcmd)
    {
        try {
            $con = new connect('yiiiot');
            $l = $con->getQueryerBuilder();
            $condition = array();
            $condition['user.user_id'] = array(
                1,
                3
            );
            $leftjoin = array();
            $leftjoin['usercfg'] = array(
                'left',
                'usercfg.user_id' => 'user.user_id'
            );
            $item = array();
            $item['id'] = 'user.user_id';
            $item['id2'] = 'usercfg.user_id';
            $item[] = "user.email";
            $data = $l->select('user', $condition, $item, 'order by yi_user.user_id desc', '', $leftjoin);
            foreach ($data as $d) {
                print_r($d);
            }
            echo $data->debugDumpParams();
        } catch (\Exception $e) {
            print_r($e);
        }
    }
}