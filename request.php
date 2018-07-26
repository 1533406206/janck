<?php
/**
 * Created by PhpStorm.
 * User: zhzj
 * Date: 2018/7/26 0026
 * Time: 15:07
 */

class Request
{

    /**解析url请求参数
     * @return array
     */
    public static function parseGetParameter(){
        if($_SERVER['QUERY_STRING'] != ''){
            return $_REQUEST;
        }else if(@!$_SERVER['PATH_INFO']){
                return "";
            }else{
                @$value = explode('/',$_SERVER['PATH_INFO']);
                $arr = [];
                for($i=1;$i<count($value);$i = $i+2){
                    $arr[$value[$i]] = $value[$i+1];
                }
                return $arr;
            }
        }

}


