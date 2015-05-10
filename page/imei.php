<?php
namespace page;

class imei extends \fl\base\page
{

    function dohome()
    {
        return $this->render();
    }

    function doadd($pathcmd)
    {
        $connect = new \fl\db\connect('iot');
        $data = $connect->query('select count(1) as num from mobile where `imei`=?', array(
            0 => $_REQUEST['imei']
        ), false);
        $sqldata = $data->fetch();
        if ($sqldata['num']) {
            echo 0;
        } else {
            $connect->exec('insert into mobile (`imei`,`createDate`) values (?,NOW())', array(
                0 => $_REQUEST['imei']
            ), true);
            echo 1;
        }
    }

    function doget($pathcmd)
    {
        $connect = new \fl\db\connect('iot');
        $data = $connect->query('select count(1) as num from mobile where `imei`=?', array(
            0 => $_REQUEST['imei']
        ), false);
        $sqldata = $data->fetch();
        if ($sqldata['num']) {
            echo 1;
        } else {
            echo 0;
        }
    }

    function dolist($pathcmd)
    {
        $connect = new \fl\db\connect('iot');
        $data = $connect->query('select id,createDate,imei from mobile where 1', array(), false);
        $this->render(array(
            'list' => $data
        ));
    }
}