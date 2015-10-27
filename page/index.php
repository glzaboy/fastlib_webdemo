<?php
namespace page;


class index extends \fl\base\page
{

    function dohome($pathcmd)
    {
        return $this->getjson(array('fsfs'=>'fsdfds','你是我的小苹果'),JSON_UNESCAPED_UNICODE,'ts');
    }
}