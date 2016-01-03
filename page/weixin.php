<?php
namespace page;
use app\db\wx\weixin_cfg;
class weixin extends \fl\base\page
{

    function dodispath()
    {
        $cfg=new weixin_cfg("音乐客");
        $s_wexin=new \fl\im\wechat($cfg->get('token'),$cfg->get('EncodingAESKey'),$cfg->get('AppID'),$cfg->get('AppSecret'));
        if($_REQUEST['echostr']){
            return $_REQUEST['echostr'];
        }
        if($s_wexin->parser())
    }
}