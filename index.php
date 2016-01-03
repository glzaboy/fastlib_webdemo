<?php
if(extension_loaded('xhprof')){
    // xhprof_enable(XHPROF_FLAGS_NO_BUILTINS | XHPROF_FLAGS_CPU | XHPROF_FLAGS_MEMORY);
    // xhprof_enable( XHPROF_FLAGS_CPU | XHPROF_FLAGS_MEMORY);
    xhprof_enable(XHPROF_FLAGS_NO_BUILTINS | XHPROF_FLAGS_CPU | XHPROF_FLAGS_MEMORY);
    xhprof_enable();
}
require 'init.php';
$route = new \fl\base\route('index', 'home');
error_reporting(E_ALL);
if (preg_match('/^\/api/', $_SERVER['REQUEST_URI'])) {
    echo $route->runasthrift();
} else {
    echo $route->run();
}
if(extension_loaded('xhprof')){
    $xhprof_data = xhprof_disable();
    include_once  "./xhprof_lib/utils/xhprof_lib.php";
    include_once   "./xhprof_lib/utils/xhprof_runs.php";
    $xhprof_runs = new XHProfRuns_Default();
    $run_id = $xhprof_runs->save_run($xhprof_data,'web');
}