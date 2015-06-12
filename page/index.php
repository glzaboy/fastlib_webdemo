<?php
namespace page;

use fl\db\QueryBuilder;
use fl\db\connect;
class index extends \fl\base\page
{

    function dohome($pathcmd)
    {
        echo date('Y-m-d').date('H:i:s'); 
//         $l=new QueryBuilder(new connect('cp'));
//         $l->select('cp', $orderby, $groupby);
    }

}