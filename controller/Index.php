<?php

/**
 * User: laowan
 * Date: 17/6/1
 * Time: 下午11:22
 */
namespace Controller;

use Core\Model;

class Index extends \Core\Controller {

    public function get()
    {
        $db = new Model();
        $data = $db->get('account', ['id', 'name', 'openid', 'number', 'headimg', 'intro']);
        print_r($data);
    }

    public function post()
    {
        echo "post";
    }

    public function put()
    {
        echo "put";
    }

    public function delete()
    {
        echo "delete";
    }
}