<?php

/**
 * User: laowan
 * Date: 17/6/1
 * Time: 下午11:17
 */
namespace Core;

class Base
{
    protected $_uri = null;
    protected $_allow_action = array('put', 'get', 'post', 'delete');
    protected $_controller = null;
    protected $_action = null;
    protected $_query = null;

    public function __construct() {
        global $config;
        $this->_action = trim(strtolower($_SERVER['REQUEST_METHOD']));  //获取请求方法
        if(!in_array($this->_action, $this->_allow_action)) { //判断是否允许的方法
            throw new \RestException\HttpRequestMethodException(); //不支持方法抛出一个异常
        }
        parse_str($_SERVER['QUERY_STRING'], $uri);
        empty($uri['ctrl']) ? $this->_controller = $uri['ctrl'] : $config['app']['default_ctrl'];
        $this->_uri = $uri;
        $this->_controller = $uri['ctrl'];
    }

    public function run()
    {
        
        //实例化控制器
        $controller = '\Controller\\' . ucfirst($this->_controller);
        $action = $this->_action;
        $ctrl = new $controller();
        $result = $ctrl->$action();
        echo $result;
    }

}