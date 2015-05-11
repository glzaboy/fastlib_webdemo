<?php
namespace page;

use com\yiiiot\api\socket\Constant;

class index extends \fl\base\page
{

    function dohome($pathcmd)
    {
        $sqlBuilder = \fl\db\QueryBuilder::getQueryerBuilder(new \fl\db\connect('cp'));
        $sqlBuilder->disableprefix();
        $data = array();
        $data['ua'] = $_SERVER['HTTP_USER_AGENT'];
        $data['ip'] = $_SERVER['REMOTE_ADDR'];
        $data['time'] = date('Y-m-d H:i:s');
        $join = array();
        $join['tabl e2'] = "fsdfdsfds";
        $join['taba le3'] = array(
            'right',
            'id' => 'test',
            'id2' => 'test2'
        );
        $condition=array();
        $condition['name']="china";
        $sqlBuilder->select('tab fs', $condition, '*', '', '', $join);
        // $http = new \fl\helpers\httpclient();
        // $data = json_decode($http->getData("http://hello.api.235dns.com/api.php?code=json"), true);
        // $tplvar = array();
        // $tplvar['words'] = $data['words'];
        // return $this->render($tplvar);
    }

    function doconcat()
    {
        $sqlBuilder = \fl\db\QueryBuilder::getQueryerBuilder(new \fl\db\connect('cp'));
        $sqlBuilder->disableprefix();
        $data = array();
        $data['subject'] = $_REQUEST['subject'];
        $data['cont'] = $_REQUEST['cont'];
        $data['createdate'] = date('Y-m-d H:i:s');
        $sqlBuilder->insert('concatus', $data);
        header('content-type:text/html;charset=utf-8;');
        echo "你的信息已经收到。";
        header("refresh:3;url=/index-home");
    }

    function dotest()
    {
        $http = new \fl\helpers\httpclient();
        $data = array();
        $data['api_user'] = "glzaboy_test_W5CY3h";
        $data['api_key'] = "Ko9lF5Eb718EU0ax";
        $data['from'] = "service@sendcloud.im";
        $data['to'] = "glzaboy@163.com";
        $data['subject'] = "您好这个是您的密码";
        $data['html'] = "你太棒了！你已成功的从<br />SendCloud发送了一封测试邮件，接下
来快登录前台去完善账户信息吧！";
        $http->postData($data);
        print_r(json_decode($http->getData("http://sendcloud.sohu.com/webapi/mail.send.json")));
    }

    function dowall()
    {
        $tplvar = array();
        $client = new \com\yiiiot\api\socket\socketServiceClient(null);
        $this->getthrift($client);
        $res = $client->getwebsocket("test");
        $tplvar['websocket'] = $res->websocket;
        return $this->render($tplvar);
    }

    function dotest2()
    {
        $tplvar = array();
        $client = new \com\yiiiot\api\socket\socketServiceClient(null);
        $this->getthrift($client);
        $data = array();
        $data['text'] = "我是一只燕you are /::)good";
        $data['time'] = date('Y-m-d H:i:s');
        $data['uface'] = "http://avatar.zbjimg.com/006/92/27/200x200_avatar_49.jpg!small";
        $data['uname'] = "我是小鱼";
        
        $res = $client->sendmsg('test', $data);
        var_dump($res);
    }
}