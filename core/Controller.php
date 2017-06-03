<?php

/**
 * Created by PhpStorm.
 * User: wanyujun
 * Date: 17/6/1
 * Time: 下午11:28
 */
namespace Core;
abstract  class Controller {

    public function __construct()
    {

    }

    public function show_json($data, $code) {
        $this->header($code);
    }
    
}