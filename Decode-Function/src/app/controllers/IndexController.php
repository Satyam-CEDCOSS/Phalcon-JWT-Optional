<?php

use Phalcon\Mvc\Controller;
use Phalcon\Security\JWT\Token\Parser;



class IndexController extends Controller
{
    public function indexAction()
    {
        // Redirect to view
    }
    public function checkAction()
    {
        $parser = new Parser();
        $tokenObject = $parser->parse($_POST['token']);
        $role = $tokenObject->getclaims()->getpayload()['sub'];
        print_r($role);die;
    }
}
