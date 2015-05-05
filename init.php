<?php
define("FL_RUNDIR", strtr(dirname(__FILE__), DIRECTORY_SEPARATOR, '/'));
if (file_exists('./fl.git/fl.php')) {
    require './fl.git/fl.php';
}
if (file_exists('../fl.git/fl.php')) {
    require '../fl.git/fl.php';
}
if (file_exists('../../fl.git/fl.php')) {
    require '../../fl.git/fl.php';
}
if (file_exists('../../../fl.git/fl.php')) {
    require '../../../fl.git/fl.php';
}