<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/26 0026
 * Time: 16:16
 */
var_export($_SERVER);
include_once 'request.php';
include_once 'response.php';


Response::res(Request::parseGetParameter());