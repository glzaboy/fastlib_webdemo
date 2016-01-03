<?php
namespace page;

class music extends \fl\base\page
{

    function dorandurl($pathcmd)
    {
        $m_music = new \app\db\wx\music();
        $m_music->getQueryBuilder()->setpager(1,1);
        $data=$m_music->selectdata(null,"*",null,"order by rand()");
        return $this->getjson($data[0]);
    }
}