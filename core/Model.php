<?php

/**
 * User: laowan
 * Date: 17/6/1
 * Time: 下午11:28
 */
namespace Core;
class Model extends \Medoo\Medoo
{
    protected $_db = null;
    public function __construct()
    {
        global $config;
        parent::__construct($config['db']);
    }
}