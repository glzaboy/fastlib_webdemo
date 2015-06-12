<?php
namespace page;

use fl\db\QueryBuilder;
use fl\db\connect;
class index extends \fl\base\page
{

    function dohome($pathcmd)
    {
        $l=new QueryBuilder(new connect('cp'));
        $l->select('cp', $orderby, $groupby);
    }

}