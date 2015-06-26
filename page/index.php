<?php
namespace page;

use fl\db\QueryBuilder;
use fl\db\connect;
use fl\db\transaction;
class index extends \fl\base\page
{

    function dohome($pathcmd)
    {
        echo date('Y-m-d H:i:s');
        try{
            $con=new connect('yiiiot');
            $l=$con->getQueryerBuilder();
            print_r($l->gettables());
            $data=$l->select('user','','*','order by user_id desc');
            $l->update('user',array('showname'=>"飞雪欢春"),array('user_id=3'));
            $l->delete('user',array('user_id'=>2));
            foreach ($data as $d){
                print_r($d);
            }
        }catch (\Exception $e){
            print_r($e);
        }
    }

}